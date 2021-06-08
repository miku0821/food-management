<?php
    require_once "database.php";
    class Food extends Database{
        public function insertFood($food, $date, $category){
            $sql = "INSERT INTO food (food_name, expiration_date, category_id) VALUES ('$food', '$expiration_date', '$category')";

            if($this->conn->query($sql)){
                $category_id = $this->conn->insert_id;
            }
        }
    }