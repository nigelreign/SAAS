<?

require_once "functions/database_connection/connect.php";
require_once "functions/session.php";


$query = DB::query("SELECT * FROM schools where id=%i", $_GET['id']);
foreach ($query
         as $school)

$_SESSION['database_user'] = $school['database_user'];
 $_SESSION['database_password']= $school['database_password'];
$_SESSION['database_name']= $school['database_name'];

$_SESSION['school_name'] = $school['school_name'];

header("Location: ../main");

?>