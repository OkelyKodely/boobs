<?php
session_start();
$conn = oci_connect("sa", "coppersink21", "XE");
?>
<head>
<title>Boobs</title>
<link href="bootstrap.min.css" rel="stylesheet" />
<style>
.feeder-site{
   background-image: url(banner1.jpg); 
   background-position: 100% 100%;
   background-repeat: repeat-x;
   color:white;
}
.footer-site{
   background-image: url(futer.jpg); 
   background-position: 100% 100%;
   background-repeat: repeat-x;
   color:white;
}
</style>
</head>

<body rightmargin="0" leftmargin="0" topmargin="0">
<div class="feeder-site" style="width:100%;height:127px">
  <div style="float:left;width:50%;height:127px">
    <a href="/"><img src="logo.jpg"></a>
  </div>  
  <div style="float:left;background-color:#efefef;padding:10px">
    <span style="width:100px;;display:block;"><a href="/" style="width:100px">Home</a></span>
    <span style="width:100px;display:block;"><a href="bestsellers.php" style="width:100px">Best Sellers</a></span>
    <span style="width:100px;;;display:block;"><a href="newarrivals.php" style="width:100px">New Arrivals</a></span>
    <span style="width:100px;;;;;display:block;"><a href="bras.php" style="width:100px">Bras</a></span>
    <span style="width:100px;;;;;display:block;"><a href="blog.php" style="width:100px">Blog</a></span>
  </div>  
</div>
<div style="width:100%;height:20px;background-color:black;">
  &nbsp;
</div>