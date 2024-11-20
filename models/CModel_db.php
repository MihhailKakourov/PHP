<?php

class CmodelDB {
    public function GetData() {

        $mysqli = new mysqli('localhost', 'root', '', 'mvc_db');

        $mysqli->set_charset('utf8');

        $query = 'Select * from post';

        $result = $mysqli->query($query);
        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        
        return $arrayResult;
    }
}