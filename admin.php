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
 echo "<h3  style='color: grey; font-family: ariel, sans-serif; font-weight: bold;'>Suppliers</h3><hr>";

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
   
   
   <!--   admin panel form start      -->

   <form action="admin.php" method="post" enctype="multipart/form-data">
  
  
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Supplier Search</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Enter Log ID" name="id">
        </div>
      </div>
  
  <br><hr><br>
  
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Name" name="na" >
    </div>
  </div>

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Telephone" name="tel">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Email" name="em">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Address" name="add">
    </div>
  </div>

  <div class="form-group row">
    <label for="file" class="form-label col-sm-2">Upload Image</label>
    <div class="col-sm-10">
        <input class="form-control" style="width: 25%;" type="file" id="file" name="file" />
    </div>
</div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Supplier Login ID*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Supplier Login ID" name="suplid">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">User Name*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="user name" name="una">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Password*</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="password" name="ps">
    </div>
  </div>

  <tr>
      <td>Fields marked with an asterisk(*) are required</td>            
  </tr>       
  <br><br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-secondary" value="SUBMIT" name="Submit">Submit</button>
      <button type="submit" class="btn btn-secondary" value="SEARCH" name="Search">Search</button>
      <button type="submit" class="btn btn-secondary" value="UPDATE" name="Update">Update</button>
      <button type="submit" class="btn btn-secondary" value="VIEWALL" name="Viewall">View All</button>
      <button type="submit" class="btn btn-secondary" value="DELETE" name="Delete">Delete</button>
      <button type="reset" class="btn btn-secondary" value="CANCEL">Cancel</button>
    </div>
  </div>
  
</form>

<br>
<!--   admin panel form end      -->
  

