<nav class="main-header header-expand navbar navbar-fixed navbar-expand navbar-white navbar-light sticky-top"
    style="top: 61px; width: -webkit-fill-available;">

    <ul class="navbar-nav" style="display: flex; flex: auto">
       <li class="nav-item">
            <div class="toggle-btn pb-0" onclick="toggleSidebar()">
                <i class="fas fa-bars" style="color:#671688; font-size:28px;"></i>
            </div>
       </li>

       <li class="nav-item">
        <a class="navbar-brand" href="#" style="padding-top: 8px">Dashboard</a>
       </li>
        @if(\App\Helpers\Classes\AuthHelper::checkAuthUser())
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}" style="padding-top: 12px"><i class="fa fa-circle"></i></a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        @endif
    </ul>

    <ul class="navbar-nav ml-auto">
        @if ($siteSettingInfo->show_lang)
        <li class="nav-item m-auto">
            <div class="btn-group language bg-light" style="border-radius: 10px">
                <button onclick="document.getElementById('change_language').submit()"
                        class="btn btn-sm btn-{{app()->getLocale() === 'en' ? 'primary': 'default'}} padding8 font-size-12 border-rad-left14">
                    English
                </button>
                <button onclick="document.getElementById('change_language').submit()"
                        class="btn btn-sm btn-{{app()->getLocale() === 'bn' ? 'primary': 'default'}} padding5 font-size-12 border-rad-right14">
                    বাংলা
                </button>
            </div>
            <form method="post" action="{{route('change-language', app()->getLocale() === 'bn' ? 'en': 'bn')}}"
                  id="change_language">
                @csrf
            </form>
        </li>
        @endif
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.login-form')}}">
                    <i class="far fa-user"></i>
                </a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link text-sm" data-toggle="dropdown" href="#">
                    <i class="fas fa-user-tie"></i> {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">
                    <a href="{{route('admin.users.show', auth()->user()->id)}}" id="user-profile-view">
                      <i class="fas fa-user-tie fa-5x"></i><br/>
                        <h4 class="text-dark">{{auth()->user()->name}}</h4>
                        <span class="d-block text-sm">
                        <i class="fas fa-user-tag ml-2"></i>
                        {{optional(auth()->user()->userType)->title}}
                        </span>
                    </a>
                </span>

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('admin.logout') }}" class="dropdown-item dropdown-footer"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
