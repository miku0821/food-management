<?php
    require_once "database.php";
    class Food extends Database{
        public function insertFood($food_name, $shopping_date, $expiration_date, $category){
            $sql = "INSERT INTO foods (food_name, shopping_date, expiration_date, category_id) VALUES ('$food_name', '$shopping_date', '$expiration_date', '$category')";

            if($this->conn->query($sql)){
                header("location: ../views/addFood.php");
                exit;
            }else{
                die("Error inserting food data ".$this->conn->error);
            }
        }
    }