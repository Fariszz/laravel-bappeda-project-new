<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png ') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bulid/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('build/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('build/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Template Main CSS File -->
  <link href="{{asset('build/assets/css/style.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" hre=build/assets/css/syle.css"> -->
  <!-- =======================================================
     * Template Name: NiceAdmin - v2.4.1
     * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
     * Author: BootstrapMade.com
     * License: https://bootstrapmade.com/license/
     ======================================================== -->
</head>

<body class="lgn">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Di-Rangkul</span>
                </a>
              </div>End Logo -->

              <div class="logn">
                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h1 class="login card-title text-center pb-0 fs-4">Di-Rangkul</h1>
                      <p class="text-center small">Sistem Informasi Pendataan Aspirasi Masyarakat</p>
                    </div>

                    <form class="row g-3 needs-validation" novalidate method="POST" action="">
                      @csrf
                      <div class="col-12">
                        <div class="input-group has-validation">
                          <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                            required>
                          <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>

                        </div>
                      </div>

                      <div class="col-12">
                        <div class="input-group has-validation">
                          <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password" required>
                          <button class="input-group-text" id="inputGroupPrepend"><i class="bi bi-eye"></i></button>

                        </div>
                      </div>


                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                      </div>

                      <div class="col-12 d-flex justify-content-center">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                          <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('build/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset ('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('build/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{ asset ('build/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset ('build/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset ('build/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset ('build/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset ('build/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('build/assets/js/main.js')  }}"></script>


</body>

</html>