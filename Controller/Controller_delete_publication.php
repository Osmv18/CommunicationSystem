
<?php
include "Model/Model_publication.php";
$delete_publication = new publications();
$delete_publication->delete($_GET['id_publication']);
$rows = $delete_publication->delete();
include 'Views/view_products_admin.php';