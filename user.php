<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Cafe Shaun supplier Panel</title>

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
                                href="user.php"
                                >Home</a
                            >
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
	
   /* ------     user/supplier panel session start   ---------- */

   
   if(!isset($_SESSION["una"]))
		{			
			header('Location: login.php');
         exit();
		}

   
   echo "<br><h2 align='center' style='color: grey; font-family: ariel, sans-serif; font-weight: bold;'>SUPPLIER PANEL</h2><hr>";
   
   

   echo "<span style='color: grey; font-family: Arial, sans-serif; font-weight: bold;'>Logged in as: - ".$_SESSION ["una"]. "</span>";

   
   echo "<hr>";  

 
   $log_id=$_SESSION["log_id"];
  
    
$con = mysqli_connect("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die('Server Error '.mysql_error());

$query=mysqli_query($con,"SELECT * FROM supplier WHERE log_id='$log_id'");

$nor=mysqli_num_rows($query);

if($nor=="")
  {
    echo ("Invalid Entry");
  }
else
  {
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

 
/* ------     user/supplier panel session end   ---------- */

?>

 </div>

  <div class="container panelform">

   <br><hr> <br>
   <!--   bootstrap form               -->




   <form action="user.php" method="post" enctype="multipart/form-data">
  
  
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Search:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Enter product id" name="pdid">
        </div>
      </div>
  
  
  <br><hr><br>
  
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Product Name" name="pdna" >
    </div>
  </div>

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Type*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Product Type" name="pdtyp">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Quantity" name="qty">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Price*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Price" name="prc">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Delivery Date*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" style="width: 25%;" id="inputEmail3" placeholder="Delivery Date" name="deldt">
    </div>
  </div>

  <div class="form-group row">
    <label for="file" class="form-label col-sm-2">Upload Image</label>
    <div class="col-sm-10">
        <input class="form-control" style="width: 25%;" type="file" id="file" name="file" />
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


<?php

/*---------------- Submit data start---------------------------- */

if (isset($_POST["Submit"])) 
{
    $con = mysqli_connect("localhost", "id21012671_admin", "Cafesh@ad12", "id21012671_cafedb") or die('Server Error ' . mysqli_error($con));
    
    // Fetch the log_id of the logged-in user from the session
    $log_id = $_SESSION["log_id"];
    
    // Fetching sup_id using the log_id
    $supplier_query = mysqli_query($con, "SELECT sup_id FROM supplier WHERE log_id='$log_id'");
    
    if ($supplier_record = mysqli_fetch_assoc($supplier_query)) 
    {
        $sup_id = $supplier_record["sup_id"];
        
        // File Upload Code
        $target = "productImg/";
        $target .= basename($_FILES['file']['name']);

        $fname = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $target);


        // Product Data Collection
        $prdnam = $_POST["pdna"];
        $prdtyp = $_POST["pdtyp"];
        $prdqty = $_POST["qty"];
        $prdprc = $_POST["prc"];
        $deldate = $_POST["deldt"];
        
        
          // Check for required fields
  
        if($prdnam == "" || $prdtyp == "" || $prdqty == "" || $prdprc == "" || $deldate == "") 
            {
                echo "Please fill out all required fields";
                return;
            }
        

        // Insert Product for the Supplier (logged-in user)
        $query = mysqli_query($con, "INSERT INTO product (prod_name, prod_type, prod_qty, price, delv_date, prod_img, sup_id) VALUES ('$prdnam', '$prdtyp', '$prdqty', '$prdprc', '$deldate', '$fname', '$sup_id')");
        
        if ($query) 
        {

            echo "<hr><br>";
            echo "Product Added Successfully";

            // Start of the table structure
            echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delivery Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Supplier ID</th>
                </tr>
            </thead>
            <tbody>';   
            
            // Display the product data in the table rows
            echo "<tr>";
            echo "<td>".htmlspecialchars($prdnam)."</td>";
            echo "<td>".htmlspecialchars($prdtyp)."</td>";
            echo "<td>".htmlspecialchars($prdqty)."</td>";
            echo "<td>".htmlspecialchars($prdprc)."</td>";
            echo "<td>".htmlspecialchars($deldate)."</td>";
            echo "<td><a href='productImg/" . htmlspecialchars($fname) . "' target='_blank'><img src='productImg/" . htmlspecialchars($fname) . "' width='100'></a></td>";
            echo "<td>".htmlspecialchars($sup_id)."</td>";  
            echo "</tr>";

            // End of the table
            echo '</tbody></table>';



        } 
        else 
        {
            echo "Error in adding product.";
        }
    } 
    else 
    {
        echo "No supplier associated with the logged-in user.";
    }

    mysqli_close($con);
}

/*---------------- Submit data end ---------------------*/


 /*---------------- View product data for logged user start ---------------------*/

if (isset($_POST["Viewall"])) 
{
    $con = mysqli_connect("localhost", "id21012671_admin", "Cafesh@ad12", "id21012671_cafedb") or die('Server Error ' . mysqli_error($con));

    // Fetching the log_id based on the logged-in username
    $una = $_SESSION["una"];
    $user_query = mysqli_query($con, "SELECT log_id FROM user WHERE una='$una'");
    
    if ($user_record = mysqli_fetch_assoc($user_query)) 
    {
        $log_id = $user_record["log_id"];
        
        // Fetching sup_id using the log_id
        $supplier_query = mysqli_query($con, "SELECT sup_id FROM supplier WHERE log_id='$log_id'");
        
        if ($supplier_record = mysqli_fetch_assoc($supplier_query)) 
        {
            $sup_id = $supplier_record["sup_id"];
            
            // Fetching products using the sup_id
            $product_query = mysqli_query($con, "SELECT * FROM product WHERE sup_id='$sup_id'");
            $nor = mysqli_num_rows($product_query);

            if ($nor == 0) 
            {
                echo ("No products found for the logged user");
            } 
            else 
            {
              echo '<table class="table">
              <thead>
                  <tr>
                      <th scope="col">Product ID</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Product Type</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                      <th scope="col">Delivery Date</th>
                      <th scope="col">Image</th>
                      <th scope="col">Supplier ID</th>
                  </tr>
              </thead>
              <tbody>';	
          
              while ($rec = mysqli_fetch_assoc($product_query)) 
              {
                  echo "<tr>";
                  echo "<th scope='row'>".htmlspecialchars($rec['prod_id'])."</th>";
                  echo "<td>".htmlspecialchars($rec['prod_name'])."</td>";
                  echo "<td>".htmlspecialchars($rec['prod_type'])."</td>";
                  echo "<td>".htmlspecialchars($rec['prod_qty'])."</td>";
                  echo "<td>".htmlspecialchars($rec['price'])."</td>";
                  echo "<td>".htmlspecialchars($rec['delv_date'])."</td>";
                  echo "<td><img src='productImg/" . htmlspecialchars($rec['prod_img']) . "' width='100'></td>";
                  echo "<td>".htmlspecialchars($rec['sup_id'])."</td>";
                  echo "</tr>";			
              }
          
              echo '</tbody></table>';
            }
        }
        else 
        {
            echo "No supplier associated with the logged-in user.";
        }
    }
    else 
    {
        echo "No user found with the given username.";
    }

    mysqli_close($con);
}

 /*---------------- View product data for logged user end ---------------------*/



 /*---------------- Search data start ---------------------*/

          if(isset($_POST["Search"]))
            {
                $id=$_POST["pdid"];
                if($id=="")
                      {		
                          echo "Invalid Entry";
                          return;
                      }		
                 
                  $con = mysqli_connect("localhost","id21012671_admin","Cafesh@ad12","id21012671_cafedb") or die('Server Error '.mysql_error());
                  $query=mysqli_query($con,"SELECT * FROM product WHERE prod_id='$id'" );
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
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Type</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Delivery Date</th>
                                <th scope="col">Image</th>
                                <th scope="col">Supplier ID</th>
                            </tr>
                        </thead>
                        <tbody>';	



                        $rec=mysqli_fetch_assoc($query);
                      echo "<tr>";
                      echo "<th scope='row'>".htmlspecialchars($rec['prod_id'])."</th>";
                      echo "<td>".htmlspecialchars($rec['prod_name'])."</td>";
                      echo "<td>".htmlspecialchars($rec['prod_type'])."</td>";
                      echo "<td>".htmlspecialchars($rec['prod_qty'])."</td>";
                      echo "<td>".htmlspecialchars($rec['price'])."</td>";
                      echo "<td>".htmlspecialchars($rec['delv_date'])."</td>";
                      echo "<td><img src='productImg/" . htmlspecialchars($rec['prod_img']) . "' width='100'></td>";
                      echo "<td>".htmlspecialchars($rec['sup_id'])."</td>";
                      echo "</tr>";			

                      echo '</tbody></table>';


                        // Populate the form fields with the fetched data
                        echo "
                        <script>
                            document.querySelector('[name=\"pdid\"]').value = '".$rec['prod_id']."';
                            document.querySelector('[name=\"pdna\"]').value = '".$rec['prod_name']."';
                            document.querySelector('[name=\"pdtyp\"]').value = '".$rec['prod_type']."';
                            document.querySelector('[name=\"qty\"]').value = '".$rec['prod_qty']."';
                            document.querySelector('[name=\"prc\"]').value = '".$rec['price']."';
                            document.querySelector('[name=\"deldt\"]').value = '".$rec['delv_date']."';
                        </script>
                    ";

                        mysqli_close($con);
                      }   
            
            }
