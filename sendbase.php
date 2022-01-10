<?php
include 'baseconnect.php';
if(isset($_GET['function']))
    if($_GET['function'] == 'add') {
    $addbase = "INSERT INTO `pricelist` (`serialNum`, `Name`, `Type`, `Material`, `Color`, `Price`)
    VALUES (NULL, NULL, NULL, NULL, NULL, NULL)";
    $conn -> query($addbase);
    $ids = mysqli_query($conn,"SELECT * FROM `pricelist`");
    $ids = mysqli_fetch_all($ids);
    echo (json_encode($ids)); 
    }
    if($_GET['function'] == 'del') {
        $id = $_GET['id'];
        $delbase = "DELETE FROM `pricelist` WHERE `pricelist`.`id` = $id";
        $conn -> query($delbase);
    }
    if($_GET['function'] == 'edit') {
        $row = $_GET['row'];
        $eid = $_GET['eid'];
        $editbase = "UPDATE `pricelist` SET `serialNum` = '$row[0]', `Name` = '$row[1]', `Type` = '$row[2]', `Material` = '$row[3]', `Color` = '$row[4]', `Price` = '$row[5]' WHERE `pricelist`.`id` = $eid;";
        $conn -> query($editbase);
        echo("Данные успешно введены");
    }
    if($_GET['function'] == 'login'){
        $user = $_GET['inpUname'];
        $pass = $_GET['inpPass'];
        $testADMIN = mysqli_query($conn, "SELECT * FROM `accounts` WHERE `login` = '$user'");
        $testADMIN = mysqli_fetch_all($testADMIN); 
        if ($testADMIN[0][2] == $pass){
            echo (1);
        }
        else{
            echo (0);
        }  
    }
?>