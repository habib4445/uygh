 <?php include('header.php') ?>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-info">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">SMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
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
            <?php for ($i=0; $i < 2; $i++){ ?>
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

<!-- Enroll 5-->
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

<!-- Enroll 6 -->

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
<!-- Enroll 7 -->

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
<!-- Enroll 8 -->
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


            <?php } ?>

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

<!-- Testimonials -->
 <section class="py-5">
    
        <h2 class="font-weight-bold text-center">What Peaple Says</h2>
        <p class="text-muted text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus vitae sint nesciunt incidunt voluptatum? Consequatur maxime quos veniam nulla facilis labore eaque cupiditate sint</p>
    </div>
    <div class="container">

        <div class="col-6" >
        <div class="border rounded position-relative">
            <div class="p-4 text-center">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, sed. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto aliquam in voluptatibus iste doloremque fugiat tempore eos tenetur atque quibusdam.
            </div>
            <i class=" fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
            
        </div>
        <div class="text-center mt-n2">
            <img src="Images/placeholder-images-image_large.png" alt="" class="rounded-circle border" width="100" height="100">
             <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
             <p> <i>Designation</i> </p>
        </div>
     
    </div>

    <div class="row">
          <div class="col-6" >
        <div class="border rounded position-relative">
            <div class="p-4 text-center">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, sed. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto aliquam in voluptatibus iste doloremque fugiat tempore eos tenetur atque quibusdam.
            </div>
            <i class=" fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
             
        </div>
        <div class="text-center mt-n2">
            <img src="Images/placeholder-images-image_large.png" alt="" class="rounded-circle border" width="100" height="100">
             <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
             <p> <i>Designation</i> </p>
        </div>
    
        
    </div>
    </div>

    </div>
    
 </section>

 <!-- Footer -->

<footer style="background:url(.Images/element5-digital-OyCl7Y4y0Bk-unsplash (1).jpg) center/cover no-repeat">
    
    <div class="py-5 text-white" style="background:#000000bb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Useful Links</h5>

                    <ul>
                        <li> <a href="" class="text-light"> <i class="fa-li fa fa-angle-right"></i>List icons </a></li>
                        <li> <a href="" class="text-light"> <i class="fa-li fa fa-angle-right"></i>can be used </a></li>
                       <li> <a href="" class="text-light"> <i class="fa-li fa fa-angle-right"></i>as bullets </a></li>
                       <li> <a href="" class="text-light"> <i class="fa-li fa fa-angle-right"></i>in lists </a></li>
                    </ul>
                </div>
                
            </div>
        </div>

    </div>

</footer>

<section class="py-2 bg-dark text-light">
    <div class="conatiner-fluid">
        Copyright 2025 All Rights Reseved. <a href="#" class="text-light">School Management System</a>
    </div>
</section>

<?php include('footer.php') ?>