/*---------------- Search data end ---------------------*/



/*---------------- Update product data start ---------------------*/ 


if(isset($_POST["Update"])) {
  
// File upload code
$target = "productImg/";
$fname = "";
if ($_FILES['file']['name'] != '') {
    $target = $target . basename($_FILES['file']['name']);
    $fname = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $target); // This  moves the uploaded file to the target directory
}




  // Collect other form data
  $prdid = $_POST["pdid"]; // This is the ID of the product you wish to update
  $prdnam = $_POST["pdna"];
  $prdtyp = $_POST["pdtyp"];
  $prdqty = $_POST["qty"];
  $prdprc = $_POST["prc"];
  $deldate = $_POST["deldt"];

  // Check for required fields
  
  if($prdid == "" || $prdnam == "" || $prdtyp == "" || $prdqty == "" || $prdprc == "" || $deldate == "") {
      echo "Please fill out all required fields";
      return;
  }

 
  // Database connection
  $con = mysqli_connect("localhost", "id21012671_admin", "Cafesh@ad12", "id21012671_cafedb") or die('Server Error ' . mysqli_error($con));

 // If a new image is uploaded, update the prod_img column as well, otherwise skip it.
 if ($fname != "") {
  $query = mysqli_query($con, "UPDATE product SET prod_name='$prdnam', prod_type='$prdtyp', prod_qty='$prdqty', price='$prdprc', delv_date='$deldate', prod_img='$fname' WHERE prod_id='$prdid'");
} else {
  $query = mysqli_query($con, "UPDATE product SET prod_name='$prdnam', prod_type='$prdtyp', prod_qty='$prdqty', price='$prdprc', delv_date='$deldate' WHERE prod_id='$prdid'");
}

  if($query) {
      echo "Product updated successfully!<br>";

      // Start of the table structure
        echo '<table class="table">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Type</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Delivery Date</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>';

      // Populate table with updated product data
        echo "<tr>";
        echo "<td>" . htmlspecialchars($prdnam) . "</td>";
        echo "<td>" . htmlspecialchars($prdtyp) . "</td>";
        echo "<td>" . htmlspecialchars($prdqty) . "</td>";
        echo "<td>" . htmlspecialchars($prdprc) . "</td>";
        echo "<td>" . htmlspecialchars($deldate) . "</td>";

        // If a new image is not uploaded, fetch the current product image from the database
        if ($fname == "") {
            $res = mysqli_query($con, "SELECT prod_img FROM product WHERE prod_id='$prdid'");
            $imgData = mysqli_fetch_assoc($res);
            $fname = $imgData['prod_img'];
        }

        echo "<td><a href='productImg/" . htmlspecialchars($fname) . "' target='_blank'><img src='productImg/" . htmlspecialchars($fname) . "' width='100'></a></td>";

        echo "</tr>";

        // End of the table
        echo '</tbody></table>';


  } else {
      echo "Error updating product.";
  }

  mysqli_close($con);
}

/*---------------- Update product data end ---------------------*/ 


/*---------------- Delete product data start ---------------------*/ 


if(isset($_POST["Delete"])) {
  $prdid = $_POST["pdid"]; // This is the ID of the product you wish to delete
                
  // Check if prod_id is empty
  if($prdid == "") {
     echo "Please provide a product ID for deletion.";
     return;
    }
            
  // Database connection
   $con = mysqli_connect("localhost", "id21012671_admin", "Cafesh@ad12", "id21012671_cafedb") or die('Server Error ' . mysqli_error($con));
            
   // Delete the product in the database based on product ID
   $query = mysqli_query($con, "DELETE FROM product WHERE prod_id='$prdid'");
            
   if($query) 
   {
      echo "Product deleted successfully!";
   } 
   else 
   {
      echo "Error deleting product.";
   }
            
  mysqli_close($con);
  }
 /*---------------- Delete product data end ---------------------*/
                    
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




































