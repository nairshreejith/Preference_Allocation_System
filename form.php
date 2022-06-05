<?php
$host="localhost";
$username="root";
$password="";
$db="student";
$conn=mysqli_connect($host,$username,$password,$db);
if($conn)
{

}
else
{
echo "Not connected";
}

error_reporting(0);


?>






<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta charset="ISO-8859-1">
 <style>
body {
 background-image: url("img3.jpg");
 background-color: #cccccc;
 background-repeat:no-repeat;
  background-size: 100% 100%;
}
table, th, td {
  border: 1px solid black;
}
  </style>
<title>Insert title here</title>
</head>

<body>
<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" center href="#">COURSES PREFERENCES ALLOCATION SYSTEM</a>
    </div>
    <ul class="nav navbar-nav">
     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="active"><a href="#">Student</a></li>
          <li class=""><a href="#">Courses</a></li>
          <li class=""><a href="#">Results</a></li>
        </ul>
      </li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>





</header>
<section>

	  <center>
	   <form method="GET" action="">
	   <div class="form-group">
	   <label for="z1"><h5 style="color:green;">Name:</h5</label>
<input type="text" name="a" id="z1"  placeholder="First Name"><br>
</div>
	  Preference 1:
<div class="radio-inline">
  <label><input type="radio" name="pr1" value="sub1">sub1</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr1" value="sub2">sub2</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr1" value="sub3">sub3</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr1" value="sub4">sub4</label>
</div>

<div class="radio-inline">
  <label><input type="radio" name="pr1" value="sub5">sub5<br></label>
</div>
<br>
Preference 2:
<div class="radio-inline">
  <label><input type="radio" name="pr2" value="sub1">sub1</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr2" value="sub2">sub2</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr2" value="sub3">sub3</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr2" value="sub4">sub4</label>
</div>

<div class="radio-inline">
  <label><input type="radio" name="pr2" value="sub5">sub5<br></label>
</div>
<br>
Preference 3:
<div class="radio-inline">
  <label><input type="radio" name="pr3" value="sub1">sub1</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr3" value="sub2">sub2</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr3" value="sub3">sub3</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr3" value="sub4">sub4</label>
</div>

<div class="radio-inline">
  <label><input type="radio" name="pr3" value="sub5">sub5<br></label>
</div>
<br>
Preference 4:
<div class="radio-inline">
  <label><input type="radio" name="pr4" value="sub1">sub1</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr4" value="sub2">sub2</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr4" value="sub3">sub3</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr4" value="sub4">sub4</label>
</div>

<div class="radio-inline">
  <label><input type="radio" name="pr4" value="sub5">sub5<br></label>
</div>
<br>
Preference 5:
<div class="radio-inline">
  <label><input type="radio" name="pr5" value="sub1">sub1</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr5" value="sub2">sub2</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr5" value="sub3">sub3</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="pr5" value="sub4">sub4</label>
</div>

<div class="radio-inline">
  <label><input type="radio" name="pr5" value="sub5">sub5<br></label>
</div>
<br>
<div class="form-group">
	   <label for="z7"><h5 style="color:red;">Percentage:</h5></label>
<input type="text" id="z7" name="b" placeholder="percentage"><br>
</div>
<input type="submit" class="btn btn-primary" name="subm" value="Insert Record">
<input type="submit" class="btn btn-info" name="display" value="Get allocation">
<input type="submit"  class="btn btn-warning" name="delete" value="Refresh">
<input type="submit"  class="btn btn-danger" name="erase" value="Erase all">
</form>

	 
</body>
</html>
<?php
if ($_GET["delete"])
{  
$sqlf = "DELETE FROM nsuballo where pe>0";   
	
$dataf = mysqli_query($conn, $sqlf);




}?>

<?php
if ($_GET["erase"])
{ 
$sqlfaa = "DELETE FROM suballo where Perc>0";   
	
$datafa = mysqli_query($conn, $sqlfaa); 

//$sqlfa = "DELETE FROM nsuballo where pe>0";   
	
//$dataf = mysqli_query($conn, $sqlfa);

}

