<?php 
class databases{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'op';
    
    protected $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }else{
            	        echo 'Database connected';
            }            
        }    
        return $this->connection;
    }
    function get_data($query) {
    	$return = $this->connection->query($query);
    	return $return;
    }
}

?>