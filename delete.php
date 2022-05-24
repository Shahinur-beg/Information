<?php
session_start();
include("connect.php");
$result = "DELETE FROM details WHERE id='" . $_GET["userid"] . "'";
if (mysqli_query($sqli, $result)) {
    header("refresh: 1; url = alldata.php");
} else {
    echo "Error deleting record: " . mysqli_error($sqli);
}
?>