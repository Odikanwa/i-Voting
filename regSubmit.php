<html>
	<body>
		<?php
		//Declare variables
		$servername = "localhost";
		$username = "odikanwaMichael";
		$password = "odikanwaMichael";
		$dbname = "voterreg_DB";
		
		//define variables and set to empty values
		$firstname = $middlename = $lastname = $dob = $pob = $soo = $lga = $res_address = $phone_no = $mail = $p_address = $nin = $m_status = $occupation = $hobies = $religion = $p_edu = $start_yr1 = $end_yr1 = $start_yr1 = $end_yr1 = $start_yr1 = $start_yr1 = $end_yr1 = $start_yr1 = $end_yr1 = $start_yr1 = $end_yr1 = $cert1 = $sec_edu = $start_yr2 = $end_yr2 = $cert2 = $tert_edu = $start_yr3 = $end_yr3 = $cert3 = $other_cert1 = $start_yr4 = $end_yr4 = $cert4 = $other_cert2 = $start_yr5 = $end_yr5 = $cert5 = $other_cert3 = $start_yr6 = $end_yr6 = $cert6 = $pspt_upload = $bc_upload = $coo_upload = $pe_upload = $se_upload = $te_upload = $oc_upload1 = $oc_upload2 = $oc_upload3 = $nin_upload = $thumb = $index_finger = $last_finger = $userFile = "";
		
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
		
		//set characters sets
		mysqli_set_charset($conn,"utf8");
		//escape user inputs for security
		if(isset($_POST["firstname"]) && isset($_POST["middlename"]) && isset($_POST["lastname"]) && isset($_POST["dob"]) && isset($_POST["pob"]) && isset($_POST["soo"]) && isset($_POST["lga"]) && isset($_POST["res_address"]) && isset($_POST["phone_no"]) && isset($_POST["mail"]) && isset($_POST["p_address"]) && isset($_POST["nin"]) && isset($_POST["m_status"]) && isset($_POST["occupation"]) && isset($_POST["hobies"]) && isset($_POST["religion"]) && isset($_POST["p_edu"]) && isset($_POST["start_yr1"]) && isset($_POST["end_yr1"]) && isset($_POST["cert1"]) && isset($_POST["sec_edu"]) && isset($_POST["start_yr2"]) && isset($_POST["end_yr2"]) && isset($_POST["cert2"]) && isset($_POST["tert_edu"]) && isset($_POST["start_yr3"]) && isset($_POST["end_yr3"]) && isset($_POST["cert3"]) && isset($_POST["other_cert1"]) && isset($_POST["start_yr4"]) && isset($_POST["end_yr4"]) && isset($_POST["cert4"]) && isset($_POST["other_cert2"]) && isset($_POST["start_yr5"]) && isset($_POST["end_yr5"]) && isset($_POST["cert5"]) && isset($_POST["other_cert3"]) && isset($_POST["start_yr6"]) && isset($_POST["end_yr6"]) && isset($_POST["cert6"]) && isset($_POST["pspt_upload"]) && isset($_POST["bc_upload"]) && isset($_POST["coo_upload"]) && isset($_POST["pe_upload"]) && isset($_POST["se_upload"]) && isset($_POST["te_upload"]) && isset($_POST["oc_upload1"]) && isset($_POST["oc_upload2"]) && isset($_POST["oc_upload3"]) && isset($_POST["nin_upload"]) && isset($_POST["userFile"]) && isset($_POST["thumb"]) && isset($_POST["index_finger"]) && isset($_POST["last_finger"]) ){
		
		$firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
		$middlename = mysqli_real_escape_string($conn, $_POST["middlename"]);
		$lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
		$dob = mysqli_real_escape_string($conn, $_POST["dob"]);
		$pob = mysqli_real_escape_string($conn, $_POST["pob"]);
		$soo = mysqli_real_escape_string($conn, $_POST["soo"]);
		$lga = mysqli_real_escape_string($conn, $_POST["lga"]);
		$res_address = mysqli_real_escape_string($conn, $_POST["res_address"]);
		$phone_no = mysqli_real_escape_string($conn, $_POST["phone_no"]);
		$mail = mysqli_real_escape_string($conn, $_POST["mail"]);
		$p_address = mysqli_real_escape_string($conn, $_POST["p_address"]);
		$nin = mysqli_real_escape_string($conn, $_POST["nin"]);
		$m_status = mysqli_real_escape_string($conn, $_POST["m_status"]);
		$occupation = mysqli_real_escape_string($conn, $_POST["occupation"]);
		$hobies = mysqli_real_escape_string($conn, $_POST["hobies"]);
		$religion = mysqli_real_escape_string($conn, $_POST["religion"]);
		
		//educational background table
		$p_edu = mysqli_real_escape_string($conn, $_POST["p_edu"]);
		$start_yr1 = mysqli_real_escape_string($conn, $_POST["start_yr1"]);
		$end_yr1 = mysqli_real_escape_string($conn, $_POST["end_yr1"]);
		$cert1 = mysqli_real_escape_string($conn, $_POST["cert1"]);
		$sec_edu = mysqli_real_escape_string($conn, $_POST["sec_edu"]);
		$start_yr2 = mysqli_real_escape_string($conn, $_POST["start_yr2"]);
		$end_yr2 = mysqli_real_escape_string($conn, $_POST["end_yr2"]);
		$cert2 = mysqli_real_escape_string($conn, $_POST["cert2"]);
		$tert_edu = mysqli_real_escape_string($conn, $_POST["tert_edu"]);
		$start_yr3 = mysqli_real_escape_string($conn, $_POST["start_yr3"]);
		$end_yr3 = mysqli_real_escape_string($conn, $_POST["end_yr3"]);
		$cert3 = mysqli_real_escape_string($conn, $_POST["cert3"]);
		$other_cert1 = mysqli_real_escape_string($conn, $_POST["other_cert1"]);
		$start_yr4 = mysqli_real_escape_string($conn, $_POST["start_yr4"]);
		$end_yr4 = mysqli_real_escape_string($conn, $_POST["end_yr4"]);
		$cert4 = mysqli_real_escape_string($conn, $_POST["cert4"]);
		$other_cert2 = mysqli_real_escape_string($conn, $_POST["other_cert2"]);
		$start_yr5 = mysqli_real_escape_string($conn, $_POST["start-yr5"]);
		$end_yr5 = mysqli_real_escape_string($conn, $_POST["end_yr5"]);
		$cert5 = mysqli_real_escape_string($conn, $_POST["cert5"]);
		$other_cert3 = mysqli_real_escape_string($conn, $_POST["other_cert3"]);
		$start_yr6 = mysqli_real_escape_string($conn, $_POST["start_yr6"]);
		$end_yr6 = mysqli_real_escape_string($conn, $_POST["end_yr6"]);
		$cert6 = mysqli_real_escape_string($conn, $_POST["cert6"]);
		
		//supporting documents table
		/*
		$pspt_upload = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$bc_upload = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$coo_upload = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$pe_upload = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$se_upload = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$te_upload = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$oc_upload1 = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$oc_upload2 = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$oc_upload3 = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		$nin_upload = mysqli_real_escape_string($conn, $_POST["userFile"]["target_file"]);
		*/
		
		//biometric capture table
		$thumb = mysqli_real_escape_string($conn, $_POST["thumb"]);
		$index_finger = mysqli_real_escape_string($conn, $_POST["index_finger"]);
		$last_finger = mysqli_real_escape_string($conn, $_POST["last_finger"]);
		}
		
    // attempt insert query execution
    $sql = "INSERT INTO personal_info (firstname, middlename, lastname, dob, pob, soo, lga, res_address, phone_no, mail, p_address, nin, m_status, occupation, hobies, religion) VALUES ('$firstname', '$middlename', '$lastname', '$dob', '$pob', '$soo', '$lga', '$res_address', '$phone_no', '$mail', '$p_address', '$nin', '$m_status', '$occupation', '$hobies', '$religion');";
		
	$sql .= "INSERT INTO educational_background (p_edu, start_yr1, end_yr1, cert1, sec_edu, start_yr2, end_yr2, cert2, tert_edu, start_yr3, end_yr3, cert3, other_cert1, start_yr4, end_yr4, cert4, other_cert2, start_yr5, end_yr5, cert5, other_cert3, start_yr6, end_yr6, cert6) VALUES ('$p_edu', '$start_yr1', '$end_yr1', '$cert1', '$sec_edu', '$start_yr2', '$end_yr2', '$cert2', '$tert_edu', '$start_yr3', '$end_yr3', '$cert3', '$other_cert1', '$start_yr4', '$end_yr4', '$cert4', '$other_cert2', '$start_yr5', '$end_yr5', '$cert5', '$other_cert3', '$start_yr6', '$end_yr6', '$cert6');";
	
	/*
	$sql .= "INSERT INTO supporting_documents (userFile, userFile, userFile, userFile, userFile, userFile, userFile, userFile, userFile, userFile,) VALUES ('$pspt_upload', '$bc_upload', '$coo_upload', '$pe_upload', '$se_upload', '$te_upload', '$oc_upload1', '$oc_upload2', '$oc_upload3', '$nin_upload');";
	*/
	
	$sql .= "INSERT INTO biometric_capture (thumb, index_finger, last_finger) VALUES ('$thumb', '$index_finger', '$last_finger')";
	
	if ($conn->multi_query($sql) === TRUE){
		echo "Records succesfully added";
	}else{
		echo "ERROR: could not execute " . $sql ."<br>" .$conn->error;
	}
		
	$target_dir = "fileUploads/";
	$target_file = $target_dir . basename($_FILES["userFile"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["userFile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	}
		
	// Check if file already exists
	if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
	}
		
	// Check file size
	if ($_FILES["userFile"]["size"] > 2000000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	
	// if everything is ok, try to upload file
	} else {
    if (move_uploaded_file($_FILES["userFile"]["tmp_name"], $target_file)) {
		
		$userfile = $target_dir.DIRECTORY_SEPARATOR.$_FILES["userFile"]["name"];
        echo "The file ". basename( $_FILES["userFile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	}
	
			
    // close connection
    $conn->close();
	}
	