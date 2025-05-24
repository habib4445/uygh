<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School-management-system</title>
 <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel='stylesheet' id='wsl-widget-css'  href='https://mdbcdn.b-cdn.net/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.6.2' type='text/css' media='all' />
<link rel='stylesheet' id='compiled.css-css'  href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/compiled-4.19.2.min.css?ver=4.19.2' type='text/css' media='all' />
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

body{
	font-family: 'Roboto', sans-serif;
}
* {
	margin: 0;
	padding: 0;
}
i {
	margin-right: 10px;
}
/*----------bootstrap-navbar-css------------*/
.navbar-logo{
	padding: 15px;
	color: #fff;
}
.navbar-mainbg{
	background-color: #5161ce;
	padding: 0px;
}
#navbarSupportedContent{
	overflow: hidden;
	position: relative;
}
#navbarSupportedContent ul{
	padding: 0px;
	margin: 0px;
}
#navbarSupportedContent ul li a i{
	margin-right: 10px;
}
#navbarSupportedContent li {
	list-style-type: none;
	float: left;
}
#navbarSupportedContent ul li a{
	color: rgba(255,255,255,0.5);
    text-decoration: none;
    font-size: 15px;
    display: block;
    padding: 20px 20px;
    transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
}
#navbarSupportedContent>ul>li.active>a{
	color: #5161ce;
	background-color: transparent;
	transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
	content: "\f105";
	position: absolute;
	right: 20px;
	top: 10px;
	font-size: 14px;
	font-family: "Font Awesome 5 Free";
	display: inline-block;
	padding-right: 3px;
	vertical-align: middle;
	font-weight: 900;
	transition: 0.5s;
}
#navbarSupportedContent .active>a:not(:only-child):after {
	transform: rotate(90deg);
}
.hori-selector{
	display:inline-block;
	position:absolute;
	height: 100%;
	top: 0px;
	left: 0px;
	transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
	background-color: #fff;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left{
	position: absolute;
	width: 25px;
	height: 25px;
	background-color: #fff;
	bottom: 10px;
}
.hori-selector .right{
	right: -25px;
}
.hori-selector .left{
	left: -25px;
}
.hori-selector .right:before,
.hori-selector .left:before{
	content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #5161ce;
}
.hori-selector .right:before{
	bottom: 0;
    right: -25px;
}
.hori-selector .left:before{
	bottom: 0;
    left: -25px;
}


@media(min-width: 992px){
	.navbar-expand-custom {
	    -ms-flex-flow: row nowrap;
	    flex-flow: row nowrap;
	    -ms-flex-pack: start;
	    justify-content: flex-start;
	}
	.navbar-expand-custom .navbar-nav {
	    -ms-flex-direction: row;
	    flex-direction: row;
	}
	.navbar-expand-custom .navbar-toggler {
	    display: none;
	}
	.navbar-expand-custom .navbar-collapse {
	    display: -ms-flexbox!important;
	    display: flex!important;
	    -ms-flex-preferred-size: auto;
	    flex-basis: auto;
	}
}


@media (max-width: 991px){
	#navbarSupportedContent ul li a{
		padding: 12px 30px;
	}
	.hori-selector{
		margin-top: 0px;
		margin-left: 10px;
		border-radius: 0;
		border-top-left-radius: 25px;
		border-bottom-left-radius: 25px;
	}
	.hori-selector .left,
	.hori-selector .right{
		right: 10px;
	}
	.hori-selector .left{
		top: -25px;
		left: auto;
	}
	.hori-selector .right{
		bottom: -25px;
	}
	.hori-selector .left:before{
		left: -25px;
		top: -25px;
	}
	.hori-selector .right:before{
		bottom: -25px;
		left: -25px;
	}
}
/* Call to Action */
.btn{
    color:#fff;
    background-color:  #5161ce;
    /* padding:10px 5px 2px 1px; */
    margin:0;

}
.btn:hover{
    background-color: tomato;
    color:black;
}


</style>


<body>


<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">SMS</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
                    
                </li>
            </ul>
        </div>
    </nav>
