<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body>

<div class="container-fluid p-0 ">
    <div class="auth-full-bg">
        <div class="bg-overlay"></div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">POS Trial Sign Up</h5>
                                        <p>No credit card required at trial session</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('assets/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="needs-validation" novalidate action="#">
                                    <div id="first_phase">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Business Email</label>
                                            <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email" required>
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>
                                        </div>

                                        {{--                                <div class="mb-3">--}}
                                        {{--                                    <label for="username" class="form-label">Username</label>--}}
                                        {{--                                    <input type="text" class="form-control" id="username" placeholder="Enter username" required>--}}
                                        {{--                                    <div class="invalid-feedback">--}}
                                        {{--                                        Please Enter Username--}}
                                        {{--                                    </div>--}}
                                        {{--                                </div>--}}

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>
                                        </div>
                                        <div class="mt-4 d-grid">
                                            <button id="letsGo" type="button" class="btn btn-primary waves-effect waves-light">Lets Go</button>
                                        </div>
                                    </div>
                                    <div id="second_phase">
                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter first name" required>
                                            <div class="invalid-feedback">
                                                Please Enter First Name
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter last name" required>
                                            <div class="invalid-feedback">
                                                Please Enter Last Name
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="company_name" class="form-label">Company Name</label>
                                            <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter company name" required>
                                            <div class="invalid-feedback">
                                                Please Enter Company Name
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-md-8">
                                                <label for="account_name" class="form-label">Account Name</label>
                                                <input type="text" name="account_name" class="form-control" id="account_name"  readonly>
                                            </div>
                                            <div class="col-md-4" style="margin-top: 32px;">
                                                <strong>.pos.com</strong>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone_number" class="form-label">Phone Number</label>
                                            <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="Enter phone number" required>
                                            <div class="invalid-feedback">
                                                Please Enter Phone Number
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mt-4 d-grid">
                                                    <button type="button" id="previous" class="btn btn-primary waves-effect waves-light">
                                                        <i class="bx bx-caret-left font-size-16 align-middle me-2"></i> Previous
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="mt-4 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    {{--                                <div class="mt-4 text-center">--}}
                                    {{--                                    <h5 class="font-size-14 mb-3">Sign up using</h5>--}}

                                    {{--                                    <ul class="list-inline">--}}
                                    {{--                                        <li class="list-inline-item">--}}
                                    {{--                                            <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">--}}
                                    {{--                                                <i class="mdi mdi-facebook"></i>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="list-inline-item">--}}
                                    {{--                                            <a href="javascript::void()" class="social-list-item bg-info text-white border-info">--}}
                                    {{--                                                <i class="mdi mdi-twitter"></i>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="list-inline-item">--}}
                                    {{--                                            <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">--}}
                                    {{--                                                <i class="mdi mdi-google"></i>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    {{--                                </div>--}}

                                    {{--                                <div class="mt-4 text-center">--}}
                                    {{--                                    <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>--}}
                                    {{--                                </div>--}}
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            <p>Already have an account ? <a href="{{route('login-page')}}" class="fw-medium text-primary"> Login</a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

<!-- validation init -->
<script src="{{asset('assets/js/pages/validation.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script>
    $(document).ready(function (){
        $('#second_phase').hide()
    })
    $('#letsGo').on('click', function (){
        $('#first_phase').hide()
        $('#second_phase').show()
    })
    $('#company_name').on('input', function (){
        $('#account_name').attr('value',$(this).val().replace(/ /gi, "-").toLowerCase())
    })
    $('#previous').on('click', function (){
        $('#first_phase').show()
        $('#second_phase').hide()
    })
</script>

</body>
</html>

