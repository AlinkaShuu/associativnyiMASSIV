<?php
$person=[
'lastname'=>'Иванов',
'firstname'=>'Иван',
'patronymicname'=>'Иванович',
'avgorderlost'=>'15000',
];
$fields=[
'lastname'=>'Имя',
'firstname'=>'Фамилия',
'patronymicname'=>'Отчество',
/*'avgorderlost'=>'Средняя сумма',*/
];
foreach ($person as $field=>$value){
	if(isset ($fields[$field])) {
	echo "<p>".$fields[$field].":".$value."</p>";
	}
}
?>