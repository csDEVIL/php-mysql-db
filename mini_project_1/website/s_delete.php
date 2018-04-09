<doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Smartphone delete</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="assets/css/style-projects.css">
		<link rel="stylesheet" href="assets/css/w3.css">
        

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

<style> 
#rcorners1 {
    border-radius: 18px;
    background: #30C198;
    padding: 20px; 
    width: 1100px;
    height: 180px;    
}

  

</style>
    <body>

        <!-- Header -->
        
        <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
            <div class="container">
        
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand animated fadeInDownBig" href="index.html"><img src="assets/img/slider/Office.png" width="100" alt="Office"></a>      
                </div>
        
                <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <a href="smartphone.php">Smartphones</a>
                    </li>
                    <li>
                        <a href="laptop.php">Laptops</a>
                    </li>
                    <li>
                        <a href="desktop.php">Desktops</a>
                    </li>
                    <li>
                        <a href="company.php">Companies</a>
                    </li>
					<li>
                        <a href="credits.html">Credits</a>
                    </li>
                    </ul>         
                </div>
            </div>
        </nav>

        <!--End Header -->

<!-- Main Container -->
    <div id="banners"></div>
    <div class="container">   
	
	<br><br><br>
<?php
$conn = new mysqli("localhost","root","root");
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 
mysqli_select_db($conn,"gadgets");
$query = "DELETE FROM smartphone where";

$var=$_POST['s_name'];
if ($var!="")
  {   $query= $query." name='$_POST[s_name]'";}
$var=$_POST['s_manufacturer'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." smartphone='$_POST[s_manufacturer]'";}
      else
	  {$query= $query." and smartphone='$_POST[s_manufacturer]'";}
  }
$var=$_POST['s_ram'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." ram>='$_POST[s_ram]'";}
      else
	  {$query=$query." and ram>='$_POST[s_ram]'";}
  }
$var=$_POST['s_rom'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." rom>='$_POST[s_rom]'";}
      else
	  {$query=$query." and rom>='$_POST[s_rom]'";}
  }  
$var=$_POST['s_battery'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." battery>='$_POST[s_battery]'";}
      else
	  {$query=$query." and battery>='$_POST[s_battery]'";}
  }
$var=$_POST['s_camera'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." camera>='$_POST[s_camera]'";}
      else
	  {$query=$query." and camera>='$_POST[s_camera]'";}
  }
$var=$_POST['s_screen'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." screen_size>='$_POST[s_screen]'";}
      else
	  {$query=$query." and screen_size>='$_POST[s_screen]'";}
  }
$var=$_POST['s_os'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." os='$_POST[s_os]'";}
      else
	  {$query=$query." and os='$_POST[s_os]'";}
  }
$var=$_POST['s_price'];
if ($var!="")
  {   if ($query=="DELETE FROM smartphone where")
	  {$query= $query." price<='$_POST[s_price]'";}
      else
	  {$query=$query." and price<='$_POST[s_price]'";}
  }

if($conn->query($query))
{ echo "<h2 style='color:#39B4E6'><center><b>Smartphones deleted successfully.</b></center></h2>" ;}
else{echo "<h2 style='color:#FC0404'><center><b>Error!No Smartphone got deleted.</b></center></h2>" ;}	



?>
    </div>  

    <!--End Main Container -->

    
    
    

    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
     <script type="text/javascript">$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});</script>

  </body>
</html>
