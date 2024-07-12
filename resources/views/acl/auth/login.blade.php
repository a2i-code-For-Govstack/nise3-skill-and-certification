@php
    $currentInstitute = app('currentInstitute');
    $layout = 'master::layouts.front-end';
    $currentFileName = "Login";
@endphp

@extends($layout)
@section('title')
    {{ $currentInstitute && $currentInstitute->title ? strtoupper($currentInstitute->title)."-".$currentFileName : env('APP_NAME')."-".$currentFileName }}
@endsection

{{-- @section('header', '')
@section('footer', '') --}}

@section('full_page_content')
{{-- 
    <div class="bitac-login-area">
        <div class="login-area text-center">
            <div class="row">
                <div class="col-sm-12 pt-5">
                    <h4 class="pt-4 pb-4"
                        style="color: #636f41">{{ $currentInstitute ?  $currentInstitute->title . __('generic.training_certificate_system') : __('generic.dpg_training_system') }}
                    </h4>
                </div>
                <div class="col-sm-4 mx-auto">
                    <form class="login-form" action="{{route('admin.login')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fa fa-user"></i>
                                <input class="form-control custom_input_field" type="text" autocomplete="off"
                                    placeholder="{{__('generic.email')}}" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fa fa-lock"></i>
                                <input class="form-control custom_input_field" type="password" autocomplete="off"
                                    placeholder="{{__('generic.password')}}" name="password">
                            </div>
                        </div>
                        <div class="form-actions">

                            <button type="submit"
                                    class="btn btn-primary btn-block submit_btn">{{__('generic.login')}}</button>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-5 help-desk pt-4">
                                <h4>{{__('generic.help_desk')}}</h4>
                                <p><i class="fa fa-phone"></i>
                                    <a href="tel:{{!empty($currentInstitute->primary_phone) ? $currentInstitute->primary_phone:'+88-02-8870680'}}">
                                        {{!empty($currentInstitute->primary_phone)?$currentInstitute->primary_phone:'+88-02-8870680'}}
                                    </a>
                                </p>
                                <p><i class="fa fa-envelope"></i>
                                    <a href="mailto:{{!empty($currentInstitute->email)?$currentInstitute->email:'support@audit.com'}}">
                                        {{!empty($currentInstitute->email)?$currentInstitute->email:'support@audit.com'}}
                                    </a>
                                </p>
                            </div>

                            <div class="col-md-12">
                                <h4 class="text-center pt-3"><a href="#" target="_blank"
                                                                style="color: #693391;">{{__('generic.user_guide')}}</a>
                                </h4>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
 --}}

<div class="">
        <div class="text-center">
            <div class="row" style="height: 100vh">
                <div class="col-md-6 align-content-center d-none d-md-block" style="background-color: #168fd3">
                    <div class="py-5 my-5">
                        <img class="img-fluid" src="/assets/testImageDummy/authentication.svg" alt="" style="height: 40rem">
                    </div>
                </div>
                <div class="col-md-6 align-content-center">
                    <div class="container col-xl-8 col-lg-10 col-md-12">
                        <form action="{{route('admin.login')}}" method="post" id="login" autocomplete="off" class="bg-light border  p-5 login-form">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="container-fluid">
                                    <h1 class="title my-3">Sign in</h1>
                                </div>
                                <div class="col-12 form-group text-left">
                                    <div class="text-left">
                                        <label for="email" class="font-weight-normal">
                                            {{ __('generic.email') }}
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                    <div class="input-group mb-3 col-12 input-icon">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input name="email" type="text" value="" class="form-control custom_input_field"
                                            id="email" placeholder="{{__('generic.email')}}" autocomplete="off"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 form-group text-left">
                                    <div class="text-left">
                                        <label for="password" class="font-weight-normal">
                                            {{__('generic.password')}}
                                            <span class="required">*</span>
                                        </label>
                                   </div>
                                    <div class="input-group mb-3 col-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input name="password" type="password" value="" class="input form-control"
                                            id="password" placeholder="password" required="true" aria-label="password"
                                            aria-describedby="basic-addon1" />
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <i class="fas fa-eye" id="show_eye"></i>
                                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group text-nowrap form-check text-left">
                                        <input type="checkbox" name="remember" class="form-check-input" id="remember_me" />
                                        <label class="form-check-label" for="remember_me">Remember me</label>
                                        {{-- Logic not implemented for Rember me --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block" type="submit" name="signin">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('css')
        <style>
            /* Old CSS start */
            /* Bitac login CSS */
            /* .bitac-login-area {
                background: url(http://skills.gov.bd/bitac_cms/img/back_9.png);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                min-height: 100vh;
                overflow: hidden;
            }

            .login-form {
                padding: 44px;
                background: url(http://skills.gov.bd/bitac_cms/assets/admin/pages/img/bg-white-lock.png);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }

            .login-form h4 {
                color: #0000ff;
                font-size: 15px;
                font-weight: bold;
            }

            .help-desk, .support {
                text-align: start;
            }

            .help-desk p, .support p {
                margin: 0;
                font-size: 14px;
            }

            .help-desk p a, .support p a {
                color: #6c6c6c;
            }

            .help-desk p a:hover, .support p a:hover {
                color: #976666;
            }

            .input-icon {
                position: relative;
            }

            .input-icon > i {
                color: #ccc;
                display: block;
                position: absolute;
                margin: 11px 2px 4px 10px;
                z-index: 3;
                width: 16px;
                height: 16px;
                font-size: 16px;
                text-align: center;
            }

            .input-icon > .form-control {
                padding-left: 33px;
            }

            .visible-ie9 {
                /* display: none; */
            /* }

            .visible-ie8 {
                display: none;
            }

            .submit_btn {
                background: #3379B5;
            }

            .custom_input_field {
                border: 2px solid #e3e7f1;
            }

            .custom_input_field:focus {
                border-color: #e3e7f1;
            }

            .tech_support {
                color: #6b6666;
                font-size: 17px;
            }

            .tech_support:hover {
                color: #168fd3;
            }

            .error {
                display: block !important;
                text-align: justify !important;
            }

            /* old css end */ */

        </style>
    @endpush

    @push('js')
        <x-generic-validation-error-toastr/>

        <script>
            const loginForm = $('.login-form');
            loginForm.validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    }
                },
                submitHandler: function (htmlForm) {
                    $('.overlay').show();
                    htmlForm.submit();
                }
            });
        </script>

        <script>
            function password_show_hide() {
                var x = document.getElementById("password");
                var show_eye = document.getElementById("show_eye");
                var hide_eye = document.getElementById("hide_eye");
                hide_eye.classList.remove("d-none");
                if (x.type === "password") {
                    x.type = "text";
                    show_eye.style.display = "none";
                    hide_eye.style.display = "block";
                } else {
                    x.type = "password";
                    show_eye.style.display = "block";
                    hide_eye.style.display = "none";
                }
            }
        </script>
    @endpush


@endsection
