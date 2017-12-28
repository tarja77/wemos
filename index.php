
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<form action="" method="POST">
 <input type="submit" value="1" name="btn">
    <input type="submit" value="2" name="btn">
    <input type="submit" value="3" name="btn">
	<input type="submit" value="4" name="btn">
</form>

<?php 
   if (isset($_POST["btn"]))
   {
	   
	       require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
	
	     $btn= $db->GetBtn($_POST["btn"]);
 
	  if ($btn['status']) {
          $db->Setbtn($_POST["btn"],0);
        }else{
		   $db->SetBtn($_POST["btn"],1);
		}
		
	
   }
   
   echo "<tr><td>".$btn["status"]."</td></tr>";
   
   
?>