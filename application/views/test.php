<?php
echo "<pre>";

print_r($student);
echo "<br><br>";
foreach ($student->result() as $row) {
	echo $row->name;
}

?>