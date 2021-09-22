<?php
function get_alldetails()
{
	include 'mechanical_admin/config.php';
	$fetchs = "SELECT * FROM tbl_general_details";
	$run = mysqli_query($con,$fetchs);
	$row = mysqli_fetch_assoc($run);
	return $row;
}

//fetch brands
function fetch_brands(){
	include 'mechanical_admin/config.php';
	$fetchs = "SELECT * FROM tbl_make ORDER BY id DESC";
	$run = mysqli_query($con,$fetchs);
	$all_brand = [];
	while ($row = mysqli_fetch_assoc($run)) {
		$all_brand[] = $row;
	}
	return $all_brand;
}

//fetch categories
function fetch_categories(){
	include 'mechanical_admin/config.php';
	$fetchs = "SELECT * FROM tbl_category ORDER BY id DESC";
	$run = mysqli_query($con,$fetchs);
	$all_category = [];
	while ($row = mysqli_fetch_assoc($run)) {
		$all_category[] = $row;
	}
	return $all_category;
}

?>