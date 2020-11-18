<?php

class Db{
    private static $db = null;
    private static function getDb()
    {
        if (self::$db === null) {
            // Paramètres de configuration DB
            // $dsn = "mysql:host=localhost;port=3308;dbname=db_demoproject";
            // $user = "7psXVM7xBQAHegj8";
            // $pass = "5ig4Pl1gdGoc37DX";
            $dsn = "mysql:host=localhost;port=3306;dbname=step1";
            $user = "root";
            $pass = "";
            
            
            // Création de la connexion
            try {
                self::$db = new PDO(
                    $dsn,
                    $user,
                    $pass,
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_PERSISTENT => true
                    )
                );
            } catch (PDOException $e) {
                //var_dump($e);
            }
        }
        return self::$db;
    }


    private static $stmt = null;
    public static function query($sql)//,// $params = null)
    {
        $result = false;
        try {
            $stmt = self::getDb()->query($sql); // requête préparée
            // Db::$stmt = $stmt;
            // $result = $stmt->execute($params);
        } catch (PDOException $e) {
            //var_dump($e);
        }
        return  $stmt;// $result;
    }


    public static function select($table)//, $id = null, $active = null)
    {

        // $db = new PDO('mysql:host=localhost;dbname=step1','root','');
        $sql="SELECT * FROM $table";
        $resp = self::query($sql, $params);
        while($donnees =$resp->fetch()){
        echo '<p>'.$donnees['title'].' '.$donnees['price'].'' . $donnees['description'] .'</p>';
        }
    }

    // public static function select($table)//, $id = null, $active = null)
    // {

    //     $db = new PDO('mysql:host=localhost;dbname=step1','root','');
    //     $reponse = $db->query("SELECT * FROM $table");
    //     while($donnees =$reponse->fetch()){
    //     echo '<p>'.$donnees['title'].' '.$donnees['price'].'' . $donnees['description'] .'</p>';
    //     }
    // }
    }
    

