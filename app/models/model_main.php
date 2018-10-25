<?php

class Model_main extends Model{

    function SqlInsert($sql_param = array()){
        global $mysqli;

        $SqlInsert = $mysqli->prepare("INSERT INTO `adress` (`name`, `city`, `area`, `street`, `house`, `comment`) VALUES (?, ?, ?, ?, ?, ?);");
        $SqlInsert->bind_param('ssssss', $adress, $city, $area, $street, $num, $comment);
        $adress = $mysqli       ->  real_escape_string($sql_param['adress']);
        $city = $mysqli         ->  real_escape_string($sql_param['city']);
        $area = $mysqli         ->  real_escape_string($sql_param['area']);
        $street = $mysqli       ->  real_escape_string($sql_param['street']);
        /* номер домапринудительно строкой, т.к. если вставлять пустой  int, то в БД сохраняется значение 0*/
        (string)$num = $mysqli  ->  real_escape_string($sql_param['num']);
        $comment = $mysqli      ->  real_escape_string($sql_param['comment']);

        $SqlInsert->execute();
    }

    function SqlSelect(){
        global $mysqli;

        $SqlSelect = "SELECT * FROM `adress`";
        $result = $mysqli->query($SqlSelect);

        return $result;
    }
}