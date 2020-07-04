<html>
	<head></head>
	<body>
	<?php
		//Declare variables
		$servername = "localhost";
		$username = "odikanwaMichael";
		$password = "odikanwaMichael";
		$dbname = "voterreg_DB";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully" . "<br>";
		
		/*
		// Create database
		$sql = "CREATE DATABASE voterreg_DB";
		if ($conn->query($sql) === TRUE) {
			echo "Database created successfully";
		} else{
			echo "Error creating database: " . $conn->error;
		}
		
		
		// sql to create table
		$sql = "CREATE TABLE personal_info (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		middlename VARCHAR(30),
		lastname VARCHAR(30) NOT NULL,
		dob DATE NOT NULL,
		pob TEXT NOT NULL,
		soo TEXT NOT NULL,
		lga TEXT NOT NULL,
		res_address VARCHAR(50) NOT NULL,
		phone_no INT(11) NOT NULL,
		mail VARCHAR(30),
		p_address VARCHAR(30),
		nin VARCHAR(30),
		m_status TEXT NOT NULL,
		occupation VARCHAR(30) NOT NULL,
		hobies VARCHAR(30),
		religion TEXT NOT NULL,
		reg_date TIMESTAMP NOT NULL )";
		/*
		$sql .= "CREATE TABLE educational_background (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		p_edu VARCHAR(50) NOT NULL,
		start_yr1 YEAR NOT NULL,
		end_yr1 YEAR NOT NULL,   
		cert1 VARCHAR(50) NOT NULL,
		sec_edu VARCHAR(50) NOT NULL,
		start_yr2 YEAR NOT NULL,
		end_yr2 YEAR NOT NULL,
		cert2 VARCHAR(50) NOT NULL,
		tert_edu VARCHAR(50) NOT NULL,
		start_yr3 YEAR NOT NULL,
		end_yr3 YEAR NOT NULL,
		cert3 VARCHAR(50) NOT NULL,
		other_cert1 VARCHAR(50),
		start_yr4 YEAR,
		end_yr4 YEAR,
		cert4 VARCHAR(50),
		other_cert2 VARCHAR(50),
		start_yr5 YEAR,
		end_yr5 YEAR,
		cert5 VARCHAR(50),
		other_cert3 VARCHAR(50),
		start_yr6 YEAR,
		end_yr6 YEAR,
		cert6 VARCHAR(50));";
		
		$sql .= "CREATE TABLE supporting_documents (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		pspt_upload VARCHAR(255) NOT NULL,
		bc_upload VARCHAR(255) NOT NULL,
		coo_upload VARCHAR(255) NOT NULL,
		pe_upload VARCHAR(255),
		se_upload VARCHAR(255),
		te_upload VARCHAR(255),
		oc_upload1 VARCHAR(255),
		oc_upload2 VARCHAR(255),
		oc_upload3 VARCHAR(255),
		nin_upload VARCHAR(255) NOT NULL);";
		
		$sql .= "CREATE TABLE biometric_capture (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		thumb BLOB NOT NULL,
		index_finger BLOB NOT NULL,
		last_finger BLOB NOT NULL)";
	
		if ($conn->multi_query($sql) === TRUE) {
			echo "Tables for personal_info, educational_background, supporting_documents and biometric_capture created successfully";
			} else {
				echo "Error creating table: " . $conn->error;
			}
		*/
		
		/*
		//Drop multiple tables
		$sql = "DROP TABLES personal_info,educational_background,supporting_documents,biometric_capture";
		if($conn->query($sql) === TRUE){
			echo "All four tables successfully dropped";
		}else{
			echo "Error dropping table" .$conn->error;
		}
		*/
		/*
		if ($conn->query($sql) === TRUE) {
		echo "Table supporting_documents created successfully";
	} else {
    	echo "Error creating table: " . $conn->error;
		}
		*/
	$conn->close();	
	?>
	</body>
</html>