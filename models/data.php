<?php

//config
define ('DB_NAME','autotitleconsultant');
define ('DB_HOST','localhost');
define ('DB_USER','atc2017');
define ('DB_PASS', '$$**$$');

 class data{
    //Database Connection Variables 
    protected $db_conn;
    private  $host= DB_HOST;
    private $dbname= DB_NAME;
    private $user= DB_USER;
    private $pass= DB_PASS;
    
    //Database Queries         
    public function __construct(){
    $this->db_conn=new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
    return $this->db_conn;                  
    }
    

    #No Output Query Prep Script FOR ADDS AND EDITS
        public function queryExecute($sql) {
        $dbh = $this->db_conn;
        $sth = $dbh->prepare($sql);
	    $sth->execute();
    }

    #Builds Array Data
    public function arrayBuilder($sql) {
        $dbh = $this->db_conn;
        $sth = $dbh->prepare($sql);
	    $sth->execute();
        foreach($sth as $row){
            $output[] = $row;
        } #END FOREACH
        return $output;
    }
    
    #Array Input Takes Two Parameters the INSERT/EDIT SQL STATEMENT
    #$SQL = SQL STATEMENT - $data - Array of Data FROM CONTROLLER
    public function arrayInsert($sql, $data) {
        $dbh = $this->db_conn;
        $sth = $dbh->prepare($sql);
        $sth->execute($data);
    }
    
    public function singleCell($sql) {
        $dbh = $this->db_conn;
        $sth = $dbh->prepare($sql);
	    $sth->execute();
        $result = $sth->fetchcolumn();
        return $result; 
    }

         /*Directories that contain classes*/







}