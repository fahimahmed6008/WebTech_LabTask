
<?php
  $isPost=false;
  $username="";
  $password="";
  $gendercheck="";
  $skillcheck="";
  $department="";
 
  
  if(isset($_POST["btn"]))
  {
	  
	  $isPost=true;
	  if($_POST["uname"]!="")
		 $username=$_POST["uname"];
	 
	 else if($_POST["pass"]!="")
	  $password=$_POST["pass"];
  
   else if($_POST["gender"]!="")
	  $gendercheck=$_POST["gender"];
  
    else if($_POST["skill"]!="")
		$skillcheck=$_POST["skill"];
	
	else if ($_POST["dept"]!="")
		$department=$_POST["dept"];
     
	
  }
?>






<form action="#" method="POST">

Username:<input type="text" id= "uname" name="uname" >
<?php
if($isPost=true && $username=="")
echo "<span style='color:red;'><small>Required</small></span>"
?>
<br><br>

Password:<input type="password" id= "pass" name="pass" >
<?php
if($isPost=true && $password=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>
<br><br>

Gender:<input type="radio" name="gender" value="male">Male 
<input type="radio" name="gender" value="male">Female
<?php
if($isPost=true && $gendercheck=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>

 <br><br>

Skills:<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="Java">Java
<input type="checkbox" name="skills[]" value="C#">C#
<?php
if($isPost=true && $skillcheck=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>

<br><br>
Department:<select name="dept">
<option value="cse">CSE</option>    
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select>

<?php
if($isPost=true && $department=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>

<br><br>
Submit:<input type="submit" name="btn" value="click">

</form>