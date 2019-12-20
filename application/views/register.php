<div class="container mt-4">

  <div class="card border-0 m-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-xl-5 col-lg-12 col-md-9 m-auto">
          <div>
            <div class="text-center">
              <h1><i class="fab fa-apple mb-4"></i></h1>
            </div>
            <form class="user" method="post" action="<?= base_url('register') ?>">
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="text" class="form-control rounded-0 form-control-user" name="nama" id="exampleFirstName" placeholder="Nama" value="<?= set_value('nama') ?>">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control rounded-0 form-control-user" name="email" id="exampleInputEmail" placeholder="Email" value="<?= set_value('email') ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control rounded-0 form-control-user" name="password1" id="exampleInputPassword" placeholder="Password" value="<?= set_value('password') ?>">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control rounded-0 form-control-user" name="password2" id="exampleInputPassword" placeholder="Ulangi Password" value="<?= set_value('password') ?>">
                </div>
              </div>
              <button type="submit" class="btn btn-secondary btn-user btn-block rounded-0">
                Daftar
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small text-secondary text-decoration-none" href="<?= base_url('forgot') ?>">Lupa Password?</a>
            </div>
            <div class="text-center">
              <a class="small text-secondary text-decoration-none" href="<?= base_url('login') ?>">Sudah Memiliki Akun!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>