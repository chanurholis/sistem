<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-5 col-lg-12 col-md-9">

      <div class="card border-0 my-4">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-12">
              <div class="">
                <div class="text-center">
                  <h1><i class="fab fa-apple mb-4"></i></h1>
                  <?= $this->session->flashdata('message'); ?>
                </div>
                <form method="post" action="<?= base_url('home') ?>" class="user">
                  <div class="form-group">
                    <input name="email" type="email" value="<?= set_value('email') ?>" class="form-control rounded-0 form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control rounded-0 form-control-user" id="exampleInputPassword" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <div class="form-group">
                  </div>
                  <button type="submit" class="btn btn-secondary btn-user btn-block rounded-0">
                    Masuk
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small text-secondary text-decoration-none" href="<?= base_url('register') ?>">Buat akun baru!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>