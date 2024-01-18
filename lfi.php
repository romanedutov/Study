<?php
 
$page = $_REQUEST['page'];
if (isset($page)) {
   include($page . ".php");
} else {
   include("index.php");
}
?>
