<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Cafe Shaun Admin Panel</title>

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

   </head>

   <body>        
 
  <!-- ===============================================================  Navbar start ============================================== =-->

  <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
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
                                class="nav-link active"
                                aria-current="page"
                                href="admin.php"
                                >Home</a
                            >
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="inquiry.php">Inquiries</a>
                        </li>
                    
                    </ul>
                   
                  
                 <hr class="cart-padding" />

                  <!-- ================== Search Bar and login button start ======================== -->
                    <form class="d-flex search-padding">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                        <input type="button" onclick="window.location.href='logout.php';" class="btn btn-outline-secondary text-light" value="Log out" />
						
						
						
						
                    </form>
                    <!-- ================== Search Bar and login button end ======================== -->
                </div>
            </div>
        </nav>

        <!-- ========================================== Navbar end ================================================ -->

 
 
 
   <div class="container panelloggedas">

    
  <?php
    /*      admin panel session start          */

      
 if(!isset($_SESSION["una"]))
  {			
    header('Location: login.php');
    exit();
  }


 echo "<br><h2 align='center' style='color: grey; font-family: ariel, sans-serif; font-weight: bold;'>ADMIN PANEL</h2><br><br>";
 echo "<h3  style='color: grey; font-family: ariel, sans-serif; font-weight: bold;'>Inquiries</h3><hr>";


//echo "Logged in as: - ".$_SESSION ["una"];
echo "<span style='color: grey; font-family: Arial, sans-serif; font-weight: bold;'>Logged in as: - " . $_SESSION["una"] . "</span>";


echo "<hr>";	   


$log_id = $_SESSION["log_id"];

$con = mysqli_connect("localhost", "id21012671_admin", "Cafesh@ad12", "id21012671_cafedb") or die('Server Error ' . mysqli_error($con));

$query = mysqli_query($con, "SELECT * FROM supplier WHERE log_id='$log_id'");

$nor = mysqli_num_rows($query);

if ($nor == 0) {
    echo ("Invalid Entry");
} else {
  $rec = mysqli_fetch_assoc($query);
    
  // Start the flex container
  echo "<div class='info-container'>";
  
  // Display the image
  echo ("<a href='supplierImg/".$rec['sup_img']."' target='blank'><img class='info-image' src='supplierImg/".$rec['sup_img']."' width='210'></a>");
  
  // Start the text div
  echo "<div class='info-text'>";

  // Display supplier info
  echo "<span style='font-size:14px; color:grey;'>Log ID:</span> <span style='font-size:14px; color:grey;'>" . htmlspecialchars($rec['log_id']) . "</span><br>";
  echo "<span style='font-size:14px; color:grey;'>Name:</span> <span style='font-size:14px; color:grey;'>" . htmlspecialchars($rec['sup_name']) . "</span><br>";
  echo "<span style='font-size:14px; color:grey;'>Telephone:</span> <span style='font-size:14px; color:grey;'>" . htmlspecialchars($rec['tel']) . "</span><br>";
  echo "<span style='font-size:14px; color:grey;'>Email:</span> <span style='font-size:14px; color:grey;'>" . htmlspecialchars($rec['email']) . "</span><br>";
  echo "<span style='font-size:14px; color:grey;'>Address:</span> <span style='font-size:14px; color:grey;'>" . htmlspecialchars($rec['addr']) . "</span><br>";
  echo "<span style='font-size:14px; color:grey;'>Supplier ID:</span> <span style='font-size:14px; color:grey;'>" . htmlspecialchars($rec['sup_id']) . "</span><br>";
 
  
  // End the text div
  echo "</div>";

  // End the flex container
  echo "</div>";

  mysqli_close($con);
}


/*---      admin panel session  end ------    */


  ?>
</div>

<div class="container panelform">
   <br><hr> <br>
   

<?php




    /*---------------- View inquiries start ---------------------*/


    $con = mysqli_connect("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die('Server Error '.mysql_error());
    $query = mysqli_query($con, "SELECT * FROM inquiry");
    $nor = mysqli_num_rows($query);
    
    if ($nor == 0) {
        echo ("Database is empty");
    } else {
        echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>';
    
        while ($rec = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<th scope='row'>" . htmlspecialchars($rec['id']) . "</th>";
            echo "<td>" . htmlspecialchars($rec['name']) . "</td>";
            echo "<td>" . htmlspecialchars($rec['email']) . "</td>";
            echo "<td>" . htmlspecialchars($rec['tel']) . "</td>";
            echo "<td>" . htmlspecialchars($rec['addr']) . "</td>";
            echo "<td>" . htmlspecialchars($rec['msg']) . "</td>";
            echo "</tr>";
        }
    
        echo '</tbody></table>';
    
        mysqli_close($con);
    }
    


  /*---------------- View all data end ---------------------*/

            
      ?>
 </div>

        <!-- ==================================== footer  start ========================================== -->

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
                        
                        <!-- ================== Social Media Icons start ============================ -->

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
                                /></a>
                            </li>
                         </ul>
                       </div>

                     <!-- ================== Social Media Icons end ============================ -->

                    </div>
                </footer>
            </div>          
        </div>
    <!-- =================================== footer  end ================================================= -->
        


   </body>
</html>