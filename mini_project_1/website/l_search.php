<doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Laptop search</title>
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
                    <li class="active">
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
$db = mysqli_connect("localhost","root","root") or die("Database Error");
mysqli_select_db($db,"gadgets");

$query = "SELECT * FROM laptop where";

$var=$_POST['l_name'];
if ($var!="")
  {   $query= $query." name='$_POST[l_name]'";}
$var=$_POST['l_manufacturer'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." manufacturer='$_POST[l_manufacturer]'";}
      else
	  {$query= $query." and manufacturer='$_POST[l_manufacturer]'";}
  }
$var=$_POST['l_ram'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." ram>='$_POST[l_ram]'";}
      else
	  {$query=$query." and ram>='$_POST[l_ram]'";}
  }
$var=$_POST['l_hdd'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." hdd>='$_POST[l_hdd]'";}
      else
	  {$query=$query." and hdd>='$_POST[l_hdd]'";}
  }  
$var=$_POST['l_ssd'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." ssd>='$_POST[l_ssd]'";}
      else
	  {$query=$query." and ssd>='$_POST[l_ssd]'";}
  } 
$var=$_POST['l_os'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." os='$_POST[l_os]'";}
      else
	  {$query=$query." and os='$_POST[l_os]'";}
  } 
$var=$_POST['l_cpu'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." cpu>='$_POST[l_cpu]'";}
      else
	  {$query=$query." and cpu>='$_POST[l_cpu]'";}
  }
$var=$_POST['l_screen'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." screen_size>='$_POST[l_screen]'";}
      else
	  {$query=$query." and screen_size>='$_POST[l_screen]'";}
  }  
$var=$_POST['l_battery'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." battery>='$_POST[l_battery]'";}
      else
	  {$query=$query." and battery>='$_POST[l_battery]'";}
  }
$var=$_POST['l_price'];
if ($var!="")
  {   if ($query=="SELECT * FROM laptop where")
	  {$query= $query." price<='$_POST[l_price]'";}
      else
	  {$query=$query." and price<='$_POST[l_price]'";}
  }
if($query=="SELECT * FROM laptop where")
  {$query="SELECT * FROM laptop";}
//$query = "SELECT * FROM manufacturer where name='$_POST[l_name]' and revenue>'$_POST[l_r_from]' and revenue<'$_POST[l_r_to]'" ;

$result = mysqli_query($db,$query) or die(mysql_error());

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
{ echo "<h2 style='color:#FC0404'><center><b>No such laptop exists! You can add one if you want.</b></center></h2>" ;}
		

while ($row = mysqli_fetch_assoc($result)) {
        // foreach($row as $field) {
		//$flag++;
		//if ( $row==false && $flag==0){  echo "<h2 style='color:#FC0404'><center><b>No such laptop exists! You can add one if you want.</b></center></h2>" ;}
		$l_name = $row['name'];
		$l_manufacturer = $row['manufacturer'];
		$l_ram = $row['ram']."GB";
        $l_hdd = $row['hdd']."/";
		$l_ssd = $row['ssd']." GB";
		$l_os = $row['os'];
		$l_cpu = $row['cpu'];
		$l_gpu = $row['gpu'];
		$l_screen = $row['screen_size']."inch";
		$l_battery = $row['battery']."watt-hours";
		$l_price = $row['price']." INR";
        echo "<table id='rcorners1'>
<tr>
    <td><h2 style='color:#fff;text-transform: uppercase;' ><b><u>".$l_name."</u></b></h2></td>
    <td><h3 style='color:#fff'><b>company: </b>".$l_manufacturer."</h3></td>
</tr>
  <tr>
    <td><h3 style='color:#fff'><b>RAM: </b>".$l_ram."</h3></td>
	<td><h3 style='color:#fff'><b>HDD/SSD: </b>".$l_hdd.$l_ssd."</h3></td>	
</tr>
<tr>
    <td><h3 style='color:#fff'><b>Screen Size: </b>".$l_screen."</h3></td>
	<td><h3 style='color:#fff'><b>OS: </b>".$l_os."</h3></td>
</tr>
<tr>
    <td><h3 style='color:#fff'><b>CPU: </b>".$l_cpu."</h3></td>
	<td><h3 style='color:#fff'><b>GPU: </b>".$l_gpu."</h3></td>
</tr>
<tr>
    <td><h3 style='color:#fff'><b>Battery: </b>".$l_battery."</h3></td>
	<td><h3 style='color:#fff'><b>Price: </b>".$l_price."</h3></td>
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
