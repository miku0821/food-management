<?php
include "../classes/category.php";
$category = new Category;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>
    <link rel="stylesheet" href="../assets/css/add_food.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 w-50">
        <h1>What did you buy?</h1>
        <div class="form">
            <form action="../actions/addFood.php" method="post">
                <div class="form-row mt-3">
                    <div class="form-group col-md-8 mx-0">
                        <label for="food_name">Food</label>
                        <input type="text" name="food" id="food" class="form-control">
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-md-4 mx-0">
                        <label for="date_bought">Shopping Date</label>
                        <input type="date" name="shopping_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4 mx-0">
                        <label for="expiration_date">Expiration Date</label>
                        <input type="date" name="expiration_date" id="date" class="form-control">
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-md-8 mx-0">
                        <label for="category">Select list:</label>
                        <select class="form-control" name="category" id="category">
                            <option hidden>Select Category</option>
                            <?php
                                $category_rows = $category->showCategory();
                                while($category_details = $category_rows->fetch_assoc()){
                            ?>
    
                            <option value="<?= $category_details['category_id'];?>"><?= $category_details['category_name'];?></option>
                            
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-md-3 mx-auto">
                        <button name="add" class="btn btn-success form-control">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>