<?php
    class Manufaceture extends Db{
        public function getAllManu()
        {
            $sql = self::$connection->prepare("SELECT * FROM hangsanxuat");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        
    }
?>