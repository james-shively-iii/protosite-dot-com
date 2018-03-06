<?php session_start([
    'cookie_lifetime' => 600,
]); 
ob_start();

require 'dbsql.php';

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mockup for your Protosite!</title>
 
 
      
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-inverse">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Protosite Mockup App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
       
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">News
                </a>
                <ul class="dropdown-menu">
                  <?php if(mysqli_num_rows($result1) > 0)
                    {//show records
                        while($row = mysqli_fetch_assoc($result1))
                        {
                            echo '<a href=' . $row['SubMenuURL'] . '>' . $row['SubMenuTitle'] . '</a><br /> ';
                        }
                    }else{//inform there are no records
                        echo '<p>There are currently no links</p>';
                    }
                    ?>
                </ul>
              </li>
              <br />           
              <!--<li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>-->
                  <!--      <li class="nav-item">
              <a class="nav-link" href="#tech">Music</a>
            </li>-->
              
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Music
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <?php if(mysqli_num_rows($result2) > 0)
                    {//show records
                        while($row = mysqli_fetch_assoc($result2))
                        {
                            echo '<a href=' . $row['SubMenuURL'] . '>' . $row['SubMenuTitle'] . '</a><br /> ';
                        }
                    }else{//inform there are no records
                        echo '<p>There are currently no links</p>';
                    }
                    ?>
                </ul>
            </li>
            <br />
                       <!-- <li class="nav-item">
              <a class="nav-link" href="#us">Video Games</a>
            </li>-->
              
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Video Games
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <?php if(mysqli_num_rows($result3) > 0)
                    {//show records
                        while($row = mysqli_fetch_assoc($result3))
                        {
                            echo '<a href=' . $row['SubMenuURL'] . '>' . $row['SubMenuTitle'] . '</a><br /> ';
                        }
                    }else{//inform there are no records
                        echo '<p>There are currently no links</p>';
                    }
                    ?>
                </ul>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="javascript:alert('This web app was created by Daniel Douglas, Myra Sarmiento, James Shively and Dann Frey for their ITC 250 Class at Seattle Central College.');">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">NEWS
        <small>Your trusted source.</small>
      </h1>