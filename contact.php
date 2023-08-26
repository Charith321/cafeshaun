<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="img/favicon.ico" />
        <!-- Bootstrap CSS -->

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/customstyle.css" />

        <!-- font awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <title>Café Shaun | Contact</title>
    </head>

    <body>

        <!-----------------------------------------  Navbar start ----------------------------------------------->

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="index.html"
                                ><img
                                    src="images/logo.png"
                                    alt=""
                                    width="130"
                                    height="40"
                            /></a>
                        </a>
                    </div>
                </nav>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                aria-current="page"
                                href="index.html"
                                >Home</a
                            >
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="store.html">Store</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Members</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    
                     
                    <form class="d-flex cart-padding">
                        <button
                            class="btn btn-dark btn-outline-secondary text-light"
                            type="submit"
                        >
                            <i
                                class="fa fa-shopping-cart"
                                aria-hidden="true"
                            ></i>
                            <i class="fab-cart-fill me-1"></i>
                            Cart
                            <span
                                class="badge bg-l text-white ms-1 rounded-pill"
                                >0</span
                            >
                        </button>
                    </form>
                    
                    
                    
                    <hr class="cart-padding" />
                    
                   
                    
                    <form class="d-flex search-padding">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                        <input type="button" onclick="window.location.href='login.php';" class="btn btn-outline-secondary text-light" value="Login" />

                  <!--      <button
                            class="btn btn-dark btn-outline-secondary text-light"
                            type="submit"
                        >
                            Search
                        </button>  -->
                    </form>
                </div>
            </div>
        </nav>

        <!-----------------------------------------  Navbar end ----------------------------------------------->


        <!------------------------------------ contact us page content start ---------------------------------->

        <div class="container">
            <div class="contactus">
                <h1 class="contactus-heading fw-bold">Get in Touch with Us</h1>
               
                <p>
                    We love hearing from our customers. Below you will find options for 
                    contacting us. Contact us to know about what we have to offer you,
                     review our coffee menu, or provide your valuable suggestions.
                </p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="Contactmain1">
                        
                        <div class="col-md-6">
                            <h3>
                                Contact Info
                                
                            </h3>
                            <p  class="fw-bold">
                                Address: <span class="fw-normal">Café Shaun, No. 24, Peradeniya Road, Kandy</span> <br />                              
                            </p>
                            <p  class="fw-bold">
                                Phone: <span class="fw-normal">81 994 9525</span><br />
                            </p>
                            <p  class="fw-bold">
                                Email: <span class="fw-normal">info.cafe@cafeshaun.com</span>                                
                            </p>
                        </div>
                    </div>

                    <!-- =====================Google Map start =================================== -->

                    <div class="Contactmain2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8631.66277303743
                        !2d80.6210248316972!3d7.282324020044768!2m3!1f0!2f0!3f0!3m2!
                        1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!
                        1sen!2slk!4v1637228333848!5m2!1sen!2slk"
                         width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    
                    <!-- =====================Google Map end =================================== -->

                </div>

                <div class="col-md-6">
                    <div class="contactus-form contact-box-outline">
                        <form class="row g-3" method="POST" action="">
                            <div class="col-md-12">
                                <label for="inputname" class="form-label"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputname"
                                    placeholder="Enter your name"
                                    name="na"
                                />
                            </div>
                            <div class="col-md-12">
                                <label for="inputemail" class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="inputemail"
                                    placeholder="Enter your email address"
                                    name="em"
                                />
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"
                                    >Phone Number</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputphonenumber"
                                    placeholder="Enter your contact number (optional)"
                                    name="tel"
                                />
                            </div>
                            <div class="col-12">
                                <label class="form-label"
                                    >Address</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Enter your address (optional)"
                                    name="add"
                                />
                            </div>                          

                            
                             <div class="form-group">
                                <label for="exampleFormControlTextarea1">Your Message</label>
                                <textarea 
                                maxlength="400"
                                class="form-control" 
                                id="exampleFormControlTextarea1" 
                                rows="3"  
                                placeholder="Write your message"
                                name="msg"></textarea>
                              </div>
                             
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark btn-outline-secondary text-light" value="SUBMIT" name="Submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>


        <?php

        /*---------------- Submit data start---------------------------- */
         if(isset($_POST["Submit"]))
            {
                          
             
               $nam=$_POST["na"];
               $eml=$_POST["em"];
               $tele=$_POST["tel"];
               $addr=$_POST["add"];
               $mssg=$_POST["msg"];

               if($nam=="")
               {
                  echo "cannot leave mandatory fields empty";
                  return;
               }

               if($eml=="")
               {
                  echo "cannot leave mandatory fields empty";
                  return;
               }

               if($tele=="")
               {
                  echo "cannot leave mandatory fields empty";
                  return;
               }
              
               /* ----------------database connection---------------------- */
               $con =mysqli_connect ("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die ('Server error'.mysql_error());

              

              // Insert into inquiry table
              $query=mysqli_query($con, "INSERT INTO inquiry (name, email, tel, addr, msg) VALUES ('$nam', '$eml', '$tele', '$addr', '$mssg')"); 
              

           
              
              if($query>0)
                    {
                     echo "Message submitted successfully";
                      
                        
                    }
              else
              {
                          echo("ERROR");
              }
              
            }
      /*---------------- Submit data end ---------------------*/
        ?>



        <!------------------------------------ contact us page content end ---------------------------------->


        <!----------------------------------- footer  start -------------------------------------------->

        <div class="container-fluid">
            <div class="container-fluid bg-dark">
                <footer class="py-5">
                    <div class="row footer-row-padding text-white">
                        <div class="col-2">
                            <h5 class="text-decoration-underline">Café</h5>
                            <ul class="nav flex-column fdd">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted"
                                        >Home</a
                                    >
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted"
                                        >About</a
                                    >
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted"
                                        >Contact</a
                                    >
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted"
                                        >Gallery</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <div class="col-2">
                            <h5 class="text-decoration-underline">Coffee</h5>
                            <ul class="nav flex-column fdd">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted"
                                        >Menu</a
                                    >
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted"
                                        >Store</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <div class="col-2">
                            <h5 class="text-decoration-underline">Members</h5>
                            <ul class="nav flex-column fdd">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted"
                                        >Member Login</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <div class="col-4 offset-1 footer-subs-marg">
                            <form>
                                <h5>Subscribe to our newsletter</h5>
                                <p>
                                    Monthly digest of whats new and exciting
                                    from us.
                                </p>
                                <div class="d-flex w-100 gap-2">
                                    <label
                                        for="newsletter1"
                                        class="visually-hidden"
                                        >Email address</label
                                    >
                                    <input
                                        id="newsletter1"
                                        type="text"
                                        class="form-control"
                                        placeholder="Email address"
                                    />
                                    <button
                                        class="btn btn-dark btn-outline-secondary text-light"
                                        type="button"
                                    >
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div
                        class="
                            d-flex
                            justify-content-between
                            py-4
                            my-2
                            border-top
                            footer-social-icon
                        "
                    >
                        <p class="text-light footer-text-padding">&copy; 2021 Café Shaun, Inc. All rights reserved. Designed by Charith Kaduruwewa.</p>
                        
                        <div class="footer-social-pad">
                        <ul class="list-unstyled d-flex">
                            
                            <li class="ms-3">
                                <a
                                    class="link-dark btn btn-dark"
                                    target="_blank"
                                    href="https://www.facebook.com/"
                                    role="button"
                                    ><img
                                        src="images/icons/socfb.png"
                                        alt=""
                                        width="40px"
                                /></a>
                            </li>
                            <li class="ms-3">
                                <a
                                    class="link-dark btn btn-dark"
                                    target="_blank"
                                    href="https://twitter.com/?lang=en"
                                    role="button"
                                    ><img
                                        src="images/icons/soctwit.png"
                                        alt=""
                                        width="40px"
                                /></a>
                            </li>
                            <li class="ms-3">
                                <a
                                    class="link-dark btn btn-dark"
                                    target="_blank"
                                    href="https://www.linkedin.com/"
                                    role="button"
                                    ><img
                                        src="images/icons/soclin.png"
                                        alt=""
                                        width="40px"
                                /></a>
                            </li>
                            <li class="ms-3">
                                <a
                                    class="link-dark btn btn-dark"
                                    target="_blank"
                                    href="https://www.instagram.com/"
                                    role="button"
                                    ><img
                                        src="images/icons/socig.png"
                                        alt=""
                                        width="40px"
                                /></a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </footer>
            </div>
        </div>

        <!---------------------------------------- footer  end -------------------------------------------->

        <!------------------------------- JavaScript: Bootstrap Bundle with Popper start-------------------->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>

        <!------------------------------- JavaScript: Bootstrap Bundle with Popper end --------------------->

    </body>
</html>
