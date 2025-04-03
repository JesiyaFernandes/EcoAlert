<?php
include 'db.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirm_password'];

    
	$sql="INSERT INTO register ('Name','Email','Password','cpassword) 
    VALUES ('$name','$email','$password','$cpassword');";
	if(mysqli_query($con,$sql)){
		echo "<script>alert('data inserted');window.location.href='login.php';</script>";
	}
	else
	{
		echo "<script>alert('Fail to add');window.location.href='register.php';</script>";
	}
}
?>
<head>
    <style>
        /* General Page Styling */
/* General Page Styling */
/* General Page Styling */
/* General Page Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Header Section */
/* Header Styling */
header {
    background-color: #2e7d32; /* Green background */
    padding: 20px 0;
    text-align: center;
    width: 100%;
}

header img {
    width: 80px; /* Adjust logo size */
    height: auto;
}

nav {
    background-color: #3e6b35; /* Darker green for navigation bar */
    padding: 10px 0;
    text-align: center;
}

nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;
    display: inline-block;
}

nav a:hover {
    background-color: #2c5c2f;
    border-radius: 5px;
}

/* Right-aligned Report Environment Link */
.report-link {
    position: absolute;
    top: 20px;
    right: 20px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}

/* Form Container */
.container {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    width: 380px;
    margin-top: 50px; /* Added space below header */
}

/* Form Styling */
h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Submit Button */
button {
    width: 100%;
    padding: 12px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s;
}

button:hover {
    background-color: #218838;
}


    </style>
</head>
<body>
<header>
        <h1>EcoAlert</h1>
        <img src="logo1.jpeg" alt="logo1">
        <marquee behavior="#333" direction="">Report Environmental Harm, Raise Awareness, Make a Difference</marquee>
    </header>
</body>

<form method="POST" action="register.php">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="cpassword" required>
    <button type="submit" name="submit" >Register</button>
</form>
