<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Classes\AuthHelper;
use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Models\Institute;
use App\Models\Branch;
use App\Models\TrainingCenter;
use App\Models\Trainee;
use App\Models\TraineeCourseEnroll;
use App\Models\CertificateRequest; 
use App\Models\Course; 
use App\Models\Event;
use App\Services\DashboardService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends BaseController
{
    const  VIEW_PATH = "master::acl.users.";
    protected DashboardService $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
        $this->authorizeResource(User::class);
    }

    /**
     * @return View
     */
    public function dashboard(): View
    {
        /** @var User $authUser */
        $authUser = AuthHelper::getAuthUser();

        $adminInfo = $this->dashboardService->getAdminInfo($authUser);
        $totalInstitutesCount = Institute::count();
        $totalBranchesCount = Branch::count();
        $totalTrainingCentersCount = TrainingCenter::count();
        $totalCoursesCount = Course::count();
        $totalTraineesCount = Trainee::count();
        $pendingRequestsCount = TraineeCourseEnroll::where('enroll_status', TraineeCourseEnroll::ENROLL_STATUS_PROCESSING)->count();
        $pendingCertificateRequestsCount = CertificateRequest::where('row_status', '=', CertificateRequest::REQUESTED)->count();

        $events = Event::orderBy('date', 'asc')->where('date', '>=', now())->limit(3)->get();


        $dashboardStats = [
            'totalInstitutesCount' => $totalInstitutesCount,
            'totalBranchesCount' => $totalBranchesCount,
            'totalTrainingCentersCount' => $totalTrainingCentersCount,
            'totalCoursesCount' => $totalCoursesCount,
            'totalTraineesCount' => $totalTraineesCount,
            'pendingRequestsCount' => $pendingRequestsCount,
            'pendingCertificateRequestsCount' => $pendingCertificateRequestsCount,
        ];

        return view(self::VIEW_PATH . 'dashboard', ['adminInfo' => $adminInfo, 'dashboardStats' => $dashboardStats, 'events' => $events,]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getTrainerExamRoutine(Request $request): JsonResponse
    {
        $routine = $this->dashboardService->examSchedules($request);
        return DataTables::eloquent($routine)
            ->addColumn('actions', function ($routine) {
                return '<a href="' . route('admin.examinations.show', $routine->examination_id) . '" class="btn btn-outline-info btn-sm"> <i class="fas fa-eye"></i> ' . __('generic.exam_details') . ' </a>';
            })
            ->rawColumns(['actions'])
            ->toJson();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getTrainerDailyRoutine(Request $request): JsonResponse
    {
        $routine = $this->dashboardService->classSchedules($request);
        return DataTables::eloquent($routine)->toJson();
    }

}
