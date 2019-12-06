<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Kodinger">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('my-login-master/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('my-login-master/css/my-login.css'); ?>">
</head>

<body class="my-login-page">
  <?php if ($this->session->flashdata('message')): ?>
      <div class="row">
        <div class="alert alert-danger alert-dismissible tengah" role="alert" style="margin-bottom: 7px;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-warning"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
        </div>
      </div>
    <?php endif ;?>
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-md-center h-100">
        <div class="card-wrapper">
          <div class="brand">
            <img src="<?php echo base_url('asset/img/lembaga/'.$infopt->logo_pt) ?>" alt="logo" class="img-thumbnail">
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Login</h4>
              <form action="<?php echo base_url('index.php/login/proses_login/') ?>" method="POST" class="my-login-validation" novalidate="">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" type="username" class="form-control" name="username" value="" required autofocus>
                  
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="exampleInputPassword1" type="password" class="form-control" name="password" required data-eye>
                    <div class="invalid-feedback">
                      Password is required
                    </div>
                </div>

                <div class="form-group">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                    <label for="remember" class="custom-control-label">Remeber Me</label>
                  </div>
                </div>

                <div class="form-group m-0">
                  <button type="submit" class="btn btn-primary btn-block">
                    Login
                  </button>
                </div>
                
              </form>
            </div>
          </div>
          <div class="footer">
            Copyright <?php echo @$brand.' '.date('Y'); ?> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo base_url('my-login-master/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('my-login-master/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('my-login-master/js/my-login.js'); ?>"></script>
</body>
</html>
