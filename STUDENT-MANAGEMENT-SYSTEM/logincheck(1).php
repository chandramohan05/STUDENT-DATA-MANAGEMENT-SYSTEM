<?php
// Database connection parameters

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "student_database1";

// Establishing a connection to the database
$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['save4'])) {
    // Get the username and password from the form
    $username = $_POST["uname"];
    $password = $_POST["pas"];

    // Constructing the SQL query to retrieve data based on the username
    $sql_query = "SELECT * FROM student_details1 WHERE NAME='$username'";

    // Executing the SQL query
    $result = mysqli_query($conn, $sql_query);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) 
    	if($password=="GCECSE"){
        // Displaying data in a table format
        	echo "<table border='1'>";

	echo"<tr>";
	echo"<th>"; echo"NAME";echo"</th>";
	echo"<th>"; echo"GENDER";echo"</th>";
	echo"<th>"; echo"D.O.B";echo"</th>";
	echo"<th>"; echo"E-MAIL";echo"</th>";
	echo"<th>"; echo"FIRST_GRADUATE";echo"</th>";
	echo"<th>"; echo"BLOOD_GROUP";echo"</th>";
	echo"<th>"; echo"EMIS_NUMBER";echo"</th>";
	echo"<th>"; echo"STUDENT_PHNO";echo"</th>";
	echo"<th>"; echo"PERMANENT_ADDRESS";echo"</th>";
	echo"<th>"; echo"COMMUNICATION_ADDRESS";echo"</th>";
	echo"<th>"; echo"RELIGION";echo"</th>";
	echo"<th>"; echo"COMMUNITY";echo"</th>";
	echo"<th>"; echo"CASTE";echo"</th>";
	echo"<th>"; echo"NATIONALITY";echo"</th>";
	echo"<th>"; echo"STATE";echo"</th>";
	echo"<th>"; echo"AADHAR_NUMBER";echo"</th>";
	echo"<th>"; echo"ALLOTMENT_NUMBER";echo"</th>";
	echo"<th>"; echo"ADMISSION_MODE";echo"</th>";
	echo"<th>"; echo"LATERAL_ENTRY";echo"</th>";
	echo"<th>"; echo"DATE_OF_ADMISSION";echo"</th>";
	echo"<th>"; echo"HOSTEL_TYPE";echo"</th>";
	echo"<th>"; echo"HOSTELLER";echo"</th>";
	echo"<th>"; echo"CERTIFICATE_ARE_SUBMITED";echo"</th>";
	echo"<th>"; echo"BANK_USER_NAME";echo"</th>";
	echo"<th>"; echo"BANK_NAME";echo"</th>";
	echo"<th>"; echo"BRANCH_NAME";echo"</th>";
	echo"<th>"; echo"ACCOUNT_NUMBER";echo"</th>";
	echo"<th>"; echo"IFSC_CODE";echo"</th>";
	echo"<th>"; echo"FATHER_NAME";echo"</th>";
	echo"<th>"; echo"F_WORKING_SECTOR";echo"</th>";
	echo"<th>"; echo"FATHER_OCCUPATION";echo"</th>";
	echo"<th>"; echo"FATHER_PHNO";echo"</th>";
	echo"<th>"; echo"MOTHER_NAME";echo"</th>";
	echo"<th>"; echo"M_WORKING_SECTOR";echo"</th>";
	echo"<th>"; echo"MOTHER_OCCUPATION";echo"</th>";
	echo"<th>"; echo"MOTHER_PHNO";echo"</th>";
	echo"<th>"; echo"ORPHAN";echo"</th>";
	echo"<th>"; echo"GUARDIAN_NAME";echo"</th>";
	echo"<th>"; echo"ANNUAL_INCOME";echo"</th>";
	echo"<th>"; echo"TENth_MARK";echo"</th>";
	echo"<th>"; echo"TEWELth_MARK";echo"</th>";
	echo"<th>"; echo"TAMIL_MARK";echo"</th>";
	echo"<th>"; echo"ENGLISH_MARK";echo"</th>";
	echo"<th>"; echo"MATHS_MARK";echo"</th>";
	echo"<th>"; echo"BIOLOGY_COMPUTER_SCIENCE_MARK";echo"</th>";
	echo"<th>"; echo"CHEMISTRY";echo"</th>";
	echo"<th>"; echo"PHYSICS";echo"</th>";
	echo"<th>"; echo"CUT_OFF_MARK";echo"</th>";
	
	

	while ($row=mysqli_fetch_array($result))
	 {
		echo"<tr>";
		echo"<td>"; echo $row["NAME"]; echo"</td>";
		echo"<td>"; echo $row["GENDER"]; echo"</td>";
		echo"<td>"; echo $row["DOB"]; echo"</td>";
		echo"<td>"; echo $row["EMAIL"]; echo"</td>";
		echo"<td>"; echo $row["FIRST_GRADUATE"]; echo"</td>";
		echo"<td>"; echo $row["BLOOD_GROUP"]; echo"</td>";
		echo"<td>"; echo $row["EMIS_NUMBER"]; echo"</td>";
		echo"<td>"; echo $row["STUDENT_PHNO"]; echo"</td>";
		echo"<td>"; echo $row["PERMANENT_ADDRESS"]; echo"</td>";
		echo"<td>"; echo $row["COMMUNICATION_ADDRESS"]; echo"</td>";
		echo"<td>"; echo $row["RELIGION"]; echo"</td>";
		echo"<td>"; echo $row["COMMUNITY"]; echo"</td>";
		echo"<td>"; echo $row["CASTE"]; echo"</td>";
		echo"<td>"; echo $row["NATIONALITY"]; echo"</td>";
		echo"<td>"; echo $row["STATE"]; echo"</td>";
		echo"<td>"; echo $row["AADHAR_NUMBER"]; echo"</td>";
		echo"<td>"; echo $row["ALLOTMENT_NUMBER"]; echo"</td>";
		echo"<td>"; echo $row["ADMISSION_MODE"]; echo"</td>";
		echo"<td>"; echo $row["LATERAL_ENTRY"]; echo"</td>";
		echo"<td>"; echo $row["DATE_OF_ADMISSION"]; echo"</td>";
		echo"<td>"; echo $row["HOSTEL_TYPE"]; echo"</td>";
		echo"<td>"; echo $row["HOSTELLER"]; echo"</td>";
		echo"<td>"; echo $row["CERTIFICATE_ARE_SUBMITED"]; echo"</td>";
		echo"<td>"; echo $row["BANK_USER_NAME"]; echo"</td>";
		echo"<td>"; echo $row["BANK_NAME"]; echo"</td>";
		echo"<td>"; echo $row["BRANCH_NAME"]; echo"</td>";
		echo"<td>"; echo $row["ACCOUNT_NUMBER"]; echo"</td>";
		echo"<td>"; echo $row["IFSC_CODE"]; echo"</td>";
		echo"<td>"; echo $row["FATHER_NAME"]; echo"</td>";
		echo"<td>"; echo $row["F_WORKING_SECTOR"]; echo"</td>";
		echo"<td>"; echo $row["FATHER_OCCUPATION"]; echo"</td>";
		echo"<td>"; echo $row["FATHER_PHNO"]; echo"</td>";
		echo"<td>"; echo $row["MOTHER_NAME"]; echo"</td>";
		echo"<td>"; echo $row["M_WORKING_SECTOR"]; echo"</td>";
		echo"<td>"; echo $row["MOTHER_OCCUPATION"]; echo"</td>";
		echo"<td>"; echo $row["MOTHER_PHNO"]; echo"</td>";
		echo"<td>"; echo $row["ORPHAN"]; echo"</td>";
		echo"<td>"; echo $row["GUARDIAN_NAME"]; echo"</td>";
		echo"<td>"; echo $row["ANNUAL_INCOME"]; echo"</td>";
		echo"<td>"; echo $row["TENth_MARK"]; echo"</td>";
		echo"<td>"; echo $row["TEWELth_MARK"]; echo"</td>";
		echo"<td>"; echo $row["TAMIL_MARK"]; echo"</td>";
		echo"<td>"; echo $row["ENGLISH_MARK"]; echo"</td>";
		echo"<td>"; echo $row["MATHS_MARK"]; echo"</td>";
		echo"<td>"; echo $row["BIOLOGY_COMPUTER_SCIENCE_MARK"]; echo"</td>";
		echo"<td>"; echo $row["CHEMISTRY"]; echo"</td>";
		echo"<td>"; echo $row["PHYSICS"]; echo"</td>";
		echo"<td>"; echo $row["CUT_OFF_MARK"]; echo"</td>";
	}
	echo"</table>";





	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "The Row From The Table Displayed Sucessfully!";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
}
else{
	echo "<script>alert('Invalid username or password. Please try again.'); window.location='student.html';</script>";
}

$conn->close();
}

?>