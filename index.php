<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script type="text/javascript" src="js/jquery-3.3.1.min"></script>
	<script type="text/javascript" src="js/pscript.js"></script>
	<script type="text/javascript" src="js/pfilter.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min"></script>
	<link rel="stylesheet" type="text/css" href="css/pstyle.css">
</head>
<body>
 
 <div id="header">
 	<div id="menu">
 		<h2>Sample Portfolio</h2>
 	    <input id="search"  type="text" name="search" placeholder="Search...">
 	</div>
 </div>
 <div id="overlay"></div>
 <div id="frame">
 	<table id="frame-table">
 		<tr>
 			<td id="left">
 				<img src="images/9.png" alt="left">
 			</td>
 			<td id="right">
 				<img src="images/10.png" alt="Right">
 			</td>
 		</tr>
 	</table>
    
 	<img id="main" src="" alt="" />
 	<div id="description">
 		<p></p>
 	</div>
 </div>
 <div  id="wrapper">
 	<ul id="filter">
 		<li class="active">All</li>
 		<li>Forest</li>
 		<li>Water</li>
 		<li>Hills</li>
 	</ul>
 	<ul id="portfolio">
          <?php include("list.php") ?>
 	</ul>
 </div>

</body>
</html>