<?php
    if($_POST){
        require 'connection.php';
        $conn = connect_db();
        if(isset($_POST['rollsubmit'])){
            $rollno = $_POST['roll_no'];
            $rollno = mysqli_real_escape_string($conn, $rollno);
            $sql = "Select * From students Where roll_no = '$rollno'";  
            $sql = $conn->query($sql);
            $sql = $sql-> fetch_assoc();
            if($sql){
                echo "<p>Hey! " . $sql['name']; 
            exit();
            }
        }
}
?>