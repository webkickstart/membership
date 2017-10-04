<h1>Webkickstart Login System </h1>



    <div id="login">
    <!-- This PHP checks if the user is logged into the session -->
    <?php if(!isset($_SESSION[user_id])){ ?>
         <form name="login" method="post" action="./controllers/process_login.php">
            User Name:<input type="text" name="username"></input><br /><br/>
            Password:&nbsp;&nbsp;&nbsp;<input type="text" name="password"></input><br>
            <input type="submit" value="login">           
         </form>




      <br /><br />   
This system is a basic drop in membership system that is customized and utilizes a 
google sheets system to manage the accounts. This is perfect for a low volume customer
that needs to have spreadsheet data available to user accounts. This system could be utilized 
for other purposes such as marketing freebies, securing database data and general accounts management.
<br /><br />

This system leverages php sessions for secure logins and is deployable and customizable very quickly.
This system does rely on front end designer knowing how to create and execute template programming but allows
for ultimate flexibility and extenability.
<br /><br />

         <h3>This Registration Screen can be a seperate view</h3>


    <form method="post" action="/controllers/new_user.php">
        <table>
        
        <tr><td>Email: </td><td><input type="text" name="username"></input></td></tr>
        <tr><td>Password: </td><td><input type="text" name="password"></input></td></tr>
        <tr><td>Confirm Password: </td><td><input type="text" name="cpassword"></input></td></tr>
        <tr><td><input type="submit" value="Register Now"></input></td><td></td></tr>
        </table>
        </form>


    <?php } else { ?>
        <a href="./controllers/logout.php">Logout</a>
        <?php } ?>  
    </div>

