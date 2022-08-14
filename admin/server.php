<?php include 'config.php';
session_start();

$update = false;
$title = "";
$image = "";
$description = "";
$additional = "";
$category = "";
$priority = "";

if (isset($_POST['submit'])) {
    $admin = mysqli_real_escape_string($conn, $_POST['admin']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM `admin` WHERE admin = $admin And password =$password";
    $data = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($data);

    if ($data) {
        if (($row['admin'] == $admin) && ($row['password'] == $password)) {
            $fetch = mysqli_fetch_assoc($data);
            $_SESSION['admin'] = $row['admin'];

            header('location: home.html');
        } else {
            echo '<script> alert("Wrong user id or password")</script>';
        }
    } else {
        echo '<script> alert("Login Error")</script>';
    }
}



if (isset($_POST['post_btn'])) {
    // $target = "image/".basename($_FILES['image']['name']);

    $title = $_POST['heading'];
    $image = $_FILES['image'];
    $date = date("Y-m-d");
    $time = date("h:i:s");
    $description = $_POST['description'];
    $additional = $_POST['additional'];
    $category = $_POST['category'];
    $priority = $_POST['priority'];

    print_r($title);
    echo "<br>";

    $fileName = $image['name'];
    $tmpname = $image['tmp_name'];

    $fileString = explode('.', $fileName);
    $fstringCovrt = strtolower(end($fileString));

    $fileStrStor = array('png', 'jpg', 'jpeg');
    if (in_array($fstringCovrt, $fileStrStor)) {

        $destinationFile = '../admin/upload/post/' . $fileName;
        move_uploaded_file($tmpname, $destinationFile);

        $query = "Insert INTO `post` (title,date,time,image,description,additional_info,category,priority) values ('$title','$date','$time','$destinationFile','$description','$additional','$category','$priority')";
        $data = mysqli_query($conn, $query);
        header('location: post.php');
    } else {
        echo '<script>alert("There is Problem Uploading Image")</script>';
    }
    if ($data) {
        $_SESSION['message'] = "Record has been saved!";
        // header('location: post.php');
    } else {
        $_SESSION['message'] = "There is a problem Saving information!";
        //  header('location: post.php');
    }

    /* if(move_uploaded_file($_FILES['tmp_name']['name'], $target)){
        $msg = "Image Uploaded successfully";
    }
    else{
        $msg= "There was a problem uploading image";
    } */
}



if (isset($_GET['post_edit'])) {
    $id = $_GET['post_edit'];
    $update = true;
    $query = "SELECT * FROM `post` WHERE id = '$id'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        $row = mysqli_fetch_array($data);



        $title = $row['title'];
        $image = $row['image'];
        $date = $row['date'];
        $time = $row['time'];
        $description = $row['description'];
        $additional = $row['additional_info'];
        $category = $row['category'];
        $priority = $row['priority'];

        //  header('location: team.php');
    }
}



if (isset($_POST['update_post'])) {
    $id = $_POST['id'];
    $title = $_POST['heading'];
    $image = $_FILES['image'];
    $date = date("Y-m-d");
    $time = date("h:i:s");
    $description = $_POST['description'];
    $additional = $_POST['additional'];
    $category = $_POST['category'];
    $priority = $_POST['priority'];



    $fileName = $image['name'];
    $tmpname = $image['tmp_name'];

    $fileString = explode('.', $fileName);
    $fstringCovrt = strtolower(end($fileString));

    $fileStrStor = array('png', 'jpg', 'jpeg');
    if (in_array($fstringCovrt, $fileStrStor)) {

        $destinationFile = '../Admin/upload/post/' . $fileName;
        move_uploaded_file($tmpname, $destinationFile);

        $query = "UPDATE `post` SET image = '$destinationFile' , title = '$title' , date ='$date', time ='$time', description = '$description' , additional_info ='$additional', category ='$category', priority ='$priority' WHERE id ='$id'";
        $data = mysqli_query($conn, $query);
    }

    if ($data) {
        $_SESSION['message'] = "Record has been updated!";
        header('location: post.php');
    } else {
        $_SESSION['message'] = "There is a problem updating information!";
        header('location: post.php');
    }
}
if (isset($_GET['post_delete'])) {

    $id = $_GET['post_delete'];

    $query = "DELETE FROM `post` WHERE id = '$id'";
    $data = mysqli_query($conn, $query);
    if ($data == TRUE) {
        $_SESSION['message'] = "Record has been deleted!";
        header('location: post.php');
    } else {
        $_SESSION['message'] = "There is a problem deleting message!";
        header('location: post.php');
    }
}
