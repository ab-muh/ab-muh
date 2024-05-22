<!DOCTYPE html>
<html>
<?php include 'header.php' ?>
<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
include('serverconfig.php');
        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO advocate VALUES ('$name','$gender','$address')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$name\n "
                . "$gender\n $address\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
