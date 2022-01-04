<?php
    include 'models/Dbconfig.php';
    $db = new Database();
    $db->connect();
    include 'view/header.php';
    //include 'view/home.php';
    if (isset($_GET['controller'])) {
		include('Route/web.php'); /*xử lý các request trong Route/web.php*/
	} else {
		require 'View/follow.php'; /*require giao diện trang chủ*/
	}

    include 'view/footer.php';
?>