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
                echo $sql['name']; 
            exit();
        }
    }else if(isset($_POST['grosssubmit'])){
        $rollno = $_POST['roll_no'];
        $rollno = mysqli_real_escape_string($conn, $rollno);
        $sql = "Select COUNT(attendance_id) From attendance Where roll_no = '$rollno'";  
        $count = array_count_values($sql);
        $sql = $conn->query($sql);
            $sql = $sql-> fetch_assoc();
            if($sql){
                // echo $sql;
                print_r($count);
            exit();
        }
    }

    
}
?>