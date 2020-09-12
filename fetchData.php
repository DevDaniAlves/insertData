<?php

class Constants{
    
    static $DB_SERVER="localhost";
    static $DB_NAME="demo000";
    static $USERNAME="demo000";
    static $PASSWORD="demo1";
    
    static $SQL_SELECT_ALL="SELECT * FROM upload WHERE id order by id desc";

}

class Fetch {
   
    public function connect(){
        
        $con=new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,Constants::$DB_NAME);
        if($con->connect_error){

            return null;
            
        } else {
            
            return $con;
        }
    }

    public function select() {
        $con=$this->connect();
        
        if($con != null) {
            $result=$con->query(Constants::$SQL_SELECT_ALL);
            
            if($result->num_rows>0){
                $fetch=array();
                
                while($row=$result->fetch_array()){
                    array_push($fetch, array(
                    
                    "id"=>$row['id'],
                    "title"=>$row['title'],
                    
                    ));
                }
                print(json_encode(array_reverse($fetch)));
            } else {
                print(json_encode(array("")));
            }
            $con->close();

        } else {
            print(json_encode(array("")));
        }
    }
}
$fetch=new Fetch();
$fetch->select();