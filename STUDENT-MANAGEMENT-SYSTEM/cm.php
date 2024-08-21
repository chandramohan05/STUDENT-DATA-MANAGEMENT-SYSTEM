<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student_database1";
 
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save1']))
{	
	 $NAME = $_POST['fname'];
	 $GENDER=$_POST['gen'];
	 $DOB = $_POST['dob'];
	 $EMAIL = $_POST['mail'];
	 $FIRST_GRADUATE = $_POST['grad'];
	 $BLOOD_GROUP=$_POST['BG'];
	 $EMIS_NUMBER=$_POST['emis'];
	 $STUDENT_PHNO=$_POST['sph'];
	 $PERMANENT_ADDRESS=$_POST['pa'];
	 $COMMUNICATION_ADDRESS=$_POST['ca'];
	 $RELIGION=$_POST['grad'];
	 $COMMUNITY=$_POST['cas'];
	 $CASTE=$_POST['caste'];
	 $NATIONALITY=$_POST['nat'];
	 $STATE=$_POST['sta'];
	 $AADHAR_NUMBER=$_POST['ad'];
	 $ALLOTMENT_NUMBER=$_POST['allot'];
	 $ADMISSION_MODE=$_POST['am'];
	 $LATERAL_ENTRY=$_POST['la'];
	 $DATE_OF_ADMISSION=$_POST['doa'];
	 $HOSTEL_TYPE=$_POST['ht'];
	 $HOSTELLER=$_POST['hos'];
	 $CERTIFICATE_ARE_SUBMITED=$_POST['ceas'];
	 $BANK_USER_NAME=$_POST['buname'];
	 $BANK_NAME=$_POST['bname'];
	 $BRANCH_NAME=$_POST['brname'];
	 $ACCOUNT_NUMBER=$_POST['an'];
	 $IFSC_CODE=$_POST['code'];
	 $FATHER_NAME=$_POST['Faname'];
	 $F_WORKING_SECTOR=$_POST['worksf'];
	 $FATHER_OCCUPATION=$_POST['faocu'];
	 $FATHER_PHNO=$_POST['fph'];
	 $MOTHER_NAME=$_POST['maname'];
	 $M_WORKING_SECTOR=$_POST['worksm'];
	 $MOTHER_OCCUPATION=$_POST['maocu'];
	 $MOTHER_PHNO=$_POST['mph'];
	 $ORPHAN=$_POST['orp'];
	 $GUARDIAN_NAME=$_POST['guname'];
	 $ANNUAL_INCOME=$_POST['ain'];
	 $TENth_MARK=$_POST['10'];
	 $TEWELth_MARK=$_POST['12'];
	 $TAMIL_MARK=$_POST['t12'];
	 $ENGLISH_MARK=$_POST['e12'];
	 $MATHS_MARK=$_POST['m12'];
	 $BIOLOGY_COMPUTER_SCIENCE_MARK=$_POST['cob12'];
	 $CHEMISTRY=$_POST['c12'];
	 $PHYSICS=$_POST['P12'];
	 $CUT_OFF_MARK=$_POST['com'];
	 $sql_query = "INSERT INTO student_details1 (NAME,GENDER,DOB,EMAIL,FIRST_GRADUATE,BLOOD_GROUP,EMIS_NUMBER,STUDENT_PHNO,PERMANENT_ADDRESS,COMMUNICATION_ADDRESS,RELIGION,COMMUNITY,CASTE,NATIONALITY,STATE,AADHAR_NUMBER,ALLOTMENT_NUMBER,ADMISSION_MODE,LATERAL_ENTRY,DATE_OF_ADMISSION,HOSTEL_TYPE,HOSTELLER,CERTIFICATE_ARE_SUBMITED,BANK_USER_NAME,BANK_NAME,BRANCH_NAME,ACCOUNT_NUMBER,IFSC_CODE,FATHER_NAME,F_WORKING_SECTOR,FATHER_OCCUPATION,FATHER_PHNO,MOTHER_NAME,M_WORKING_SECTOR,MOTHER_OCCUPATION,MOTHER_PHNO,ORPHAN,GUARDIAN_NAME,ANNUAL_INCOME,TENth_MARK,TEWELth_MARK,TAMIL_MARK,ENGLISH_MARK,MATHS_MARK,BIOLOGY_COMPUTER_SCIENCE_MARK,CHEMISTRY,PHYSICS,CUT_OFF_MARK) 
	 VALUES ('$NAME','$GENDER','$DOB','$EMAIL','$FIRST_GRADUATE','$BLOOD_GROUP','$EMIS_NUMBER','$STUDENT_PHNO','$PERMANENT_ADDRESS','$COMMUNICATION_ADDRESS','$RELIGION','$COMMUNITY','$CASTE','$NATIONALITY','$STATE','$AADHAR_NUMBER','$ALLOTMENT_NUMBER','$ADMISSION_MODE','$LATERAL_ENTRY','$DATE_OF_ADMISSION','$HOSTEL_TYPE','$HOSTELLER','$CERTIFICATE_ARE_SUBMITED','$BANK_USER_NAME','$BANK_NAME','$BANK_NAME','$ACCOUNT_NUMBER','$IFSC_CODE','$FATHER_NAME','$F_WORKING_SECTOR','$FATHER_OCCUPATION','$FATHER_PHNO','$MOTHER_NAME','$M_WORKING_SECTOR','$MOTHER_OCCUPATION','$MOTHER_PHNO','$ORPHAN','$GUARDIAN_NAME','$ANNUAL_INCOME','$TENth_MARK','$TEWELth_MARK','$TAMIL_MARK','$ENGLISH_MARK','$MATHS_MARK','$BIOLOGY_COMPUTER_SCIENCE_MARK','$CHEMISTRY','$PHYSICS','$CUT_OFF_MARK')";
	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
if(isset($_POST['save2']))
{
	$EMIS_NUMBER=$_POST['emis'];
	$sql_query="DELETE FROM student_details1 WHERE student_details1.EMIS_NUMBER=$EMIS_NUMBER";
	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "The Row From The Table Deleted Sucessfully!";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
if(isset($_POST['save3']))
{
	$sq_query="SELECT * FROM student_details1";
	$result=mysqli_query($conn, $sq_query);
	echo"<table border=1>";

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





	 if (mysqli_query($conn, $sq_query)) 
	 {
		echo "all the data is diaplay Sucessfully!";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


if(isset($_POST['save4']))
{
	$EMIS_NUMBER=$_POST['emis'];
	$sql_query="SELECT * FROM student_details1 WHERE student_details1.EMIS_NUMBER=$EMIS_NUMBER";
	$result=mysqli_query($conn, $sql_query);
	echo"<table border=1>";

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
	 mysqli_close($conn);
}
?>