<?php

        /*---------------- Submit data start---------------------------- */
         if(isset($_POST["Submit"]))
            {
              
              /*File upload start*/
              
                      $target="supplierImg/";
                      $target = $target . basename( $_FILES['file']['name']) ;  // file name comes for upload form                        
                      $fname=$_FILES['file']['name'];
                      move_uploaded_file($_FILES['file']['tmp_name'], $target);
        
              /* File upload end */
              
             
               $nam=$_POST["na"];
               $tele=$_POST["tel"];
               $eml=$_POST["em"];
               $addr=$_POST["add"];
               $splgid=$_POST["suplid"];
               $unam=$_POST["una"];
               $pass=$_POST["ps"];

               if($nam=="")
               {
                  echo "Please fill out all required fields";
                  return;
               }

               if($eml=="")
               {
                  echo "Please fill out all required fields";
                  return;
               }

               if($tele=="")
               {
                  echo "Please fill out all required fields";
                  return;
               }
               if($splgid=="")
               {
                  echo "Please fill out all required fields";
                  return;
               }

               if($unam=="")
               {
                  echo "Please fill out all required fields";
                  return;
               }
               if($pass=="")
               {
                  echo "Please fill out all required fields";
                  return;
               }
               /* ----------------database connection---------------------- */
               $con =mysqli_connect ("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die ('Server error'.mysql_error());

              

              // Insert into user table
              $query1=mysqli_query($con, "INSERT INTO user (una, pass, log_id) VALUES ('$unam', '$pass', '$splgid')"); 
              
              
             // Insert into supplier table
              $query2=mysqli_query($con, "INSERT INTO supplier (sup_name, tel, email, addr, log_id, sup_img) VALUES ('$nam','$tele','$eml','$addr','$splgid','$fname')");

           
              
              if($query1>0 && $query2>0)
                    {
                     
                      echo '<table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Telephone</th>
                              <th scope="col">Email</th>
                              <th scope="col">Address</th>
                              <th scope="col">Supplier Image</th>
                              <th scope="col">Login ID</th>
                              <th scope="col">Username</th>
                              <!-- Uncomment below line if you wish to show password -->
                              <!-- <th scope="col">Password</th> -->
                          </tr>
                      </thead>
                      <tbody>';	


                      echo "<tr>";
                      echo "<td>".htmlspecialchars($nam)."</td>";
                      echo "<td>".htmlspecialchars($tele)."</td>";
                      echo "<td>".htmlspecialchars($eml)."</td>";
                      echo "<td>".htmlspecialchars($addr)."</td>";
                      echo "<td><a href='supplierImg/" . htmlspecialchars($fname) . "' target='_blank'><img src='supplierImg/" . htmlspecialchars($fname) . "' width='100'></a></td>";
                      echo "<td>".htmlspecialchars($splgid)."</td>";
                      echo "<td>".htmlspecialchars($unam)."</td>";
                      // echo "<td>".htmlspecialchars($pass)."</td>";
                      echo "</tr>";  
                        
                      echo '</tbody></table>';
                        
                    }
              else
              {
                          echo("ERROR");
              }
              
            }
      /*---------------- Submit data end ---------------------*/


      /*---------------- Search data start ---------------------*/

          if(isset($_POST["Search"]))
            {
                $id=$_POST["id"];
                if($id=="")
                      {		
                          echo "Invalid Entry";
                          return;
                      }		
                 
                  $con = mysqli_connect("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die('Server Error '.mysql_error());
                  $query = mysqli_query($con,"SELECT supplier.*, user.una, user.pass FROM supplier INNER JOIN user ON supplier.log_id = user.log_id WHERE supplier.log_id='$id'");
                  $nor=mysqli_num_rows($query);

                if($nor=="")
                       {
                          echo ("Invalid Entry");
                       }
                      
                else if ($nor<=0)
                      {
                        
                        echo "No results to display";
                        
                      }
                                          
                else
                      {


                        echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Supplier ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Login ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Supplier Image</th>
                            </tr>
                        </thead>
                        <tbody>';	

                        $rec=mysqli_fetch_assoc($query);
                        echo "<tr>";
                        echo "<th scope='row'>".htmlspecialchars($rec['sup_id'])."</th>";
                        echo "<td>".htmlspecialchars($rec['sup_name'])."</td>";
                        echo "<td>".htmlspecialchars($rec['tel'])."</td>";
                        echo "<td>".htmlspecialchars($rec['email'])."</td>";
                        echo "<td>".htmlspecialchars($rec['addr'])."</td>";
                        echo "<td>".htmlspecialchars($rec['log_id'])."</td>";
                        echo "<td>".htmlspecialchars($rec['una'])."</td>";
                        echo "<td><a href='supplierImg/" . htmlspecialchars($rec['sup_img']) . "' target='_blank'><img src='supplierImg/" . htmlspecialchars($rec['sup_img']) . "' width='100'></a></td>";
                        echo "</tr>";			

                        echo '</tbody></table>';

                        // Populate the form fields with the fetched data

                        echo "
                        <script>
                            document.querySelector('[name=\"id\"]').value = '".$rec['log_id']."'; 
                            document.querySelector('[name=\"na\"]').value = '".$rec['sup_name']."';
                            document.querySelector('[name=\"tel\"]').value = '".$rec['tel']."';
                            document.querySelector('[name=\"em\"]').value = '".$rec['email']."';
                            document.querySelector('[name=\"add\"]').value = '".$rec['addr']."';
                            document.querySelector('[name=\"suplid\"]').value = '".$rec['log_id']."'; 
                            document.querySelector('[name=\"una\"]').value = '".$rec['una']."';
                            document.querySelector('[name=\"ps\"]').value = '".$rec['pass']."';
                        </script>
                        ";

                        mysqli_close($con);

                      }
                 
            }

       /*---------------- Search data end ---------------------*/

      /*---------------- Update data start ---------------------*/           

            if(isset ($_POST["Update"]))
            {
               

              // Image upload handling
              $target = "supplierImg/";
              $fname = "";
              if ($_FILES['file']['name'] != '') {
                  $target = $target . basename($_FILES['file']['name']);
                  $fname = $_FILES['file']['name'];
                  move_uploaded_file($_FILES['file']['tmp_name'], $target);
              }



                $id=$_POST["id"];

			        	$na=$_POST["na"];
                $tp=$_POST["tel"];               
                $em=$_POST["em"];
                $ad=$_POST["add"];
                $splgid=$_POST["suplid"];
                $un=$_POST["una"];
                $pw=$_POST["ps"];

                if($na == "")
                {
                    echo "Invalid Name";
                    return;
                }

                if($tp == "")
                {
                    echo "Invalid Telephone";
                    return;
                }
                
                if($em == "")
                {
                    echo "Invalid Email";
                    return;
                }


                 if($splgid=="")
               {
                  echo "cannot leave required fields empty";
                  return;
               }
              
                if($un == "")
                {
                    echo "Invalid Username";
                    return;
                }

                if($pw == "")
                {
                    echo "Invalid Password";
                    return;
                }

				$con = mysqli_connect("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die('Server Error '.mysql_error());
				         
           // Updating supplier data
           if ($fname != "") { // If a new image is uploaded
              $query1 = mysqli_query($con, "UPDATE user SET una='$un', pass='$pw' WHERE log_id='$splgid'");
              $query2 = mysqli_query($con, "UPDATE supplier SET sup_name='$na', tel='$tp', email='$em', addr='$ad', sup_img='$fname' WHERE log_id='$splgid'");
            } 
            else 
            {
                $query1 = mysqli_query($con, "UPDATE user SET una='$un', pass='$pw' WHERE log_id='$splgid'");
                $query2 = mysqli_query($con, "UPDATE supplier SET sup_name='$na', tel='$tp', email='$em', addr='$ad' WHERE log_id='$splgid'");
            }
          
          if($query1>0 && $query2>0)
								{

                  echo '<table class="table">
                  <thead>
                      <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Telephone</th>
                          <th scope="col">Email</th>
                          <th scope="col">Address</th>
                          <th scope="col">Supplier Image</th>
                          <th scope="col">Supplier Log ID</th>
                          <th scope="col">Username</th>
                      </tr>
                  </thead>
                  <tbody>';	


									echo "<tr>";
                  echo "<td>".htmlspecialchars($na)."</td>";
                  echo "<td>".htmlspecialchars($tp)."</td>";
                  echo "<td>".htmlspecialchars($em)."</td>";
                  echo "<td>".htmlspecialchars($ad)."</td>";
									
                  // If no new image is uploaded, fetch the current supplier image from the database
                  if ($fname == "") {
                    $res = mysqli_query($con, "SELECT sup_img FROM supplier WHERE log_id='$splgid'");
                    $imgData = mysqli_fetch_assoc($res);
                    $fname = $imgData['sup_img'];
                  }
                  echo "<td><a href='supplierImg/" . htmlspecialchars($fname) . "' target='_blank'><img src='supplierImg/" . htmlspecialchars($fname) . "' width='100'></a></td>";
                  echo "<td>".htmlspecialchars($splgid)."</td>";
                  echo "<td>".htmlspecialchars($un)."</td>";
                  echo "</tr>";			

                  echo '</tbody></table>';
								}
					
					else
								{
								echo("Error");
								}


            }
    /*---------------- Update data end ---------------------*/   



    /*---------------- View all data start ---------------------*/

            if(isset($_POST["Viewall"]))
            {
              $con = mysqli_connect("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die('Server Error '.mysql_error());
             // $query=mysqli_query($con,"SELECT * FROM supplier");
              $query = mysqli_query($con,"SELECT supplier.*, user.una FROM supplier LEFT JOIN user ON supplier.log_id = user.log_id");

              $nor=mysqli_num_rows($query);
    
                      if($nor=="")
                        {
                          echo ("Database is empty");
                        }
                      else
                        {
                          echo '<table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Supplier ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Telephone</th>
                              <th scope="col">Email</th>
                              <th scope="col">Address</th>
                              <th scope="col">Image</th>
                              <th scope="col">Log ID</th>
                              <th scope="col">Username</th>
                            </tr>
                          </thead>
                          <tbody>';
                                                  
    
                          while($rec = mysqli_fetch_assoc($query)) {
                            echo "<tr>";
                            echo "<th scope='row'>".($rec['sup_id'])."</th>";
                            echo "<td>".($rec['sup_name'])."</td>";
                            echo "<td>".($rec['tel'])."</td>";
                            echo "<td>".($rec['email'])."</td>";
                            echo "<td>".($rec['addr'])."</td>";
                            echo "<td><img src='supplierImg/" . $rec['sup_img'] . "' width='100'></td>";
                            echo "<td>".($rec['log_id'])."</td>";
                            echo "<td>".($rec['una'])."</td>";
                            echo "</tr>";           
                        }
                        
                        echo '</tbody></table>';
    
                          
                          mysqli_close($con);												
                        }	
              }

  /*---------------- View all data end ---------------------*/


/*---------------- delete data start ---------------------*/

              if(isset ($_POST["Delete"]))
              {
                  $id=$_POST["id"];
          
              $con = mysqli_connect("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die('Server Error '.mysql_error());
              
              $query1=mysqli_query($con,"DELETE FROM supplier WHERE log_id ='$id'");
              $query2=mysqli_query($con,"DELETE FROM user WHERE log_id ='$id'");  
              if ($query1 && $query2) 
              {
                  if (mysqli_affected_rows($con) > 0) // checks if any row was affected
                    {
                        echo "Successfully deleted";
                    }
                  else
                    {
                        echo "Supplier log id for deletion not selected";
                    }
              } 
              else 
              {
                  echo "Error";
              }
  
              }

/*---------------- delete data end ---------------------*/

            
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