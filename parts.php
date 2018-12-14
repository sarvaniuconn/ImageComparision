<!DOCTYPE html>
<html>
<head>

	<?php 
	include("connect.php");
	error_reporting(0);
	$FirstImageID= $_COOKIE['a1'];
	$FirstImageResponse=$_POST["Image1"];
	$SecondImageID= $_COOKIE['a2'];
	$SecondImageResponse=$_POST["Image2"];
	$ThirdImageID= $_COOKIE['a3'];
	$ThirdImageResponse=$_POST["Image3"];
	$FourthImageID= $_COOKIE['a4'];
	$FourthImageResponse=$_POST["Image4"];
	$FivthImageID= $_COOKIE['a5'];
	$FivthImageResponse=$_POST["Image5"];
	$SixthImageID= $_COOKIE['a6'];
	$SixthImageResponse=$_POST["Image6"];
	$SeventhImageID= $_COOKIE['a7'];
	$SeventhImageResponse=$_POST["Image7"];
	$EighthImageID= $_COOKIE['a8'];
	$EighthImageResponse=$_POST["Image8"];
	$NinthImageID= $_COOKIE['a9'];
	$NinthImageResponse=$_POST["Image9"];
	$TenthImageID= $_COOKIE['a10'];
	$TenthImageResponse=$_POST["Image10"];
	$EleventhImageID= $_COOKIE['a11'];
	$EleventhImageResponse=$_POST["Image11"];
	$TwelfthImageID= $_COOKIE['a12'];
	$TwelfthImageResponse=$_POST["Image12"];
	$ThirteenthImageID= $_COOKIE['a13'];
	$ThirteenthImageResponse=$_POST["Image13"];
	$FourteenthImageID= $_COOKIE['a14'];
	$FourteenthImageResponse=$_POST["Image14"];
	$FifteenthImageID= $_COOKIE['a15'];
	$FifteenthImageResponse=$_POST["Image15"];


	if (!_POST['submit']) {
		echo "All fields are required!";
	}
	else{

		$sql="INSERT into imagecomparisionresponses(FirstImageID,FirstImageResponse,SecondImageID,SecondImageResponse,ThirdImageID,ThirdImageResponse,FourthImageID,FourthImageResponse,FivthImageID,FivthImageResponse,SixthImageID,SixthImageResponse,SeventhImageID,SeventhImageResponse,EighthImageID,EighthImageResponse,NinthImageID,NinthImageResponse,TenthImageID,TenthImageResponse,EleventhImageID,EleventhImageResponse,TwelfthImageID,TwelfthImageResponse,ThirteenthImageID,ThirteenthImageResponse,FourteenthImageID,FourteenthImageResponse,FifteenthImageID,FifteenthImageResponse)
		values('$FirstImageID','$FirstImageResponse','$SecondImageID','$SecondImageResponse','$ThirdImageID','$ThirdImageResponse','$FourthImageID','$FourthImageResponse','$FivthImageID','$FivthImageResponse','$SixthImageID','$SixthImageResponse','$SeventhImageID','$SeventhImageResponse','$EighthImageID','$EighthImageResponse','$NinthImageID','$NinthImageResponse','$TenthImageID','$TenthImageResponse','$EleventhImageID','$EleventhImageResponse','$TwelfthImageID','$TwelfthImageResponse','$ThirteenthImageID','$ThirteenthImageResponse','$FourteenthImageID','$FourteenthImageResponse','$FifteenthImageID','$FifteenthImageResponse')";

		

		if (mysqli_query($conn,$sql)) {
			echo "";

		}
		else{

			echo "Something went wrong!! Try Later";
		}
	}
	if (isset($_POST['submit']))
    {   
    ?>
<script type="text/javascript">
window.location = "http://localhost/Trail%20website/thankyou.html";
</script>      
    <?php
    }

	 ?>

	<title>Image comparision</title>

