<div class="login-box">
    <div class="login-logo">
        <a><b>Admin</b> KOS</a>
    </div> <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login</p>
            <?= $this->session->flashdata('massage'); ?>

            <form action="<?= base_url('admin') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mb-0">
                <a href="<?= base_url('admin/registration') ?>" class="text-center">Register a new admin</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
</div>
</div>