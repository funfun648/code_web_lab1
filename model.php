<?php
class model
{
    private $servername = "";
    private $username = "";
    private $password = "";
    private $conn ;


    
    public function __construct ($servername, $username,$password)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this-> password = $password;
    }



    public function conection ()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=myDB", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    
    public function get_user_by_ID ($id)
    {
        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function authentication($username, $password) {

    }
}
?>