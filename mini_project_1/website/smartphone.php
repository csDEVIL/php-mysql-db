<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Smartphone</title>
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
                <a class="navbar-brand wow fadeInDownBig" href="index.html"><img src="assets/img/slider/Office.png" width="100" alt="Office"></a>      
            </div>
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li >
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
	<br>
	<hr>
	<h2 style="color:#30C198;"><b>SEARCH FORM-></b></h2>
	<form action="s_search.php" method="POST">
                <div class="" width="%">
                    <label>Smartphone Name</label>
                    <input class="w3-input w3-border" type="text" name="s_name" placeholder="Phone Name">
                </div><br>   
				<div class="" width="50%">
                    <label>Manufacturer</label>
                    <input class="w3-input w3-border" type="text" name="s_manufacturer" placeholder="Manufacturer">
                </div><br>
                <div class="" width="50%">
                    <label>Minimum Ram</label>
                    <input class="w3-input w3-border" type="text" name="s_ram" placeholder="in GB">
				</div><br>	
                <div class="" width="50%">
                    <label>Minimum Rom</label>
                    <input class="w3-input w3-border" type="text" name="s_rom" placeholder="in GB">
				</div><br>		
                <div class="" width="50%">
                    <label>Minimum Battery</label>
                    <input class="w3-input w3-border" type="text" name="s_battery" placeholder="in mAh">
				</div><br>				
	            <div class="" width="50%">
                    <label>Minimum Camera</label>
                    <input class="w3-input w3-border" type="text" name="s_camera" placeholder="in Mega Pixel">
				</div><br>
                <div class="" width="50%">
                    <label>Minimum Screen Size</label>
                    <input class="w3-input w3-border" type="text" name="s_screen" placeholder="in inches">
				</div><br>
				<div class="" width="50%">
                    <label>Operating System</label>
                    <input class="w3-input w3-border" type="text" name="s_os" placeholder="os type">
				</div><br>
				<div class="" width="50%">
                    <label>Maximum Price</label>
                    <input class="w3-input w3-border" type="text" name="s_price" placeholder="in INR">
				</div><br>
				
				
		      <input style="background-color:#30C198;color:#fff;border:none;padding:12px 20px;border-radius:4px;cursor:pointer:" type="submit" name="search" value="Search">
			  </form>
		   <hr>
		   <h2 style="color:#39B4E6;"><b>ADD FORM-></b></h2>
		   <form action="s_add.php" method="POST">
                <div class="" width="%">
                    <label>Smartphone Name</label>
                    <input class="w3-input w3-border" type="text" name="s_name" placeholder="Phone Name">
                </div><br>   
				<div class="" width="50%">
                    <label>Manufacturer</label>
                    <input class="w3-input w3-border" type="text" name="s_manufacturer" placeholder="Manufacturer">
                </div><br>
                <div class="" width="50%">
                    <label>Ram</label>
                    <input class="w3-input w3-border" type="text" name="s_ram" placeholder="in GB">
				</div><br>	
                <div class="" width="50%">
                    <label>Rom</label>
                    <input class="w3-input w3-border" type="text" name="s_rom" placeholder="in GB">
				</div><br>		
                <div class="" width="50%">
                    <label>Battery</label>
                    <input class="w3-input w3-border" type="text" name="s_battery" placeholder="in mAh">
				</div><br>				
	            <div class="" width="50%">
                    <label>Camera</label>
                    <input class="w3-input w3-border" type="text" name="s_camera" placeholder="in Mega Pixel">
				</div><br>
                <div class="" width="50%">
                    <label>Screen Size</label>
                    <input class="w3-input w3-border" type="text" name="s_screen" placeholder="in inches">
				</div><br>
				<div class="" width="50%">
                    <label>Operating System</label>
                    <input class="w3-input w3-border" type="text" name="s_os" placeholder="os type">
				</div><br>
				<div class="" width="50%">
                    <label>Processor</label>
                    <input class="w3-input w3-border" type="text" name="s_processor" placeholder="cpu name">
				</div><br>
				<div class="" width="50%">
                    <label>Price</label>
                    <input class="w3-input w3-border" type="text" name="s_price" placeholder="in INR">
				</div><br>
				
		      <input style="background-color:#39B4E6;color:#fff;border:none;padding:12px 20px;border-radius:4px;cursor:pointer:" type="submit" name="add" value="Add">
			  </form>
		   <h2 style="color:#FF2C3F;"><b>DELETE FORM-></b></h2>
		   <form action="s_delete.php" method="POST">
                <div class="" width="%">
                    <label>Smartphone Name</label>
                    <input class="w3-input w3-border" type="text" name="s_name" placeholder="Phone Name">
                </div><br>   
				<div class="" width="50%">
                    <label>Manufacturer</label>
                    <input class="w3-input w3-border" type="text" name="s_manufacturer" placeholder="Manufacturer">
                </div><br>
                <div class="" width="50%">
                    <label>Minimum Ram</label>
                    <input class="w3-input w3-border" type="text" name="s_ram" placeholder="in GB">
				</div><br>	
                <div class="" width="50%">
                    <label>Minimum Rom</label>
                    <input class="w3-input w3-border" type="text" name="s_rom" placeholder="in GB">
				</div><br>		
                <div class="" width="50%">
                    <label>Minimum Battery</label>
                    <input class="w3-input w3-border" type="text" name="s_battery" placeholder="in mAh">
				</div><br>				
	            <div class="" width="50%">
                    <label>Minimum Camera</label>
                    <input class="w3-input w3-border" type="text" name="s_camera" placeholder="in Mega Pixel">
				</div><br>
                <div class="" width="50%">
                    <label>Minimum Screen Size</label>
                    <input class="w3-input w3-border" type="text" name="s_screen" placeholder="in inches">
				</div><br>
				<div class="" width="50%">
                    <label>Operating System</label>
                    <input class="w3-input w3-border" type="text" name="s_os" placeholder="os type">
				</div><br>
				<div class="" width="50%">
                    <label>Maximum Price</label>
                    <input class="w3-input w3-border" type="text" name="s_price" placeholder="in INR">
				</div><br>
				
				
		      <input style="background-color:#FF2C3F;color:#fff;border:none;padding:12px 20px;border-radius:4px;cursor:pointer:" type="submit" name="delete" value="Delete">
			   </form>
        
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
