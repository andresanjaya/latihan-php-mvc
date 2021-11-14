<?php
class Blog_model {
    private $dbh; //database handler
    private $stmt;
    
    public function __construct() {
        //data source name
        $dsn = 'mysql:host=127.0.0.1;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, "root","");
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAllBlog() {
        $this->stmt = $this->dbh->prepare("SELECT * FROM blog");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 }
?>