<?php
$conn = mysqli_connect("127.0.0.1","root","rootroot",'mydb');
$data = array();
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{      
    $sql = "select * from mydb";
    $result = $conn->query($sql);
    $outp = array();
    while( $rs = $result->fetch_array(MYSQLI_ASSOC)) {
        $outp[] = $rs;
    }
    echo json_encode($outp);
}
?>