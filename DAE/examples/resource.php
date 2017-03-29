<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>DAE Crisis Management :: Crisis Crossm</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<style type="text/css">

table{

width:100%;
border-collapse:collapse;
box-shadow:5px 5px 5px gray;
border-radius:5px;
}

th, td {
padding: 8px;
text-align:left;
border-bottom: 1px solid #ddd;
}

th{
 background: purple; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(left top, #a843b0, #8f268b); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(bottom right, #a843b0, #8f268b); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(bottom right, #a843b0, #8f268b); /* For Firefox 3.6 to 15 */
  background: linear-gradient(to bottom right,  #a843b0, #8f268b); /* Standard syntax */
  color:white;
}

tr:hover{
background-color:lightgray;}
		
center{
color:purple;

}

</style>

</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="dashboard.html" class="simple-text">
					Control Centre
				</a>
			</div>

	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li>
	                    <a href="dashboard.html">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="resource.html">
	                        <i class="material-icons">data_usage</i>
	                        <p>Resource Allocation</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="history.html">
	                        <i class="material-icons">history</i>
	                        <p>History</p>
	                    </a>
	                </li>
	               
	               
	                <li>
	                    <a href="maps.html">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
					
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Resource Allocation</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<a href="#pablo" class="btn btn-primary btn-round" input >Logout</a>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Allocate Resources </h4>
	                                <p class="category">Select appropriate parameters for the crisis.</p>
	                            </div>
	                            <div class="card-content">

		                           <form method="post">
<input type="hidden" name="submitted" value="true" />
<div class="row">
<div class="col-md-3">
<label><h5>Resource type:</h5>
<select class="form-control" name="resourcetype">
<option value="select">select</option>
<option value="ambulance">ambulance</option>
<option value="fire brigade">fire brigade</option>
<option value="police">police</option>
</select>
</label></div>

<div class="col-md-2">
<label><h5>status:</h5>
<select class="form-control" name="status">
<option value="select">select</option>
<option value="available">available</option>
<option value="not available">not available</option>
<option value="busy">busy</option>
</select>
<label>
</div>

<div class="col-md-2">
<label><h5>city:</h5>
<input class="form-control" type="text" name="city" required></div>

<div class="col-md-2">
<label> <h5>crisis spot:</h5>
<select class="form-control" name="spot">
<option value="select">select</option>
<option value="tarapur">TARAPUR</option>
<option value="isro">ISRO</option>
</select></div>
<div class="submit_button">
<div class="col-md-3"><br><br><input type="submit" class="btn btn-primary btn-round" /></div></div></div>
</form>


	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
  			
	    </div>
	</div>



<?php
if(isset($_POST['submitted'])){

include('dbcon.php');

$resourcetype=$_POST['resourcetype'];
$status=$_POST['status'];
$city=$_POST['city'];

$spot=$_POST['spot'];

if($spot=="tarapur")
{
$lat=19.8649;
$long=72.6850;
}
$query="SELECT  * FROM appregister INNER JOIN location ON appregister.adharno=location.adharno WHERE status='$status'AND city='$city' AND resourcetype='$resourcetype' AND latitude<='$lat'AND longitude<='$long' ";
$result=mysqli_query($con,$query) or die('error');
$date=date('Y-m-d') ;
$query1="INSERT INTO `history`( `atomiccenter`,`timestamp` ) VALUES ('$spot','$date')";
$result1=mysqli_query($con,$query1) or die('error');




$num_rows=mysqli_num_rows($result);
echo"<br>";
echo "<h3><center><b>".$num_rows . "rows found"."</h3></center><b>";
echo"<br>";
echo"<table>";
echo"<tr>  <th>Name</th> <th>Adhar no</th> <th>mobile no</th><th> l1</th>  <th> l2</th> </tr>";



while ($row = mysqli_fetch_assoc($result))
  
{
echo"<tr><td>";
echo $row['name'];
echo"</td><td>";

echo $row['adharno'];
echo"</td><td>";

echo $row['mobileno'];
echo"</td><td>";

echo $row['latitude'];
echo"</td><td>";


echo $row['longitude'];
echo"</td></td></tr>";



}
echo"</table>";
$lat=0;
$long=0;
?>

<html>
<body>
<form>
<br><br>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8"><center><input type="button" name="notify" value="notify" class="btn btn-primary btn-round" class="button"></center></div>
<div class="col-md-2"></div>
</div>
</form>




</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
