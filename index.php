<?php //phpinfo(); ?>

<?php
try {
	$conn = new PDO ( \"sqlsrv:server = tcp:drjtest-helix-sql1.database.windows.net,1433; Database = drjtest-helix-nc-sql\", \"danjohn1234\", \"{your_password_here}\");
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch ( PDOException $e ) {
	 print( \"Error connecting to SQL Server.\" );
	 die(print_r($e));
}

$connectionInfo = array(\"UID\" => \"danjohn1234@drjtest-helix-sql1\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"drjtest-helix-nc-sql\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);
$serverName = \"tcp:drjtest-helix-sql1.database.windows.net,1433\";
$conn = sqlsrv_connect($serverName, $connectionInfo);



?>