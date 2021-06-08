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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 w-50">
        <h1>Add Categories</h1>
        
        <form action="../actions/addCategory.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" name="category_name" class="form-control">
                </div>
                <div class="form-group col-md-3">
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
                while($category_details = $category_rows->fetch_assoc()){ 
        ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $category_details['category_id'];?></td>
                        <td><?= $category_details['category_name'];?></td>
                    </tr>
                </tbody>
            </table>
        
        <?php
                }
            }
        ?>
    </div>
</body>
</html>