<?php
    include "../classes/category.php";

    $category_name = $_POST['category_name'];

    $category = new Category;
    $category->addCategory($category_name);