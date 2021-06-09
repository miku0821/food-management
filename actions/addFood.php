<?php
    include "../classes/food.php";

    $food_name = $_POST['food'];
    $shopping_date = $_POST['shopping_date'];
    $expiration_date = $_POST['expiration_date'];
    $category = $_POST['category'];

    $food = new Food;
    $food->insertFood($food_name, $shopping_date, $expiration_date, $category);