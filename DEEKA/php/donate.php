<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body {
  background: url('images2/donate-banner.jpg') no-repeat 0px 0px;
  background-size: cover;
  font-family: "Roboto";
  
}

.form {
  position: absolute;
  top: 50%;
  left: 73%;
  background: #fff;
  height: 50%;
  width: 25%;
  margin: -220px 0 0 -220px;
  padding: 40px;

  box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
}
.form h2 {
  margin: 0 0 20px;
  line-height: 1;
  color: #44c4e7;
  font-size: 25px;
  font-weight: 900;

}
.form input {
  outline: none;
  display: block;
  width: 100%;
  margin: 0 0 20px;
  padding: 10px 15px;
  border: 1px solid #ccc;
  color: #ccc;
  font-family: "Roboto";
  box-sizing: border-box;
  font-size: 14px;
  font-wieght: 400;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transition: 0.2s linear;
}
.form inputinput:focus {
  color: #333;
  border: 1px solid #44c4e7;
}
.form button {
  cursor: pointer;
  background: #44c4e7;
  width: 100%;
  padding: 10px 15px;
  border: 0;
  color: #fff;
  font-family: "Roboto";
  font-size: 14px;
  font-weight: 400;
  margin-top: 10px;
}
.form button:hover {
  background: #369cb8;
}
.error,
.valid {
  display: none;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
	</style>
 
</head>
<body>
	<section class="form animated flipInX">
  <h2>PLEASE DONATE</h2>
  
  <form action="" method="post" >
    <input placeholder="Enter Your Name" type="text" id="username" name="name" required></input>
    <input placeholder="Email" type="text" id="password" name="email" required></input>
    <input placeholder="Contact NO" type="text" id="contact" name="contactno" required></input>
    <input placeholder="Enter Amount" type="text" id="amount" name="price" ></input>
<button id="submit" name="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Donate</button>
</form>
</section>







</body>
</html>