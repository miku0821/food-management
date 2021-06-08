<?php
    require_once "database.php";

    class Category extends Database{
        public function addCategory($category_name){
            $sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";

            if($this->conn->query($sql)){
                header("location: ../views/addCategory.php");
                exit();
            }else{
                die("Error inserting Category: ".$this->conn->error);
            }
        }

        public function showCategory(){
            $sql = "SELECT * FROM categories";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0){
                return $result;
            }else{
                return false;
            }
        }
    }