<!DOCTYPE html>
<?php
	include 'connection.php';
	
	$kj =  $_GET['varname'];
	$flag=0;
	$arr= array();
$result = mysql_query("SELECT name FROM `animals` WHERE type=\"reptiles\"", $db);
	if (!$result) {
		die("Database query failed: " . mysql_error());
	} while ($row = mysql_fetch_array($result)) {
	$flag=$flag+1;
	array_push($arr,$row[0]);
	
	
		
	} 	
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


<head>
    <title>Reptiles</title>
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
                        <li><img src="images/slide/alligator-1.jpg" alt="" /></li>
                        <li><img src="images/slide/anaconda-1.jpg" alt="" /></li>
                       <li><img src="images/slide/python-1.jpg" alt="" /></li>
                        <li><img src="images/slide/sungazer-1.jpg" alt="" /></li>
                        <li><img src="images/slide/tortoise-2.jpg" alt="" /></li>
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
            <div class="block-1 top-5" style="width:950px">
            <div class="block-1-shadow">
            <form action="search_check.php" method="post" name="search" style="position:relative; left:72%; width:275px;" >

<input name="keyword" type="text" value="Enter a Keyword" size="30" style="background-image:url(images/search.png); background-position:center; color:#FFF; height:30px; "> 
<input name="Search" type="submit" value="Search" style="background-color:#CCC; width:50px; height:30px;">
<input name="all" type="radio" value="1" checked hidden="true">
</form>
            	<h2 class="clr-6 p6">Reptiles</h2>
               	   <font style=" font-family:Andalus; color:#000; font-size:25px; font-stretch:ultra-expanded; ">
               	  <strong> All Reptiles:</strong><br><br>
•	&nbsp;Are vertebrates (which means they have a backbone or spine).<br>
•	&nbsp;Are ectothermic. Also known as “cold-blooded,” ectothermic animals cannot regulate their own body heat, so they depend on warmth from sunlight to become warm and active. If they get too hot, they have to find shade or a burrow to help them cool down.<br>
•	&nbsp;Are covered with scales.<br>
•	&nbsp;Have lungs for breathing.<br>
<br>
<br>

 <strong>Below are some Reptiles .. to know more about them click on their names</strong></font>
<br>
<br>

  <h2 class="clr-6">
           
           
   <?php for ($ix=0; $ix<$flag; $ix++) 
{ ?> 
<a href="http://localhost/zoo/animalspecimen.php?varname=<?php echo $arr[$ix];?>"><?php echo $arr[$ix];?> </a> <br>

 <?php } ?>


 </h2>           
                   
                   
                    <div class="pad-2">
                    	<a href="animals.html" class="link-2" >Back to Animals Page</a>

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
