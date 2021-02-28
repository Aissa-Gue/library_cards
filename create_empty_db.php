<?php
$usersQry = "CREATE TABLE IF NOT EXISTS `users` (
	`username` varchar(25) NOT NULL,
	`password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$studentsQry = "CREATE TABLE IF NOT EXISTS `students` (
	`stud_id` int(11) NOT NULL,
	`soft_id` int(11) NOT NULL,
	`lname` varchar(25) NOT NULL,
	`fname` varchar(25) NOT NULL,
	`father` varchar(25) NOT NULL,
	`grandpa` varchar(25) NOT NULL,
	`birthdate` date NOT NULL,
	`birthplace` varchar(25) NOT NULL,
	`wali_lname` varchar(25) NOT NULL,
	`wali_fname` varchar(25) NOT NULL,
	`kinship` varchar(25) NOT NULL,
	`job` varchar(25) NOT NULL,
	`cultural_level` varchar(40) NOT NULL,
	`establishment` varchar(40) NOT NULL,
	`address` varchar(40) NOT NULL,
	`engagement_date` date NOT NULL,
	`last_edit` date NOT NULL,
	`phone` varchar(25) NOT NULL,
	`wali_phone` varchar(25) NOT NULL,
	`notes` mediumtext NOT NULL,
	`sex` tinyint(1) NOT NULL,
	PRIMARY KEY (`stud_id`) USING BTREE,
	UNIQUE KEY `soft_id` (`soft_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$pwd = md5('2020');
$insAdminQry = "INSERT INTO users VALUES('maktaba','$pwd')";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (
	mysqli_query($conn, $usersQry) and
	mysqli_query($conn, $studentsQry) and
	mysqli_query($conn, $insAdminQry)
) {
	echo "Tables Created Successfully";
} else {
	echo "ERROR! can not create tables!";
}
