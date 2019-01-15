
<?php

$attendence=$_POST['attendence'];
$classtest=$_POST['classtest'];
$midterm=$_POST['midterm'];
$final=$_POST['final'];


$result=$attendence+$classtest+$midterm+$final;
switch ($result) {
	case ($result<101 && $result>89):
		echo "Your Grade is : A";
		break;
	
	case ($result<90 && $result>79):
		echo "Your Grade is : B";
		break;

		case ($result<80 && $result>69):
		echo "Your Grade is : C";
		break;

		case ($result<70 && $result>59):
		echo "Your Grade is : D";
		break;

	default:
		echo "Your Grade is : F";
		break;
}
?>