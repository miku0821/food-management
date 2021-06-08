<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 w-50">
        <h1>What did you buy?</h1>
        <form action="../actions/addFood.php" method="post">
            <div class="form-row mt-3">
                <div class="form-group">
                    <label for="food">Food</label>
                    <input type="text" name="food" id="food" class="form-control" placeholder="Banana">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group">
                    <label for="date">Expiration Date</label>
                    <input type="date" name="expiration_date" id="date" class="form-control">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" class="form-control">
                </div>
            </div>
        </form>
    </div>
</body>
</html>