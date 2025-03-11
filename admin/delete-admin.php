<?php
    //include constant file
    include('../config/constants.php');

    //get the admin id to be deleted
    $id=$_GET['id'];

    //select SQL query to delete admin
    $sql="DELETE FROM tbl_admin WHERE id=$id";

    //execute querry
    $res=mysqli_query($conn,$sql);

    if($res=true)
    {
        $_SESSION['delete']="<div class='success'>Admin Deleted Successfully</div>";

        //go to manage admin page

        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete']="<div class='error'>Failed to Delete Admin</div>";

        //go to manage admin page

        header('location:'.SITEURL.'admin/manage-admin.php');
    }
?>