<div class="d-flex shadow" style="height:500px; background:linear-gradient(45deg, #3923a7 , transparent)">


    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-3 text-white font-weight-bold" >School Management System</h1>
            <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore veritatis hic laudantium nemo aliquid numquam commodi earum sunt quam fugit ea perspiciatis, vel id itaque in officiis dolores blanditiis exercitationem!</p>
            <a href="" class="btn btn-ig btn-primary">Call to Action</a>
        </div>
        <div class="col-lg-6">
         <div class="col-lg-8 mx auto card shadow-lg">
            <div class="card-body">
                <h3 class="text-black">Admission Forms</h3>
                  <form action="" method="post">
                <div class="md-form">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1">Your Name</label>
                </div>

                <div class="md-form">
                    <input type="email" id="email" class="form-control">
                    <label for="email">Your Email</label>
                </div>

                <div class="md-form">
                    <input type="text" id="mobile" class="form-control">
                    <label for="mobile">Your Mobile</label>
                </div>


                <div class="md-form">
                    <input type="text" id="Class" class="form-control">
                    <label for="class">Your Class</label>
                </div>

                <button class="btn btn-primary btn-block">Submit Form</button>
            </form>
            </div>
         </div>
    </div>
    </div>
</div>
</div>
    <!-- About SMS -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2 class="font-weight-bold">About <br> School Management System</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi qui voluptatem nesciunt? Voluptatum ipsum repellat laudantium! Velit animi optio magni iusto, doloremque excepturi itaque ex sequi maiores ullam quae cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda earum, dolores fugiat unde blanditiis non sed quod facere ipsa voluptatum nam, officiis labore. Vero, autem optio excepturi nihil culpa amet?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim suscipit dignissimos consequuntur recusandae placeat, assumenda libero. Architecto consectetur fuga vero, illum quam soluta a, vel in blanditiis nobis unde iste.</p>
                <a href="https://www.kyau.edu.bd/" class="btn btn-secondary">Know More</a>
            </div>
            <div class="col-lg-6 py-5">
                <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="About" class="img-fluid">
            </div>
        </div>
    </div>

</section>


<!-- Our courses -->
<section class="py-5 text-center">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Our Courses</h2>
        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus vitae sint nesciunt incidunt voluptatum? Consequatur maxime quos veniam nulla facilis labore eaque cupiditate sint excepturi animi, delectus amet nesciunt possimus!</p>
    </div>

    <div class="container ">
        <div class="row">
            <!-- Enroll 1 -->
            <div class="col-log-3 ">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>
<!-- Enroll 2 -->
<div class="col-log-3">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>
<!-- Enroll 3 -->
<div class="col-log-3">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>
<!-- Enroll 4 -->

<div class="col-log-3 ">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>


            <div class="col-log-3">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>



        <div class="col-log-3">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>


            <div class="col-log-3">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>

            <div class="col-log-3">
                <div class="card">
                    <div >
                        <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded-top" style="height:150px ">
                    </div>
                    <div class="card-body">
                        <b>Web Design & Development</b>
                        <p class="card-text">
                            <b>Duration:</b> 45 hours <br>
                            <b>Price: </b> 4000/- Rs
                        </p>
                      <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>


            

        </div>
    </div>

</section>
<!-- Another section -->
 <section class="py-5 bg-light">
    <div class="py-5 bg-light">
     <div class="text-center mb-5">
        <h2 class="font-weight-bold">Our Teachers</h2>
        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus vitae sint nesciunt incidunt voluptatum? Consequatur maxime quos veniam nulla facilis labore eaque cupiditate sint</p>
    </div>
 </div>
<div class="container">
    <div class="row">
       <?php for ($i = 0; $i < 8; $i++){ ?>

      
        <div class="col-lg-3 my-5">
            <div class="card">
                 <div class="col-7 position-absulate" style="top:-50px">
                    <img src="Images/placeholder-images-image_large.png" alt="" class="mw-100 border rounded-circle">
                        </div>
                <div class="card-body pt-5 mt-4">
                  <h5 class="card-title">Teacher's Name</h5>  
                  <p class="card-text">
                    <b>Courses:</b> 5 <br>
                    <b>Ratting:</b> <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                  </p>
                    </div>
                </div>
            </div>
<?php } ?>
        </div>
      
    </div>
</div>

 </section>
<!-- Acheivement -->
  <section class="py-5 text-white " style="background:#3923a7">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold">Acheivements</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam sequi inventore perferendis fugiat voluptas, expedita fuga! Unde ipsam doloribus sunt, saepe, sapiente iusto, optio tempora excepturi minus voluptas facilis porro.</p>
                    <img src="Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg" alt="" class="img-fluid rounded" >
                </div>
                <div class="log-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span> <i class="text-warning fas fa-graduation-cap fa-2x"></i> </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span> <i class="text-warning fas fa-graduation-cap fa-2x"></i> </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span> <i class="text-warning fas fa-graduation-cap fa-2x"></i> </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span> <i class="text-warning fas fa-graduation-cap fa-2x"></i> </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
         
          
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

  </section>





<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>



</body>
</html>