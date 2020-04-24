<!DOCTYPE html>
<html>
	<head>
		<title>Cronjob Test</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="stile.css?v={CURRENT_TIMESTAMP}" type="text/css"/>
	</head>
	<body>
	<h1>This is a test of Cron Job Application</h1>
	<h2>Below the latest successful update's date</h2>
	<div id="result"></div>
	</body>
</html>

<?php 
$con = mysqli_connect("localhost", "root", "", "cronjob");
$sql = "SELECT Date FROM last_update ORDER BY id DESC LIMIT 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
		  echo
		  "<tr>
		    <td>" . $row["Date"] . "</td>
		   </tr>";
      }
	  echo "</table>";
	  
  } else {
      echo "0 results";
    }
$con->close();

 ?>