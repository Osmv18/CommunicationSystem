<?php

include 'Model/Model_publicacion.php';

if ($_POST) 
{
    $form = new publications($_POST['title'], $_POST['fecha'], $_POST['multimedia'], $_POST['fk_id_category'], $_POST['description'], $_POST['fk_id_admin']);
    $form->create();

    include"View/View_correct.php";
}

else {
    include "View/View_error_publication.php";
}