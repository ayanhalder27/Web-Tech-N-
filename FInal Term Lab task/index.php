<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo $_POST['fullname'];
        
    }
?>

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
        <input type="text" name="fullname" pattern="[A-Za-z]+" required>

        <label>Email Address</label>
        <input type="email" name="email" required>

        <label>Username</label>
        <input type="text" name="username" maxlength="5" required>

        <label>Password</label>
        <input type="password" name="password" minlength="6" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <label>Age</label>
        <input type="number" name="age" min="18" required>

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

        <button type="submit">Register</button>

    </form>
</div>
    
</body>
</html>