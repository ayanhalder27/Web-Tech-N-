<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>

    <form action="index.php" method="POST">

        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email Address</label>
        <input type="email" name="email" required>

        <label>Username</label>
        <input type="text" name="username"  required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <label>Age</label>
        <input type="number" name="age" required>

        <label>Gender</label>
        <div class="gender">
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female"> Female</label>
        </div>

        <label>Course</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option value="Java">java</option>
            <option value="c#">C#</option>
            <option value="web">Web Technologies</option>
        </select>

        <label>
            <input type="checkbox" name="terms" required>
            I agree to the Terms & Conditions
        </label>

        <button type="submit" name="submit">Register</button>

    </form>
</div>

<?php
if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $course = $_POST['course'] ?? '';
    $terms = isset($_POST['terms']) ? 'Accepted' : 'Not Accepted';

    if(!preg_match("/^[A-Za-z ]+$/", $fullname)){
        echo "enter a valid name";
    }

    else if(strpos($email, "@") != false || strpos($email, ".com")){
        echo "enter a valid email";
    }
    
    else if($password !== $confirm_password){
        echo "<p style='color:red;'>Passwords do not match!</p>";
    }
    
    else if(strlen($username)<5){
        echo "Username must be atleast 5 characters";
    }
    
    else if(strlen($password)<6){
        echo "Password must be atleast 6 characters";
    }
    
    else if($password !== $confirm_password){
        echo "Password did not match";
    }
    
    else if($age < 18){
        echo "Minimum age must be 18";
    }
    
    else {

        echo "<h3>Registration Successful</h3>";
        echo "Full Name: $fullname <br>";
        echo "Email: $email <br>";
        echo "Username: $username <br>";
        echo "Age: $age <br>";
        echo "Gender: $gender <br>";
        echo "Course: $course <br>";
        echo "Terms: $terms <br>";
    }
}
?>

    
</body>
</html>