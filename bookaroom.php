<?php
    
    // servername => localhost
    // username => root
    // password => empty
    // database name => college_survey
    $conn = mysqli_connect("localhost", "root", "", "look4pg");
    
    // Check connection
    if($conn == false){
        die("ERROR: Could not connect.". mysqli_connect_error());
    }

    // Taking all values from the form
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $messages = $_POST['messages'];
    if(isset($_POST['submit'])){
        // Performing insert query execution
        // here our table name is college
        $query = "INSERT INTO book_a_room(username, email, phoneno,n0_of_people,city,messages) 
        VALUES('$name','$email','$phoneno','$peopl'$messages')";
        $result=mysqli_query($conn,$query);
		
        if($result){
		echo "Your recortd has been inserted successfully";
		}
		else{
			echo "Error Please try again";
		}
    }
?>