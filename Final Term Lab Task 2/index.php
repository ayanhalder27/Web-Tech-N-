<?php
    function insert($name, $email, $registration_no, $dept){
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "test";

        $con = mysqli_connect($server, $username, $password, $database);
        
        if(!$con){
            die("connection failed due to". mysqli_connect_error());

        }

        $sql = "INSERT INTO `students` (`NAME`, `EMAIL`, `REGISTRATION_NO`, `DEPARTMENT`) VALUES ('$name', '$email', '$registration_no', '$dept')";


        if($con->query($sql) == true){
            echo "Successfully inserted";
        }
        else{
            echo "Error";
        }

        mysqli_close($con);
    }

    function read(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "test";

        $con = mysqli_connect($server, $username, $password, $database);

        if(!$con){
            die("connection failed due to". mysqli_connect_error());

        }

        $sql = "SELECT * FROM STUDENTS";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>".$row['ID']."</td>
                        <td>".$row['NAME']."</td>
                        <td>".$row['EMAIL']."</td>
                        <td>".$row['REGISTRATION_NO']."</td>
                        <td>".$row['DEPARTMENT']."</td>
                        <td><a href='index.php?edit_id=".$row['ID']."'>Edit</a></td>
                        <td><a href='index.php?delete_id=".$row['ID']."'>Delete</a></td>
                     </tr>";
            }
        }

        mysqli_close($con);
    }

    function delete($id){
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "test";

        $con = mysqli_connect($server, $username, $password, $database);

        if(!$con){
            die("connection failed due to". mysqli_connect_error());

        }

        $sql = "DELETE FROM STUDENTS WHERE ID = $id;";

        if($con->query($sql) == true){
            echo "Successfully deleted";
        }
        else{
            echo "Error";
        }

        mysqli_close($con);
    }

    if(isset($_POST['insert'])){
        insert($_POST['name'], $_POST['email'], $_POST['registration_no'], $_POST['dept']);
    }

    if(isset($_GET['delete_id'])){
        delete($_GET['delete_id']);
    }

    if(isset($_GET['edit_id'])){
        
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <label>Name </label>
        <input type="text" name="name" required> <br>
        <label>Email </label>
        <input type="email" name="email" required> <br>
        <label>Registration no </label>
        <input type="text" name="registration_no" required><br>
        <label>Department</label>
        <select name="dept">
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
        </select><br>
        <button name="insert">Insert</button>
        <button name="update">Update</button>
        <button name="delete">Delete</button>
    </form>

    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registration No</th>
            <th>Department</th>
        </tr>
        <?php 
            read();
        ?>
    </table>
</body>
</html>