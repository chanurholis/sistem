<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-5">

      <div class="card border-0 my-4">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!-- <div class="col-lg-6 d-none d-lg-block bg-password-image"></div> -->
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                  <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                </div>
                <form class="user">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user rounded-0" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  </div>
                  <a href="<?= base_url('login') ?>" class="btn btn-secondary btn-user btn-block rounded-0">
                    Reset Password
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small text-decoration-none text-secondary" href="<?= base_url('register') ?>">Buat akun baru!</a>
                </div>
                <div class="text-center">
                  <a class="small text-decoration-none text-secondary" href="<?= base_url('login') ?>">Sudah memiliki akun!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>