<?php
// class Db
// {
//     private static $db = null;
//     private static function getDb() {
//         if (self::$db === null) {
//             // Paramètres de configuration DB
//             $dsn = "mysql:host=localhost;port=3306;dbname=step1";
//             $user = "root";
//             $pass = "";
//             // Création de la connexion
//             try {
//                 self::$db = new PDO(
//                     $dsn,
//                     $user,
//                     $pass,
//                     array(
//                         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//                         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//                         PDO::ATTR_PERSISTENT => true
//                     )
//                 );
//             } catch (PDOException $e) {
//                 var_dump($e);
//             }
//         }
//         return self::$db;
//     }

//     public static function query($sql, $params = null) {
//         try {
//             $stmt = self::getDb()->prepare($sql); // requête préparée
//             $stmt->execute($params);
//         } catch (PDOException $e) {
//             var_dump($e);
//         }
//         return $stmt;
//     }

//     public static function select($table)//, $id = null, $active = null)
//     {
//         // $where = "";
//         // $params = [];
//         // if(isset($active)){
//         //     $where = "active = ?";
//         //     $params[] = $active;
//         // }

//         // if (isset($id)) {
//         //     $where .= " AND id=?";
//         //     $params[] = $id;
//         // }

//         // if($where == ""){
//         //     $where = "1";
//         // }

//         // $sql = "SELECT * FROM $table WHERE $where";
//         // $resp = self::query($sql, $params);
//         $reponse = $db->query("SELECT * FROM $table");
//             while($donnees =$reponse->dba_fetch()){
//                 echo '<p>'.$donnees['title'].'</p>'
//             }




//         $insert->execute(array($nom, $prenom, $email));
//         $rows = $resp->fetchAll(PDO::FETCH_ASSOC);
        
//         // if (count($rows) == 0) {
//         //     $rows = null;
//         // }
//         // if (isset($id) && isset($rows)) {
//         //     $rows = $rows[0];
//         // }
//         return json_encode($rows);
//     }
    

//     public static function insert($table, $arrayParams) {
//         $array = [];
//         $condition = "";
//         foreach ($arrayParams as $key => $value) {
//             array_push($array, $value);
//             $condition .= ", ?";
//         }

//         $sql = "INSERT INTO $table VALUES (null".$condition.")";
//         $resp = self::query($sql, $array);
//         return json_encode($resp);
//     }

//     public static function update($table, $arrayParams) {
//         $array = [];
//         $setValues = "";
//         foreach ($arrayParams as $key => $value) {
//             array_push($array, $value);
//             if($key != "id_".$table){
//                 $setValues .= "`$key`=?, ";
//             }
//         }
//         $setValues = substr($setValues, 0, -2);
//         $sql = "UPDATE $table SET $setValues WHERE `id_".$table."`=?";
//         $resp = self::query($sql, $array);
//         return json_encode($resp);
//     }

//     public static function delete($table, $idParams) {
//         $array[] = $idParams;
//         $where = "id_".$table."=?";
//         $sql = "DELETE FROM $table WHERE $where";
//         $resp = self::query($sql, $array);
//         return json_encode($resp);
//     }
// }
class Db{
    // private static $table=

    public static function select($table)//, $id = null, $active = null)
    {

        $db = new PDO('mysql:host=localhost;dbname=step1','root','');
        $reponse = $db->query("SELECT * FROM $table");
        while($donnees =$reponse->fetch()){
        echo '<p>'.$donnees['title'].' '.$donnees['price'].'' . $donnees['description'] .'</p>';
        }
    }
    }

