<?php session_start();


?>

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




        <title>Café Shaun | Members</title>
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
                            <a class="nav-link active" href="login.php"
                                >Members</a
                            >
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>

                   
                   
                    <form class="d-flex cart-padding">
                        <button
                            class="btn btn-outline-secondary text-light"
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

                   <!--     <button
                            class="btn btn-outline-secondary text-light"
                            type="submit"
                        >
                            Search
                        </button> -->
                    </form>
                </div>
            </div>
        </nav>
        <!-----------------------------------------  Navbar end ----------------------------------------------->

        <!-- ================================= Member login start ====================================== -->
        <div class="container-fluid">
            <div class="member-form">
                <main class="form-signin">
                    <form class="text-center" method = "POST" action = "LoginHandle.php">
                        <img class="mb-4" src="images/logo-cp.png" alt="" width="35%" height="50%">
                        <h1 class="h3 mb-3 fw-normal">Member Login</h1>

                        <div class="form-floating">
                            <input 
                                type = "text" 
                                name = "un"
                                class="form-control"
                                id="floatingInput"
                                placeholder="User name"
                            />
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input  
                                type="password"
                                name = "ps"
                                class="form-control"
                                id="floatingPassword"
                                placeholder="Password"
                            />
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me" />
                                Remember me
                            </label>
                        </div>
                        
                        <button
                            class="w-100 btn btn-lg btn-dark btn-outline-secondary text-light member-button"
                            type="submit"
                            value = "LOGIN"
                        >
                            Log in
                        </button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
                    </form>
                </main>                
            </div>
        </div>
        <!-- ======================================= Member login end ========================================== -->

        
        <!------------------------------------- footer  start ---------------------------------------------->
        
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

        <!------------------------------------- footer  end -------------------------------------------->
    



        <!--------------------------------- JavaScript: Bootstrap Bundle with Popper start-------------------->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>

        <!--------------------------------- JavaScript: Bootstrap Bundle with Popper end --------------------->

    </body>
</html>
