<doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Office</title>
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
	<br>
	<hr>
	<h2 style="color:#30C198;"><b>SEARCH FORM-></b></h2>
	<form action="m_search.php" method="POST">
                <div class="" width="50%">
                    <label>Company Name</label>
                    <input class="w3-input w3-border" type="text" name="m_name" placeholder="Name">
                </div><br>   
                <div class="" width="50%">
                    <label>Country</label>
                    <input class="w3-input w3-border" type="text" name="m_country" placeholder="country">
				</div><br>				
	
                <div class="" width="50%">
                    <label>Revenue in $</label>
                    <input class="w3-input w3-border" type="text" name="m_r_from" placeholder="more than">
					<input class="w3-input w3-border" type="text" name="m_r_to" placeholder="less than">
                </div><br>
		      <input style="background-color:#30C198;color:#fff;border:none;padding:12px 20px;border-radius:4px;cursor:pointer:" type="submit" name="search" value="Search">
			  <hr>
	       </form>
		   <h2 style="color:#39B4E6;"><b>ADD FORM-></b></h2>
		   <form action="m_add.php" method="POST">
                <div class="" width="50%">
                    <label>Company Name</label>
                    <input class="w3-input w3-border" type="text" name="m_name" placeholder="Name">
                </div><br>  
                <div class="" width="50%">
                    <label>Website</label>
                    <input class="w3-input w3-border" type="text" name="m_website" placeholder="www.example.com">
                </div><br>	
                <div class="" width="50%">
                    <label>Nearest Store</label>
                    <input class="w3-input w3-border" type="text" name="m_store" placeholder="address of store">
                </div><br>				
                <div class="" width="50%">
                    <label>Country</label>
                    <input class="w3-input w3-border" type="text" name="m_country" placeholder="origin of company">
				</div><br>				
	
                <div class="" width="50%">
                    <label>Revenue in $</label>
                    <input class="w3-input w3-border" type="text" name="m_revenue" placeholder="in $">
					
                </div><br>
		      <input style="background-color:#39B4E6;color:#fff;border:none;padding:12px 20px;border-radius:4px;cursor:pointer:" type="submit" name="add" value="Add">
			  <hr>
	       </form>
		   <h2 style="color:#FF2C3F;"><b>DELETE FORM-></b></h2>
	<form action="m_delete.php" method="POST">
                <div class="" width="50%">
                    <label>Company Name</label>
                    <input class="w3-input w3-border" type="text" name="m_name" placeholder="Name">
                </div><br>   
                <div class="" width="50%">
                    <label>Country</label>
                    <input class="w3-input w3-border" type="text" name="m_country" placeholder="country">
				</div><br>				
	
                <div class="" width="50%">
                    <label>Revenue in $</label>
                    <input class="w3-input w3-border" type="text" name="m_r_from" placeholder="more than">
					<input class="w3-input w3-border" type="text" name="m_r_to" placeholder="less than">
                </div><br>
		      <input style="background-color:#FF2C3F;color:#fff;border:none;padding:12px 20px;border-radius:4px;cursor:pointer:" type="submit" name="delete" value="Delete">
			   <hr>
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
