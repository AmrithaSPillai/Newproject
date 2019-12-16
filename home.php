<?php
$servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "mpro";
      
      $conn = new PDO($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) 
	    {
          die("Connection failed: " . $conn->connect_error);
        } 
		else
		{
		 echo "Succesfull";
		}
	    
	    $uname=$_POST['username'];
	    $pass=$_POST['password'];
		  if($uname=="")
          {
	       echo "User Name is not valid<br>";
	     
          }
       if($pass=="")
         {
	     echo "Password is not valid<br>";
	    
         }
		
		$sql = "SELECT * FROM users WHERE username='$uname'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
		 {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - name: " . $row["Name"]. "<br>";
        echo "email: " . $row["email"]. " - User name: " . $row["Username"]. "<br>";
        echo "Password: " . $row["Password"]."<br>";
        }
        } 
		else 
		{
        echo "0 results";
		}
		?>