</head>
<body>

		<div class="header">
		<b class="logo">Image Comparision Survey</b>
		<br>
		<b class="message">Please take a few minutes to complete this research survey </b>
	</div>
	<br>

    <div id="EntirePage">
	<form action="parts.php" method="POST">
	<div>
		<br>
		<br>
		<p id="MainImageTitle">Main Image 1</p>
	<script type="text/javascript">
		var rn = new Array() 
		while(rn.length < 6)
		{
			var randomnumber = Math.floor(Math.random()*6) + 0;
			if(rn.indexOf(randomnumber) > -1) continue;
			rn[rn.length] = randomnumber;
		}
		document.write('<img  id="MainImage" src="Images - Copy/MainPictures/'+rn[0]+'.jpg"hspace="90">');
	</script>
	</div>
	<br>
	<br>
	<br>
<div>
	<p id="OptionImagesTitle">Option Images</p>

<script type="text/javascript">
	var arr = []
	while(arr.length < 3)
	{
		var randomnumber = Math.floor(Math.random()*3) + 0;
		if(arr.indexOf(randomnumber) > -1) continue;
		arr[arr.length] = randomnumber;
	}
	
	for(j=0;j<3;j++)
	{
	document.write('<img  id="OptionImage1" src="Images - Copy/ComparisionPictures/'+rn[0]+'I'+arr[j]+'.jpg"hspace="90">');
}

var a4=rn[0]+'I'+arr[0];
var a5=rn[0]+'I'+arr[1];
var a6=rn[0]+'I'+arr[2];

document.cookie = "a4 = " + a4
document.cookie = "a5 = " + a5
document.cookie = "a6 = " + a6


</script>

</div>
<div id="RadioButtons">


  <input type="radio" name="Image1" value="Yes" required> Yes
  <input type="radio" name="Image1" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image2" value="Yes" required> Yes
  <input type="radio" name="Image2" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image3" value="Yes" required> Yes
  <input type="radio" name="Image3" value="No" > No
  </div>
  <br>
  <br>



  <div>
  	<p id="MainImageTitle">Main Image 2</p> 
  	<script type="text/javascript">
  		document.write('<img  id="MainImage" src="Images - Copy/MainPictures/'+rn[1]+'.jpg"hspace="90">');
  	</script>
</div>
<br>
<br>
<br>
<div>
	<p id="OptionImagesTitle">Option Images</p>

<script type="text/javascript">

	for(j=0;j<3;j++)
	{
	document.write('<img  id="OptionImage1" src="Images - Copy/ComparisionPictures/'+rn[1]+'I'+arr[j]+'.jpg"hspace="90">');
}

var a1=rn[0]+'I'+arr[0];
var a2=rn[0]+'I'+arr[1];
var a3=rn[0]+'I'+arr[2];

document.cookie = "a1 = " + a1
document.cookie = "a2 = " + a2
document.cookie = "a3 = " + a3


</script>

</div>
  <br>
  <br>

<div id="RadioButtons">


  <input type="radio" name="Image4" value="Yes" required> Yes
  <input type="radio" name="Image4" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image5" value="Yes" required> Yes
  <input type="radio" name="Image5" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image6" value="Yes" required> Yes
  <input type="radio" name="Image6" value="No" > No
  </div>


  <br>
  <br>



  <div>
  	<p id="MainImageTitle">Main Image 3</p> 
  	<script type="text/javascript">
  		document.write('<img  id="MainImage" src="Images - Copy/MainPictures/'+rn[2]+'.jpg"hspace="90">');
  	</script>
</div>
<br>
<br>
<br>
<div>
	<p id="OptionImagesTitle">Option Images</p>

<script type="text/javascript">

	for(j=0;j<3;j++)
	{
	document.write('<img  id="OptionImage1" src="Images - Copy/ComparisionPictures/'+rn[2]+'I'+arr[j]+'.jpg"hspace="90">');
}

var a7=rn[2]+'I'+arr[0];
var a8=rn[2]+'I'+arr[1];
var a9=rn[2]+'I'+arr[2];

document.cookie = "a7 = " + a7
document.cookie = "a8 = " + a8
document.cookie = "a9 = " + a9


</script>

</div>
  <br>
  <br>

<div id="RadioButtons">


  <input type="radio" name="Image7" value="Yes" required> Yes
  <input type="radio" name="Image7" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image8" value="Yes" required> Yes
  <input type="radio" name="Image8" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image9" value="Yes" required> Yes
  <input type="radio" name="Image9" value="No" > No
  </div>


  <br>
  <br>

  <div>
  	<p id="MainImageTitle">Main Image 4</p> 
  	<script type="text/javascript">
  		document.write('<img  id="MainImage" src="Images - Copy/MainPictures/'+rn[3]+'.jpg"hspace="90">');
  	</script>
