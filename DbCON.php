<?php
include 'config.php';
header('Content-type: application/json');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$author = filter_var ($_GET['author'], FILTER_SANITIZE_STRING);
$tekst = filter_var ($_POST['tekst'], FILTER_SANITIZE_STRING);
$title = filter_var ($_GET['title'], FILTER_SANITIZE_STRING);
$delete = filter_var ($_GET['delete'], FILTER_SANITIZE_STRING);
$update = filter_var ($_GET['update'], FILTER_SANITIZE_STRING);
$select = filter_var ($_GET['select'], FILTER_SANITIZE_STRING);
$result =mysqli_fetch_assoc($conn, $sql);


//sql to create a record 

if($title == TRUE){
$sql = "INSERT INTO enzo (title, author, tekst)
VALUES ('$title', '$author', '$tekst')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
} }


// sql to delete a record

if ($delete == TRUE){
    $sql = "DELETE FROM enzo WHERE title = '$delete'";
    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
    }

    //update data

    if ($update == TRUE) { 
    $sql = "UPDATE enzo SET tekst='$tekst' where title='$update'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    }
    

    // Return to JSON

    if ($select === "all"){
        $sql = "SELECT title, author, tekst FROM enzo";
        $result = $conn->query($sql);
    
        $json_array = array();
    
        while ($row = mysqli_fetch_assoc($result)){
            $json_array[] = $row;
        }
    
        echo json_encode($json_array);
    } elseif ($select == TRUE) {
        $sql = "SELECT title, author, tekst FROM enzo WHERE Title = '$select'";
        $result = $conn->query($sql);
    
        $json_array = array();
    
        while ($row = mysqli_fetch_assoc($result)){
            $json_array[] = $row;
        }
    
        echo json_encode($json_array);
    }




$conn->close();


?>