?>










<?php
if ($_GET["subm"])
{  

$student = $_GET['a'];
$p1 = $_GET['pr1'];
$p2 = $_GET['pr2'];
$p3 = $_GET['pr3'];
$p4 = $_GET['pr4'];
$p5 = $_GET['pr5'];
$per = $_GET['b'];
if($p1=="")
	$p1="na";
if($p2=="")
	$p2="na";
if($p3=="")
	$p3="na";
if($p4=="")
	$p4="na";
if($p5=="")
	$p5="na";
$sql="INSERT INTO suballo VALUES('$student','$p1','$p2','$p3','$p4','$p5','$per')";
$data=mysqli_query($conn,$sql);
	if($data)
		echo "Data inserted";
	else
		echo "Data Not inserted";
	
	
	
	
}
?>
<table border="2">

<?php
if ($_GET["display"])
{  

$sub1count=1;
$sub2count=4;
$sub3count=3;
$sub4count=4;
$sub5count=3;



function name($sub) {
   if($sub=="sub1")
	   return "p";
   if($sub=="sub2")
	   return "q";
    if($sub=="sub3") 
	   return "r";
    if($sub=="sub4")
	   return "s";
    if($sub=="sub5")
	   return "t";
   if($sub=="na")
	   return "u";
}



$sqla = "SELECT * FROM suballo ORDER BY Perc DESC ";
$result = mysqli_query($conn, $sqla);

	


 if (mysqli_num_rows($result) > 0) 
 {
 
	
		
    while($row = mysqli_fetch_assoc($result))
		
		{   
	
		
		$a1=$row["Name"];
			$a2=$row["Pre1"];
			$a3=$row["Pre2"];
			$a4=$row["Pre3"];
			$a5=$row["Pre4"];
			$a6=$row["Pre5"];
			$a7=$row["Perc"];
			
			$sqli="INSERT INTO nsuballo VALUES('$a1','$a2','$a3','$a4','$a5','$a6','$a7')";
       $datar=mysqli_query($conn,$sqli);
	   
 }}   
	   
	   
	   
	   
	   
	   
	   
	   $sqln = "SELECT * FROM nsuballo  ";
$resultn = mysqli_query($conn, $sqln);
 if (mysqli_num_rows($resultn) > 0) 
 {
 
	
		
    while($rown = mysqli_fetch_assoc($resultn))
		
		{  
		$nn=$rown["n"];
	$tra=1;
if($rown["pp1"]!="na" && $tra==1 )
{
	if($rown["pp1"]=="sub1")
		$count=$sub1count;
	if($rown["pp1"]=="sub2")
		$count=$sub2count;
	if($rown["pp1"]=="sub3")
		$count=$sub3count;
	if($rown["pp1"]=="sub4")
		$count=$sub4count;
	if($rown["pp1"]=="sub5")
		$count=$sub5count;
	
	if($count > 0)
	{echo "<tr>";
echo "<td bgcolor='#FF0000'>";
echo $nn ."</td><td bgcolor='#00FF00'>" . $rown[pp1]."</td>";

echo "</tr>";
	$n=name($rown["pp1"]);

	if($n=="p")
		$sub1count--;
	if($n=="q")
		$sub2count--;
	if($n=="r")
		$sub3count--;
	if($n=="s")
		$sub4count--;
	if($n=="t")
		$sub5count--;
	$tra--;
	
	}
	
	
}
	
	

if($rown["pp2"]!="na" && $tra==1 )
{if($rown["pp2"]=="sub1")
		$count=$sub1count;
	if($rown["pp2"]=="sub2")
		$count=$sub2count;
	if($rown["pp2"]=="sub3")
		$count=$sub3count;
	if($rown["pp2"]=="sub4")
		$count=$sub4count;
	if($rown["pp2"]=="sub5")
		$count=$sub5count;
	if($count > 0)
	{	
echo "<tr>";
echo "<td bgcolor='#FF0000'>";
	echo $nn ."</td><td bgcolor='#00FF00'>" . $rown["pp2"]."</td>";

	echo "</tr>";

	$n=name($rown["pp2"]);
	if($n=="p")
		$sub1count--;
	if($n=="q")
		$sub2count--;
	if($n=="r")
		$sub3count--;
	if($n=="s")
		$sub4count--;
	if($n=="t")
		$sub5count--;
	$tra--;
	}	
}
	

if($rown["pp3"]!="na" && $tra==1)
{if($rown["pp3"]=="sub1")
		$count=$sub1count;
	if($rown["pp3"]=="sub2")
		$count=$sub2count;
	if($rown["pp3"]=="sub3")
		$count=$sub3count;
	if($rown["pp3"]=="sub4")
		$count=$sub4count;
	if($rown["pp3"]=="sub5")
		$count=$sub5count;
	if($count > 0)
	{echo "<tr>";
echo "<td bgcolor='#FF0000'>>";
	echo $nn ."</td><td bgcolor='#00FF00'>" . $rown["pp3"]."</td>";

	echo "</tr>";
	$n=name($rown["pp3"]);
	if($n=="p")
		$sub1count--;
	if($n=="q")
		$sub2count--;
	if($n=="r")
		$sub3count--;
	if($n=="s")
		$sub4count--;
	if($n=="t")
		$sub5count--;
	$tra--;
	}
}
	

	
	 if($rown["pp4"]!="na" &tra==1 )
	{if($rown["pp4"]=="sub1")
		$count=$sub1count;
	if($rown["pp4"]=="sub2")
		$count=$sub2count;
	if($rown["pp4"]=="sub3")
		$count=$sub3count;
	if($rown["pp4"]=="sub4")
		$count=$sub4count;
	if($rown["pp4"]=="sub5")
		$count=$sub5count;
	if($count > 0)
	{	
		echo "<tr>";
echo "<td bgcolor='#FF0000'>";
		echo $nn ."</td><td bgcolor='#00FF00'>" . $rown["pp4"]."</td>";
	
		echo "</tr>";
	$n=name($rown["pp4"]);
	if($n=="p")
		$sub1count--;
	if($n=="q")
		$sub2count--;
	if($n=="r")
		$sub3count--;
	if($n=="s")
		$sub4count--;
	if($n=="t")
		$sub5count--;	
	$tra--;
	}	
	}
		
	
if($rown["pp5"]!="na" &tra==1)
	{
		
		if($rown["pp5"]=="sub1")
		$count=$sub1count;
	if($rown["pp5"]=="sub2")
		$count=$sub2count;
	if($rown["pp5"]=="sub3")
		$count=$sub3count;
	if($rown["pp5"]=="sub4")
		$count=$sub4count;
	if($rown["pp5"]=="sub5")
		$count=$sub5count;
	if($count > 0)
	{	echo "<tr>";
echo "<td bgcolor='#FF0000'>";
		echo "".$nn ."</td><td bgcolor='#00FF00'>" . $rown["pp5"]."</td>";
		
		echo "</tr>";
		$n=name($rown["pp5"]);
	if($n=="p")
		$sub1count--;
	if($n=="q")
		$sub2count--;
	if($n=="r")
		$sub3count--;
	if($n=="s")
		$sub4count--;
	if($n=="t")
		$sub5count--;
	$tra--;	
	}	
	}
 if($tra==1){
		echo "<tr>";
echo "<td bgcolor='#FF0000'>";
		echo $nn ."</td><td bgcolor='#00FF00'> "."no course"."</td>" ;
		
		echo "</tr>";
	}
	

		}
 }	
 
 
 //echo $sub1count;
  //echo $sub2count;
  // echo $sub3count;
   // echo $sub4count;
	// echo $sub5count;

 
	
	  
	
   

	
}
?>
</table>



