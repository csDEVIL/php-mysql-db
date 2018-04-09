<doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Desktop search</title>
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
                    <li>
                        <a href="smartphone.php">Smartphones</a>
                    </li>
                    <li>
                        <a href="laptop.php">Laptops</a>
                    </li>
                    <li class="active">
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
$db = mysqli_connect("localhost","root","root") or die("Database Error");
mysqli_select_db($db,"gadgets");

$query = "SELECT * FROM desktop where";

$var=$_POST['d_name'];
if ($var!="")
  {   $query= $query." name='$_POST[d_name]'";}
$var=$_POST['d_manufacturer'];
if ($var!="")
  {   if ($query=="SELECT * FROM desktop where")
	  {$query= $query." manufacturer='$_POST[d_manufacturer]'";}
      else
	  {$query= $query." and manufacturer='$_POST[d_manufacturer]'";}
  }
$var=$_POST['d_ram'];
if ($var!="")
  {   if ($query=="SELECT * FROM desktop where")
	  {$query= $query." ram>='$_POST[d_ram]'";}
      else
	  {$query=$query." and ram>='$_POST[d_ram]'";}
  }
$var=$_POST['d_hdd'];
if ($var!="")
  {   if ($query=="SELECT * FROM desktop where")
	  {$query= $query." hdd>='$_POST[d_hdd]'";}
      else
	  {$query=$query." and hdd>='$_POST[d_hdd]'";}
  }  
$var=$_POST['d_ssd'];
if ($var!="")
  {   if ($query=="SELECT * FROM desktop where")
	  {$query= $query." ssd>='$_POST[d_ssd]'";}
      else
	  {$query=$query." and ssd>='$_POST[d_ssd]'";}
  } 
$var=$_POST['d_os'];
if ($var!="")
  {   if ($query=="SELECT * FROM desktop where")
	  {$query= $query." os='$_POST[d_os]'";}
      else
	  {$query=$query." and os='$_POST[d_os]'";}
  } 
$var=$_POST['d_cpu'];
if ($var!="")
  {   if ($query=="SELECT * FROM desktop where")
	  {$query= $query." cpu>='$_POST[d_cpu]'";}
      else
	  {$query=$query." and cpu>='$_POST[d_cpu]'";}
  }
$var=$_POST['d_price'];
if ($var!="")
  {   if ($query=="SELECT * FROM desktop where")
	  {$query= $query." price<='$_POST[d_price]'";}
      else
	  {$query=$query." and price<='$_POST[d_price]'";}
  }
if($query=="SELECT * FROM desktop where")
  {$query="SELECT * FROM desktop";}
//$query = "SELECT * FROM manufacturer where name='$_POST[d_name]' and revenue>'$_POST[d_r_from]' and revenue<'$_POST[d_r_to]'" ;

$result = mysqli_query($db,$query) or die(mysqd_error());

// while ($row = mysqli_fetch_array($result)) {
//     echo '<tr>';
//     foreach($row as $field) {
//         echo '<td>' . htmlspecialchars($field) . '</td>';
//     }
//     echo '</tr>';
// }

// while($table = mysqli_fetch_array($result)) { 
//     echo($table[0] . "<BR>");   
// }

if (mysqli_num_rows($result) == 0)
{ echo "<h2 style='color:#FC0404'><center><b>No such desktop exists! You can add one if you want.</b></center></h2>" ;}
		

while ($row = mysqli_fetch_assoc($result)) {
        // foreach($row as $field) {
		//$flag++;
		//if ( $row==false && $flag==0){  echo "<h2 style='color:#FC0404'><center><b>No such desktop exists! You can add one if you want.</b></center></h2>" ;}
		$d_name = $row['name'];
		$d_manufacturer = $row['manufacturer'];
		$d_ram = $row['ram']." GB";
        $d_hdd = $row['hdd'];
		$d_ssd = $row['ssd']." GB";
		$d_os = $row['os'];
		$d_cpu = $row['cpu'];
		$d_gpu = $row['gpu'];
		$d_price = $row['price']." INR";
        echo "<table id='rcorners1'>
<tr>
    <td><h2 style='color:#fff;text-transform: uppercase;' ><b><u>".$d_name."</u></b></h2></td>
    <td><h3 style='color:#fff'><b>company: </b>".$d_manufacturer."</h3></td>
</tr>
  <tr>
    <td><h3 style='color:#fff'><b>RAM: </b>".$d_ram."</h3></td>
	<td><h3 style='color:#fff'><b>HDD/SSD: </b>".$d_hdd."/".$d_ssd."</h3></td>
</tr>
<tr>
    <td><h3 style='color:#fff'><b>CPU: </b>".$d_cpu."</h3></td>
	<td><h3 style='color:#fff'><b>GPU: </b>".$d_gpu."</h3></td>
</tr>
<tr>
    <td><h3 style='color:#fff'><b>OS: </b>".$d_os."</h3></td>
	<td><h3 style='color:#fff'><b>Price: </b>".$d_price."</h3></td>
</tr>
  </table><br>";
 
}


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
