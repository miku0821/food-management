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
    <title>Add Categories</title>
    <link rel="stylesheet" href="../assets/css/add_category.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 w-50">
        <h1 class="text-center">Add Categories</h1>
        
        <form action="../actions/addCategory.php" method="post" class="mt-4">
            <div class="form-row">
                <div class="form-group col-md-5 mx-auto">
                    <input type="text" name="category_name" class="form-control">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group col-md-3 mx-auto">
                    <button type="submit" name="add" class="form-control btn btn-info">Add</button>
                </div>
            </div>
        </form>

        <?php
            $category_rows = $category->showCategory();
            if($category_rows == false){
        ?>
            <h3 class="text-center">No Categories</h3>
        <?php
            }else{
        ?>
        
            <table class="table mt-5">
                <thead class="text-center">
                    <tr>
                        <th>Category ID</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody class="text-center">
        
        <?php
                while($category_details = $category_rows->fetch_assoc()){ 
        ?>

                    <tr>
                        <td><?= $category_details['category_id'];?></td>
                        <td><?= $category_details['category_name'];?></td>
                    </tr>
                    
                    <?php
                }
            }
            ?>
                </tbody>
            </table>
    </div>
</body>
</html>