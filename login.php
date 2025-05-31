<?php include('header.php') ?>
    <body>

<section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="text-center"> <span class="fa-stack fa-2x">
                     <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-user fa-stack-1x text-light"></i> 
                     
                    </span> </div>
                <form action="Action/login.php" method="POST">
                    <div class="md-form">
                        <input type="email" id="email" name="email" class="form-control">
                        <label for="email">Your Email</label>
                    </div>
                    <div class="md-form">
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password">Your Passwords</label>
                    </div>
                   <div class="text-center">
                    <button class="btn btn-secondary" name="login">Login</button>
                   </div> 
                </form>
            </div>
        </div>

    </div>
</section>

        
   <?php include('footer.php') ?>