<doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>manufacture search</title>
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
                    <li>
                        <a href="desktop.php">Desktops</a>
                    </li>
                    <li class="active">
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

$query = "SELECT * FROM manufacturer where";

$var=$_POST['m_name'];
if ($var!="")
  {   $query= $query." name='$_POST[m_name]'";}
$var=$_POST['m_country'];
if ($var!="")
  {   if ($query=="SELECT * FROM manufacturer where")
	  {$query= $query." country='$_POST[m_country]'";}
      else
	  {$query= $query." and country='$_POST[m_country]'";}
  }
$var=$_POST['m_r_from'];
if ($var!="")
  {   if ($query=="SELECT * FROM manufacturer where")
	  {$query= $query." revenue>='$_POST[m_r_from]'";}
      else
	  {$query=$query." and revenue>='$_POST[m_r_from]'";}
  }
$var=$_POST['m_r_to'];
if ($var!="")
  {   if ($query=="SELECT * FROM manufacturer where")
	  {$query= $query." revenue<='$_POST[m_r_to]'";}
      else
	  {$query=$query." and revenue<='$_POST[m_r_to]'";}
  }
if($query=="SELECT * FROM manufacturer where")
  {$query="SELECT * FROM manufacturer";}
//$query = "SELECT * FROM manufacturer where name='$_POST[m_name]' and revenue>'$_POST[m_r_from]' and revenue<'$_POST[m_r_to]'" ;

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
{ echo "<h2 style='color:#FC0404'><center><b>No such company exists! You can add one if you want.</b></center></h2>" ;}
		

while ($row = mysqli_fetch_assoc($result)) {
        // foreach($row as $field) {
		//$flag++;
		//if ( $row==false && $flag==0){  echo "<h2 style='color:#FC0404'><center><b>No such company exists! You can add one if you want.</b></center></h2>" ;}
		$m_name = $row['name'];
		$m_website = $row['website'];
		$m_store = $row['nearest_store'];
        $m_country = $row['country'];
		$m_revenue = $row['revenue'];
        echo "<table id='rcorners1'>
<tr>
    <td><h2 style='color:#fff;text-transform: uppercase;' ><b><u>".$m_name."</u></b></h2></td>
    <td><h3 style='color:#fff'><b>website: </b>".$m_website."</h3></td>
</tr>
  <tr>
    <td><h3 style='color:#fff'><b>nearest store: </b>".$m_store."</h3></td>
</tr>
  <tr>
    <td><h3 style='color:#fff'><b>country: </b>".$m_country."</h3></td>
    <td><h3 style='color:#fff'><b>revenue in $: </b>".$m_revenue."</h3></td>
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
