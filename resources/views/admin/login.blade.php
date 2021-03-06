<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Muhammad Fiqri Alfayed" />
        <title>Login Page | Admin E-Government Tengkurak</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">

        <!-- Stylesheet -->
        <link href="{{ url('admin/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-bold my-4">MASUK ADMIN</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control py-4" id="username" type="text" placeholder="Masukkan username" name="username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4" id="password" type="password" placeholder="Masukkan kata sandi" name="password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="remember" type="checkbox" />
                                                    <label class="custom-control-label" for="remember">Ingat Kata Sandi</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ url('/password') }}">Lupa Kata Sandi?</a>
                                                <a class="btn btn-primary" href="{{ url('/dashboard') }}">Masuk</a>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Admin E-Government Tengkurak 2021</div>
                            {{-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> --}}
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ url('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ url('admin/js/scripts.js') }}"></script>
    </body>
</html>
