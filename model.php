<?php
class model
{
    private $username = "";
    private $password = "";
    private $conn ;
    public function __construct ()
    {
        $this->conection();
        
    }
    public function conection ()
    {

        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=info_user", "viet", "viet12345");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function get_user_by_ID ($id)
    {
        $sql = "SELECT id,hoten,ngaysinh,email,role FROM users ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function authentication($username, $password) {
        $sql = "SELECT id from users where username = '$username' and password = '$password'";
        $stmt = $this->conn->query($sql); 
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0]['id'];
    }
}
?>