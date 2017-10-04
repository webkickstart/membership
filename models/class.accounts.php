<?php
class accounts extends data {


# Still needs functions to Create New Accounts, Delete old and unused Accounts, Edit Existing Accounts
# Still needs functions built to  track and maintain an affilate system to increase sales and marketing efforts

##################################################################################

        function __consturct() {
           $this->getAccountID($user);
           $this->getAccountAccess($user);
        } #constructor not used

        #PROCESS USER LOGIN  (FROM MAIN LOGIN FORM)     
        function processLogin($user, $password){
        $sql = "SELECT count(*) as Total FROM accounts WHERE username = '$user' && password = '$password'";
        $result = $this->singleCell($sql);
        
             #SUCCESSFUL LOGIN
                if($result==1) {
                    $_SESSION['user_id'] = $this->getAccountID($user);  
                    $_SESSION['access_level'] = $this->getAccountAccess($user);
                #UNSUCCESSFUL LOGIN
                } else {
                    echo "<script>alert('Username and Password did not match our records')</script>";
                       }
               // return $result;
        }#END FUNCTION processLogin();

        function getAccountID($user){
            $sql = "SELECT user_id FROM accounts WHERE username = '$user'";
            return $this->singleCell($sql);
        } #END FUNCTION getAccountID (Sets Account ID Equal to the userID);
          #This function gets called by processLogin() to set the session variable to the users account number;

        function getAccountAccess($user){
            $sql = "SELECT access_level FROM accounts WHERE username = '$user'";
            return $this->singleCell($sql);
        } #END FUNCTION getAccountID (Sets Account ID Equal to the userID);
          #This function gets called by processLogin() to set the session variable to the users account number;

          #this function is used to draw the admin panel
          function showAllAccounts(){
             $sql = "SELECT * FROM accounts";
             return $this->arrayBuilder($sql);
          }#END FUNCTION

          #This function adds a new account to the database
          function addAccount($data){
               $sql = "INSERT INTO accounts (username, password, access_level, dealer, address,
                                            city, st, zip, phone, doc_link, token) 
                                      VALUES (?,?,?,?,?,?,?,?,?,?,?)" ;
               $this->arrayInsert($sql, $data);
          }

         public function selectNewAccount() {
            $sql="SELECT * FROM accounts ORDER BY account_id  DESC LIMIT 1";
            return $this->arrayBuilder($sql);
         }

         public function unitCount($currentRecord) {
            $sql ="SELECT count(unit_account) as totals FROM units WHERE unit_account = $currentRecord";
            return $this->singleCell($sql);
         }

    
} #END CLASS accounts
?>