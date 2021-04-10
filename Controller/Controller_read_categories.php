<?php
include_once 'Model/Model_categories.php';
$categ = new categories();
$rows_categorie = $categ->read_categ();
include 'Views/view_categories_admin.php';