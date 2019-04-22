<!-- @extends('layout.header') -->
@include('layout.header')
<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <p class="alert-danger">
                <?php 
                  $exception = Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  }
                ?>
              </p>

              <form method="post" action="{{url('/adminlogin')}}">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" class="form-control p_input" name="admin_email">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="text" class="form-control p_input" name="admin_password">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                  <a href="#" class="google-login btn btn-google">Google+</a>
                </div>
                <small class="text-center d-block">Don't have an Account?<a href="#"> Sign Up</a></small>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


  @include('layout.footer')