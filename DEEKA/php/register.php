<?php
$user='root';
$pass='';
$db='register';
$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect");
echo "";
?>
<html>
<head>
<style type="text/css">
* {
  margin: 0
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100vh;
  background-color: #6699cc;
}

.container h1 {
  color: white;
  font-family:sans-serif;
  margin: 20px;
}

.registartion-form {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 600px;
  color: rgb(255, 255, 255);
  font-size: 18px;
  font-family: sans-serif;
  background-color: #154a68;
  padding: 20px;
}

.registartion-form input,
.registartion-form select,
.registartion-form textarea {
  border: none;
  padding: 5px;
  margin-top: 10px;
  font-family: sans-serif;
}

.registartion-form input:focus,
.registartion-form textarea:focus {
  box-shadow: 3px 3px 10px rgb(228, 228, 228), -3px -3px 10px rgb(224, 224, 224);
}

.registartion-form .submit {
  width: 100%;
  padding: 8px 0;
  font-size: 20px;
  color: rgb(44, 44, 44);
  background-color: #ffffff;
  border-radius: 5px;
}

.registartion-form .submit:hover {
  box-shadow: 3px 3px 6px rgb(255, 214, 176);
}
</style>
</head>
<body>
   <?php
  if(isset($_POST["b1"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"register");
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$_POST['t3'];
    $d=$_POST['t4'];
    $e=$_POST['t5'];
    $f=$_POST['t6'];
    $g=$_POST['t9'];
    $h=$_POST['t7'];
    $i=$_POST['t8'];

   
  
    $query="INSERT INTO `login` (`First Name`, `Last Name`, `Email`, `Password`, `Confirm Password`, `Phone Number`, `Gender`, `State`, `Language`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')";
    echo " ";
    mysqli_query($link, $query);
    
  }
  ?>
<div class="container">
  <h1>Registration Form </h1>
  <form  method="post" name="registration" class="registartion-form" onsubmit="return formValidation()">
    <table>
     <tr>
     <td>First Name</td>
     <td><input type="text" name="t1" placeholder="first name"></td>
     </tr>
     <tr>
     <td>Last Name</td>
     <td><input type="text" name="t2" placeholder="last name"></td>
     </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="t3" placeholder="your email"></td>
      </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" name="t4" placeholder="password"></td>
    </tr>
    <tr>
    <td>Confirm Password</label></td>
    <td><input type="text"name="t5" placeholder="confirm password"></td>
    </tr>
      <tr>
        <td>Phone Number</td>
        <td><input type="text" name="t6" placeholder="phone Number"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <select name="t9">
            <option value="">select</option>
             <option value="MALE">MALE</option>
              <option value="FEMALE">FEMALE</option>
               <option value="OTHER">OTHER</option>
          </select>
        </td>
      </tr>
      <tr>
      <td>State</td>
      <td>
      <select name="t7">
      <option value="">Select State</option>
     <option value="Andaman Nicobar">Andaman Nicobar</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Dadra Nagar">Dadra Nagar</option>
  <option value="Daman &amp; Diu">Daman &amp; Diu</option>
  <option value="Delhi">Delhi</option>
  <option value="Goa">Goa</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
  <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Lakshadweep">Lakshadweep</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Orissa">Orissa</option>
  <option value="Pondicherry">Pondicherry</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Tripura">Tripura</option>
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Uttaranchal">Uttaranchal</option>
  <option value="West Bengal">West Bengal</option>
      </select>
      </td>
      </tr>
      <tr>
        <td>Language</td>
        <td>
          <select name="t8">
            <option value="">Select language</option>
            <option value="English">English</option>
            <option value="Spanish">Spanish</option>
            <option value="Hindi">Hindi</option>
            <option value="Arabic">Arabic</option>
            <option value="Russian">Russian</option>
          </select>
        </td>
      </tr>
     
      <tr>
        <td colspan="2"><input type="submit" class="submit" value="Register"  name="b1" /></td>
      </tr>
    </table>
  </form>
 

</div>
</body>
</html>