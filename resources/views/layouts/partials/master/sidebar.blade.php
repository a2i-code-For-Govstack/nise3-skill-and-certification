@php
    $currentInstitute = app('currentInstitute');
    use App\Helpers\Classes\AuthHelper;
@endphp

<!-- Main Sidebar Container -->
{{--elevation-4--}}
<div class="sidebar">
    <h3 class="text-center my-3">
        <i class="fas fa-user-tie"></i> {{auth()->user()->name}}
    </h3>
    <div class="container">
        <ul class="nav flex-column">
            @if (!(AuthHelper::getAuthUser()->user_type_id == 4))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                        <i class="fas fa-university"></i>
                        <span>Institutes</span>
                    </a>
                    <div class="dropdown-menu-sidebar">
                        @if (!(AuthHelper::getAuthUser()->user_type_id == 6))
                            @if (!(AuthHelper::getAuthUser()->user_type_id == 5))
                                <a class="dropdown-item {{ request()->is('admin/institutes*') ? 'active-sidebar' : '' }}"
                                    href="{{ route('admin.institutes.index') }}">
                                    Institutes
                                </a>
                            @endif
                            <a class="dropdown-item {{ request()->is('admin/branches*') ? 'active-sidebar' : '' }}"
                                href="{{ route('admin.branches.index') }}">
                                Branches
                            </a>
                        @endif
                        <a class="dropdown-item {{ request()->is('admin/training-centers*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.training-centers.index') }}">
                            Training Centers
                        </a>
                    </div>
                </li>
            @endif
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                    <i class="fas fa-book"></i>
                    <span>Courses</span>
                </a>
                <div class="dropdown-menu-sidebar">
                    @if (!(AuthHelper::getAuthUser()->user_type_id == 4))
                        <a class="dropdown-item {{ request()->is('admin/courses*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.courses.index') }}">
                            Courses
                        </a>
                        <a class="dropdown-item {{ request()->is('admin/programmes*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.programmes.index') }}">
                            Programmes
                        </a>
                        <a class="dropdown-item {{ request()->is('admin/batches*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.batches.index') }}">
                            Batches
                        </a>
                    @endif
                    <a class="dropdown-item {{ request()->is('admin/batches/certificates*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.batches.certificates.index') }}">
                        Batch Certificates
                    </a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Training</span>
                </a>
                <div class="dropdown-menu-sidebar">
                    <a class="dropdown-item {{ request()->is('admin/trainee/certificates/request') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.trainee.certificates.request') }}">
                        Certificate Requests
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/trainee/certificates/request/accepted/list*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.trainee.certificates.request.accepted') }}"
                        style="text-wrap: balance">
                        Accepted Certificate Requests
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/trainee-registrations*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.trainee.registrations.index') }}">
                        Trainee Applications
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/completed-batches*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.completed-batches') }}">
                        Completed Batches
                    </a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                    <i class="fas fa-images"></i>
                    <span>Media</span>
                </a>
                <div class="dropdown-menu-sidebar">
                    @if (!(AuthHelper::getAuthUser()->user_type_id == 4) && !(AuthHelper::getAuthUser()->user_type_id == 5) && !(AuthHelper::getAuthUser()->user_type_id == 6))
                        <a class="dropdown-item {{ request()->is('admin/galleries*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.galleries.index') }}">
                            Galleries
                        </a>
                        <a class="dropdown-item {{ request()->is('admin/gallery-categories*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.gallery-categories.index') }}">
                            Gallery Categories
                        </a>
                        <a class="dropdown-item {{ request()->is('admin/sliders*') ? 'active-sidebar-sidebar' : '' }}"
                            href="{{ route('admin.sliders.index') }}">
                            Sliders
                        </a>
                        <a class="dropdown-item {{ request()->is('admin/videos*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.videos.index') }}">
                            Videos
                        </a>
                        <a class="dropdown-item {{ request()->is('admin/intro-videos*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.intro-videos.index') }}">
                            Intro Videos
                        </a>
                    @endif
                    <a class="dropdown-item {{ request()->is('admin/video-categories*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.video-categories.index') }}">
                        Video Categories
                    </a>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link sidebar-nav-link {{ request()->is('admin/events*') ? 'active-sidebar' : '' }}"
                    href="{{ route('admin.events.index') }}">
                    <i class="far fa-calendar"></i>
                    <span>Events</span>
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                    <i class="fas fa-file-alt"></i>
                    <span>Exams</span>
                </a>
                <div class="dropdown-menu-sidebar">
                    <a class="dropdown-item {{ request()->is('admin/examination-types*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.examination-types.index') }}">
                        Examination Types
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/examinations*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.examinations.index') }}">
                        Examinations
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/examination-results*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.examination-results.index') }}">
                        Examination Results
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/routines*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.routines.index') }}">
                        Routines
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/examination-routines*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.examination-routines.index') }}">
                        Examination Routines
                    </a>
                </div>
            </li>
            
            @if (!(AuthHelper::getAuthUser()->user_type_id == 4))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                        <i class="fas fa-certificate"></i>
                        <span>Certificates</span>
                    </a>
                    <div class="dropdown-menu-sidebar">
                        <a class="dropdown-item {{ request()->is('admin/certificate-templates*') ? 'active-sidebar' : '' }}" href="{{ route('admin.certificate-templates.index') }}">Certificate Templates</a>
                    </div>
                </li>
            @endif
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                    <i class="fas fa-users"></i>
                    <span>Trainees</span>
                </a>
                <div class="dropdown-menu-sidebar">
                    <a class="dropdown-item {{ request()->is('admin/trainees*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.trainees.index') }}">
                        Trainees
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/trainee-accept-list*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.trainee.accept-list') }}">
                        Trainee Accept List
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/trainee-feedbacks*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.show.trainee-feedbacks') }}">
                        Trainee Feedbacks
                    </a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                    <i class="fas fa-comments"></i>
                    <span>Feedback</span>
                </a>
                <div class="dropdown-menu-sidebar">
                    <a class="dropdown-item {{ request()->is('admin/visitor-feedback*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.visitor-feedback.index') }}">
                        Visitor Feedback
                    </a>
                    <a class="dropdown-item {{ request()->is('admin/trainer-feedbacks*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.show.trainer-feedbacks') }}">
                        Trainer Feedback
                    </a>
                </div>
            </li>
            
            @if (!(AuthHelper::getAuthUser()->user_type_id == 4) && !(AuthHelper::getAuthUser()->user_type_id == 5) && !(AuthHelper::getAuthUser()->user_type_id == 6))
                <li class="nav-item">
                    <a class="nav-link sidebar-nav-link {{ request()->is('admin/question-answers*') ? 'active-sidebar' : '' }}"
                        href="{{ route('admin.question-answers.index') }}">
                        <i class="fas fa-question-circle"></i>
                        <span>FAQs</span>
                    </a>
                </li>
            @endif
            
            @if (!(AuthHelper::getAuthUser()->user_type_id == 4))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                    <div class="dropdown-menu-sidebar">
                        <a class="dropdown-item {{ request()->is('admin/static-page*') ? 'active-sidebar' : '' }}"
                            href="{{ route('admin.static-page.index') }}">
                            Static Pages
                        </a>
                        @if (!(AuthHelper::getAuthUser()->user_type_id == 5) && !(AuthHelper::getAuthUser()->user_type_id == 6))
                            <a class="dropdown-item {{ request()->is('admin/site-setting*') ? 'active-sidebar' : '' }}"
                                href="{{ route('admin.site-setting.index') }}">
                                Site Settings
                            </a>
                        @endif
                    </div>
                </li>
            @endif
        </ul>
    </div>
</div>

@push('js')
    <script>
        document.querySelectorAll('.dropdown').forEach(function (dropdownElement) {
            dropdownElement.addEventListener('click', function () {
                this.classList.toggle('show');
                var dropdownMenu = this.querySelector('.dropdown-menu-sidebar');
                if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                    dropdownMenu.style.display = 'block';
                } else {
                    dropdownMenu.style.display = 'none';
                }
            });
        });
    </script>
@endpush