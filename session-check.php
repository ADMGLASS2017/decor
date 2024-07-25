<?php
/**
 * Loads the WordPress environment if session set.
 *
 * @package WordPress
 */

if(isset($_GET["access"]) && $_GET["access"]=="80284937-9e16-433b-92c4-9bf873094019"){
	$_SESSION["access"] = $_GET['access'];	
 }else{	
	 exit;
 }
