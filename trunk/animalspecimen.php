<!DOCTYPE html>
<?php
	include 'connection.php';
	
	
	
	
	
?>
<html lang="en">
<style type="text/css">
  .body2 A:link { 
    color: #036; /* The color of the unvisited links */
   }
  .body2 A:visited { 
    color: #606; /* The color of the visited links */
   }
  .body2 A:hover { 
    color: #f00; /* The color of the link while bringing the cursor to it */
   }
  .body2 A:active { 
    color: #ff0; /* The color of the active links */
   }
  </style>

<span class="body2">
</span>
<head>
<title><?php 
include 'query.php';
 while ($row = mysql_fetch_array($result)) {
		echo $row[1];
		break;
	} ?></title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:800,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
<!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
<script type="text/javascript" src="includes/jQuerySlideshow/slideshow.extend.js"></script>
<script type="text/javascript" src="includes/jQuerySlideshow/jQuerySlideshow.js"></script>
<script type="text/javascript" src="includes/jQuerySlideshow/m.js"></script>
<script type="text/javascript" src="includes/jQuerySlideshow/amphi.js"></script>
<script type="text/javascript" src="includes/jQuerySlideshow/birds.js"></script>
<script type="text/javascript" src="includes/jQuerySlideshow/reptiles.js"></script>
<link href="includes/jQuerySlideshow/reptiles.css" rel="stylesheet" type="text/css" />
<link href="includes/jQuerySlideshow/m.css" rel="stylesheet" type="text/css" />
<link href="includes/jQuerySlideshow/amphi.css" rel="stylesheet" type="text/css" />
<link href="includes/jQuerySlideshow/birds.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="includes/jQuerySlideshow/fish.js"></script>
<link href="includes/jQuerySlideshow/fish.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="main">
  <!--==============================header=================================-->
    <header>
       <br>
    <br>
    <br>
    <br>
    <br>
      <h2 class="p2" style="font-size:100px;">ZooPedia</h2>
        <nav>  
            <div id="slide">		
                <div class="slider">
                    <ul class="items">
                        <li><img src="<?php include 'query.php';
	while ($row = mysql_fetch_array($result)) {
		echo $row[10];
	} ?>" alt="" /></li>
                        <li><img src="<?php include 'query.php';
			 while ($row = mysql_fetch_array($result)) {
		echo $row[11];
	} ?>" alt="" /></li>
                        
                    </ul>
                </div>	
                <a href="#" class="prev"></a><a href="#" class="next"></a>
            </div>
            <ul class="menu">
              <li class="current"><a href="index.html" class="clr-1">Home</a></li>
              <li><a href="animals.html" class="clr-2">Animals</a>                </li>
              <li><a href="games.html" class="clr-3">Games</a></li>
              <li><a href="activities.html" class="clr-4">Activities</a></li>
              <li><a href="maps.html" class="clr-5">Maps</a></li>
                <li><a href="glossary.php" class="clr-8">Glossary</a></li>
          </ul>
      </nav>
    </header>   
  <!--==============================content================================-->
  <span class="body2">

    <section id="content"><div class="ic"></div>
        <div class="container_12">
          <div class="grid_8">
            <div class="block-1 top-5" style="width:950px;">
            	<div class="block-1-shadow">
                <form action="search_check.php" method="post" name="search" style="position:relative; left:72%; width:275px;" >

<input name="keyword" type="text" value="Enter a Keyword" size="30" style="background-image:url(images/search.png); background-position:center; color:#FFF; height:30px; "> 
<input name="Search" type="submit" value="Search" style="background-color:#CCC; width:50px; height:30px;">
<input name="all" type="radio" value="1" checked hidden="true">
</form>
               	  <h2 class="clr-6 p6" ><?php include 'query.php';
		while ($row = mysql_fetch_array($result)) {
		echo $row[1];
	} ?></h2>
                 
               	  <table width="920" border="0">
                    <tr>
                      <td width="478"><iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="460" height="350" src="<?php include 'query.php';

 while ($row = mysql_fetch_array($result)) {
		echo $row[9];
	} ?>"
frameborder="0" allowFullScreen></iframe></td>
                      <td  width="440" align="justify">
                      <br>
                      <img src="images/area.jpg" width="30" height="30" alt="Area"><font color="#000000" face="Comic Sans MS, cursive" style="font-size:20px"><strong>Area:</strong><?php include 'query.php';
	while ($row = mysql_fetch_array($result)) {
		echo $row[3];
	} ?></font><br><br>
                      
                      
                      
<img src="images/habitat.jpg" width="30" height="30" alt="Habitat"><font color="#000000" face="Comic Sans MS, cursive" style="font-size:20px"><strong>Habitat:</strong><?php include 'query.php';while ($row = mysql_fetch_array($result)) {
		echo $row[4];
	} ?></font>                     
<br><br>                      
 
<img src="images/food.jpg" width="30" height="30" alt="food"><font color="#000000" face="Comic Sans MS, cursive" style="font-size:20px"><strong>Food: </strong><?php include 'query.php';
 while ($row = mysql_fetch_array($result)) {
		echo $row[5];
	} ?></font>
  <br><br>                       
                      
                      
 <img src="images/size.jpg" width="30" height="30" alt="Size"><font color="#000000" face="Comic Sans MS, cursive" style="font-size:20px"><strong>Size: </strong><?php include 'query.php';
  while ($row = mysql_fetch_array($result)) {
		echo $row[6];
	} ?></font>
  <br><br>                                 
 
<img src="images/babies.jpg" width="30" height="30" alt="babies"><font color="#000000" face="Comic Sans MS, cursive" style="font-size:20px"><strong>Babies:</strong>  <?php include 'query.php';
 while ($row = mysql_fetch_array($result)) {
		echo $row[7];
	} ?></font>
  <br><br>                      
                      
                      
                      
                      
                      
                      
                      </td>
                    </tr>
                  </table>
                  <br>   

<div class="pad-2">
   <a href="<?php include 'query.php';
    while ($row = mysql_fetch_array($result)) {
		echo $row[2];
	} ?>.php?varname=<?php include 'query.php';
	 while ($row = mysql_fetch_array($result)) {
		echo $row[2];
	} ?>" class="link-2" >Back to <?php include 'query.php';
	 while ($row = mysql_fetch_array($result)) {
		echo $row[2];
	} ?>  Page</a>
</div>
              </div>
            </div>
            <!--==============================footer=================================-->
            <footer>
				Project ZooPedia Created by Kaushik Jain, Ajay Raykar, Pritish Vaity , Chetna Gulati
                <br> as ICT Project at James Cook University.
            </footer>	  
          </div>
          <div class="clear"></div>
      </div>
    </section>    
    </span>
</div>      
</body>
</html>

<?php
	mysql_close($db);
?>
