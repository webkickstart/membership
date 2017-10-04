<h1>Admin Panel</h1>
<h4>Add New User</h4>
        <form method="post" action="controllers/newAccount.php">
        Email: <input type="text" name="username" />&nbsp;&nbsp;
        Password:<input type="text" name="password" />&nbsp;&nbsp;
        <input type="submit" value="Add Account" />
        </form><br /><a href="/controllers/logout.php">Logout</a><hr /><br />

<?php
$showAccounts =  new accounts();
$accounts = $showAccounts->showAllAccounts();
echo "<table>";
echo   "<th>User Name</th>
        <th>Password</th>
        <th>Access Level</th>";

foreach($accounts as $account){
    echo "</tr>";
    echo "<td>".$account['username']."</td>";
    echo "<td>".$account['password']."</td>";
    echo "<td>".$account['access_level']."</td>";
    echo "<td><a href=''>Edit</a></td>";
    echo "<td><a href=''>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

?>


<?php
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>