</div>
<br>
<br>
<br>
<div>
	<p id="OptionImagesTitle">Option Images</p>

<script type="text/javascript">

	for(j=0;j<3;j++)
	{
	document.write('<img  id="OptionImage1" src="Images - Copy/ComparisionPictures/'+rn[3]+'I'+arr[j]+'.jpg"hspace="90">');
}

var a10=rn[3]+'I'+arr[0];
var a11=rn[3]+'I'+arr[1];
var a12=rn[3]+'I'+arr[2];

document.cookie = "a10 = " + a10
document.cookie = "a11 = " + a11
document.cookie = "a12 = " + a12


</script>

</div>
  <br>
  <br>

<div id="RadioButtons">


  <input type="radio" name="Image10" value="Yes" required> Yes
  <input type="radio" name="Image10" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image11" value="Yes" required> Yes
  <input type="radio" name="Image11" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image12" value="Yes" required> Yes
  <input type="radio" name="Image12" value="No" > No
  </div>


  <br>
  <br>
    <div>
  	<p id="MainImageTitle">Main Image 5</p> 
  	<script type="text/javascript">
  		document.write('<img  id="MainImage" src="Images - Copy/MainPictures/'+rn[4]+'.jpg"hspace="90">');
  	</script>
</div>
<br>
<br>
<br>
<div>
	<p id="OptionImagesTitle">Option Images</p>

<script type="text/javascript">

	for(j=0;j<3;j++)
	{
	document.write('<img  id="OptionImage1" src="Images - Copy/ComparisionPictures/'+rn[4]+'I'+arr[j]+'.jpg"hspace="90">');
}

var a13=rn[4]+'I'+arr[0];
var a14=rn[4]+'I'+arr[1];
var a15=rn[4]+'I'+arr[2];

document.cookie = "a13 = " + a13
document.cookie = "a14 = " + a14
document.cookie = "a15 = " + a15


</script>

</div>

  <br>
  <br>

<div id="RadioButtons">


  <input type="radio" name="Image13" value="Yes" required> Yes
  <input type="radio" name="Image13" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image14" value="Yes" required> Yes
  <input type="radio" name="Image14" value="No" > No
  </div>

  <div id="RadioButtons">
  <input type="radio" name="Image15" value="Yes" required> Yes
  <input type="radio" name="Image15" value="No" > No
  </div>


  <br>
  <br>
 

   <div class="wrapper">
  <input type="submit" name="submit" value="Submit">
  </div>
  </div>
<style type="text/css">
#MainImage
{  
	display: block;
	margin: 0 auto; 
	height: 200px; 
	width: 200px; 
}
#MainImageTitle
{
		display: block;
	margin: 0 auto; 
	width: 200px;
	padding-bottom: 25px; 
	padding-left: 100px;
	color: #800000
}

#OptionImage1
{  
	height: 200px;
	width: 200px; 
	padding-bottom: 25px; 
	padding-left: 20px;
}
#OptionImagesTitle
{
		display: block;
	margin: 0 auto; 
	width: 200px;
	padding-bottom: 25px; 
	padding-left: 100px;
	color: #800000
}

.header
{
	text-align: center;
	overflow: hidden;
	background-color: #00FFFF;
	padding: 20px 10px;
	padding-bottom: 25px;
}
.logo
{
	font-size: 30px;
	font-weight: bold;
	color: #404040;
} 
.message
{
	font-style: italic;
	color: #505050;
}

#EntirePage
{
	background-color: #F5F5F5;
	box-sizing: inherit;
	width:1200px;
	margin: 0 auto;
	font-style: italic;
	font-size: 17px;
	color: #505050;
} 

	#RadioButtons
{
	display: inline-block;
	width: 220px;
	padding-left: 170px; 
	padding-bottom: 25px;

}
.wrapper {
    text-align: center;
    border: none;
    color:red;
}

</style>
</form>
</script>
</body>
</html>