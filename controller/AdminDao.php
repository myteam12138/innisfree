<?php
    require_once('../model/AdminService.php');
    //划分任务
    $admin = new AdminService();

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $admin->adminlogin($name,$pwd);
?>