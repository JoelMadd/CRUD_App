<?php
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMPLE CRUD</title>
</head>
<body>
    <h1>My subjects</h1>
    <a href = "form/addform.php">Add subject</a><br/><br/>
    <table width = '100%' border= 1>
        <tr bgcolor= '#CCCCCC'>
            <td>ID</td>
            <td>Subject code</td>
            <td>Subject name</td>
            <td>Action</td>
        </tr>
        <?php
            while($res = mysqli_fetch_array($result)) {
                echo "<tr>"
                echo "<td>".$res['subject_id']."</td>";
                echo "<td>".$res['subject_code']."</td>";
                echo "<td>".$res['subject_name']."</td>";
                echo "<td><a href=\"forms/editform.php?id=$res[subject_id]\">Edit</a> |
                        <a href=\"functions/delete.php?id=$res[subject_id]\"
                        onClick=\"return confirm('Are you sure you want to delete')\">Delete</a></td>";
            }

        ?>


    </table>
</body>
</html>