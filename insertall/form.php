<?php
include 'upload.php';
echo "<pre>";
$connection=mysqli_connect("localhost",'root','','breeze');
print_r($_POST);

insert_all($connection,'categories', $_POST);

?>

<form action="" method="POST">
    <input type="text" name="name" placeholder="name" id="">
    <br>
    <input type="text" name="age" placeholder="name" id="">
    <br>
    <input type="text" name="address" placeholder="name" id="">
    <br>
    <input type="text" name="class" placeholder="name" id="">
    <br>
    <br>
    <button type="submit">submit</button>
</form>