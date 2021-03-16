<div id="back">

</div>

<div class="login-box">
    <div class="login-logo">
        <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
        <img src="views/dist/img/template/android-chrome-192x192.png" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login POS System</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="User" name="loginUser" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="loginPass" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    </div>
                    <!-- /.col -->
                </div>

                <?php

                $login = new ControllerUsers();
                $login->ctrUserLogin();

                ?>

            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>