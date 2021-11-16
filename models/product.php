<?php
    class Product extends Db
    {
        public function getAllProducts()
        {
            $sql = self::$connection->prepare("SELECT * FROM sanpham");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM sanpham WHERE id = ?");
            $sql->bind_param("i",$id);

            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductByManu($manu_id)
        {
            $sql = self::$connection->prepare("SELECT * FROM sanpham WHERE `mahang` = ?");
            $sql->bind_param("i",$manu_id);

            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function search($keyword)
        {
            $sql = self::$connection->prepare("SELECT * FROM sanpham WHERE `ten` LIKE ?");
            $keyword = "%$keyword%";
            $sql->bind_param("s",$keyword);

            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>