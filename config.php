<?php


class database

{

    protected $database_name = "reactor";
    protected $db_password = "root";
    protected $host = "localhost";
    protected $user_name = "root";
    protected $con;
    protected $error;


}


class connect extends database
{
    public function __construct()

    {
        $this->connection();
    }

     private function connection ()
    {
       $con = $this->con = new mysqli($this->host,$this->user_name,$this->db_password,$this->database_name);
        if($con)
        {
            echo "Connection Succesfully";
        }

        else
        {
            $this->con->error;
        }

    }


    public function insert($insert)
    {
        $result = $this->con->query($insert);
        if($result)
        {
            echo "Data Inserted";

        }
    }




    public function update($update)
    {
        $result = $this->con->query($update);
        if($result)
        {
            echo "Data Updated";

        }
    }


    public function delete($delete)
    {
        $result = $this->con->query($delete);
        if($result)
        {
            echo "Data Deleted";

        }
    }




}

$con = new connect();
