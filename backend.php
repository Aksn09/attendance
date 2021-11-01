<?php
    if($_POST){
        // require $_SERVER['DOCUMENT_ROOT'] . '/connection.php';
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
        }else if(isset($_POST['attensubmit'])){
                $roll = $_POST['roll_no'];
                $roll = mysqli_real_escape_string($conn, $roll);
                $sql = "Select date, presence From attendance Where roll_no = '$roll'";  
                $sql = $conn->query($sql);
                $sql = $sql-> fetch_assoc();
                while ($sql) {
                    echo $sql['date'] . "  ---  " . $sql['presence'];
                exit();
                }
        }else if(isset($_POST['findatten'])){
            $varroll = $_POST['roll_no'];
            $vardate = $_POST['datetime'];
            $sql = "Select * from attendance where date = '$vardate' and roll_no = '$varroll'";
            $sql = $conn->query($sql);
            $sql = $sql-> fetch_assoc();
            while ($sql) {
                echo $sql['presence'];
            exit();
            }
        }else if(isset($_POST['findstr'])){
            $vardate1 = $_POST['datetime'];
            $sql = "Select SUM(presence) from attendance where date = '$vardate1'";
            $sql = $conn->query($sql);
            $sql = $sql-> fetch_assoc();
            while ($sql) {
                echo $sql['SUM(presence)'];
            exit();
            }
        }else if(isset($_POST['avgatten'])){
            $varroll2 = $_POST['roll_no'];
            $sql = "Select AVG(presence) from attendance where roll_no = '$varroll2'";
            $sql = $conn->query($sql);
            $sql = $sql-> fetch_assoc();
            while ($sql) {
                echo $sql['AVG(presence)'];
            exit();
            }
        }
}
?>