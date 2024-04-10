<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
function connectDatabase()
{
    $servername = "localhost";
    $dbname = 'Flight_ticket';
    $username = "root";
    $password = "";

    try {
        // Connect with DB
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $conn;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}


function authenticate($table, $credentials)
{
    $conn = connectDatabase();
    try {
        $email = $credentials['email'];
        $upassword = $credentials['upassword'];
        $sql = $conn->prepare("SELECT `id`,`fname`, `email` FROM `$table` where `email` = '$email' AND `upassword` = '$upassword'");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    } catch (PDOException $ex) {

    }
}




function createUserRecord($submittedData)
{
    $conn = connectDatabase();
    try {
        $fname = $submittedData['fname'];
        $lname = $submittedData['lname'];
        $email = $submittedData['email'];
        $password = $submittedData['upassword'];
        $dob = $submittedData['dob'] ;
        $sql = "INSERT INTO userTable (`fname`,`lname`, `email`, `upassword`, `dob`) VALUES ('$fname','$lname', '$email', '$password', '$dob')";
        $status = $conn->exec($sql);
        return $status;
    } catch(PDOException $ex) {
        return false;
    }
}




// function addticket($ticketdata){

// $conn = connectDatabase();
// try {
    
//         // $fname = $ticketdata['fname'];
//         //  $lname = $ticketdata['lname'];
//        $fname = $ticketdata['fname'];
//         $seat = $ticketdata['seat'];
//         $amount = $ticketdata['amount'];
        
//        print_r($ticketdata);
//         $sql = "INSERT INTO `ticket` (`fname`, `seat`, `amount`) VALUES ('$fname','$seat','$amount')";
//         $status = $conn->exec($sql);
       
//         return $status;

// } catch (PDOException $ex) {
//     return false;
// }

// }

?>