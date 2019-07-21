<?php
	echo "Orange Juice"
?>

Bye Pessoal

<?php
	require 'ex2.html';

	//declare(strict_types=1);

	$a = 2 * 44;

	echo $a;

	$num = 123;
	var_dump($num);

	$num = 'abc';
	var_dump($num);

	$a = "1"; 
	$b = 2; 
	var_dump($a + $b); 
	var_dump($a . $b); 

	$a = 3;
	$b = 10;
	var_dump($b**$a);

	var_dump(-$a);

	var_dump($b%$a);

	$a += 14;
	var_dump($a);

	$a *= 14;
	var_dump($a);

	var_dump(2 < 3); 
	var_dump(4 < 3); 
	var_dump(1 <=> 2); 
	var_dump(1 <=> 1); 
	var_dump(2 > 3); 
	var_dump(3 >= 3); 

	$a = 3; 
	$b = '3';
	$c = 5; 

	var_dump($a == $b);
	var_dump($a === $b);
	var_dump($a != $b); 
	var_dump($a !== $b); 
	var_dump($a <> $c); 

	var_dump(true && true); 
	var_dump(true && false);
	var_dump(true || false); 
	var_dump(false || false); 
	var_dump(!false); 

	$a = 3;
	$b = $a++;
	var_dump($a, $b); 
	$b = ++$a; 
	var_dump($a, $b); 

	$texto = 'Como escrever código limpo em PHP?';

	echo strlen($texto);

	$texto = trim($texto);

	echo strlen($texto);

	echo strtoupper($texto);

	echo strtolower($texto);

	$texto = str_replace('Como', 'limpo', $texto);

	echo $texto;

	echo substr($texto, 2, 6);

	var_dump(strpos($texto, 'Como')); 

	var_dump(strpos($texto, 'limpo')); 

	$nome = "Kelvio";
	$sobrenome = "Silva";

	echo "Eu sou" . $nome . "" . $sobrenome . "!";

	echo "Eu sou $nome\n $sobrenome";
	/*
	List: ["Kelvio", "Patricia", "Jose"]

	Map: {
		"name": "Kelvio Silva",
		"status": "dead"
	}
	*/
	$empty1 = [];
	$empty2 = array();
	$names1 = ['Patty', 'Roy', 'Larry'];
	$names2 = array('Clo', 'Venus', 'Felicity');
	$status1 = [
		'name' => 'Ted Murphy',
		'status' => 'live'
	];
	$status2 = array(
		'name' => 'Ted Murphy',
		'status' => 'live'
	);

	$names1 = [
				0=>'Louise', 
				1=>'Roy', 
				2=>'Larry'
	];

	$books = [
			'1984' => [
				'author' => 'George Orwell',
				'finished' => true,
				'rate' => 9.5
		],
		'Romeo and Juliet' => [
			'author' => 'William Shakespeare',
			'finished' => false
		]
	];
	$names = ['Kelvio', 'Santos', 'Lionel'];
	$status = [
		'name' => 'James Potter',
		'status' => 'dead'
	];
	$names[] = 'Neville';
	$status['age'] = 32;
	print_r($names);	
	print_r($status);	
	
	$status = [
		'name' => 'James Potter',
		'status' => 'dead'
	];
	unset($status['status']);
	print_r($status);

	$names = ['Harry', 'Ron', 'Hermione'];
	$names[8] = 'Snape';
	$names[] = 'McGonagall';
	print_r($names);

	print_r($names[1]);

	var_dump($names[2]);

	$string = '';
	$array = [];
	$names = ['Harry', 'Ron', 'Hermione'];

	var_dump(empty($string));
	var_dump(empty($array));
	var_dump(empty($names));
	var_dump(isset($names[2]));
	var_dump(isset($names[3]));

	$names = ['Harry', 'Ron', 'Hermione'];
	$containsHermione = in_array('Hermione', $names);
	var_dump($containsHermione);
	$containsSnape = in_array('Snape', $names);
	var_dump($containsSnape);
	$wheresRon = array_search('Ron', $names);
	var_dump($wheresRon);
	$wheresVoldemort = array_search('Voldemort', $names);
	var_dump($wheresVoldemort);

	$properties = [
		'firstname' => 'Tom',
		'surname' => 'Riddle',
		'house' => 'Slytherin'
	];
	$properties1 = $properties2 = $properties3 = $properties;
	sort($properties1);
	var_dump($properties1);
	asort($properties3);
	var_dump($properties3);
	ksort($properties2);
	var_dump($properties2);

	$keys = array_keys($properties);
	var_dump($keys);

	$values = array_values($properties);
	var_dump($values);

	$size = count($names);
	var_dump($size);

	$good = ['Harry', 'Ron', 'Hermione'];
	$bad = ['Dudley', 'Venon', 'Petunia'];
	$all = array_merge($good, $bad);
	var_dump($all);


	echo "Before the conditional.";
	if(4>3){
		echo "Inside the conditional.";
	}
	if(3>4){
		echo "This will not be printed.";
	}
	echo "After the conditional.";

	if(2>3){
		echo "Inside the conditional.";
	} else {
		echo "Inside the else.";
	}
	if (4>5){
		echo "Not printed";
	} elseif (4>4){
		echo "Not printed";
	} elseif (4==4){
		echo "Printed.";
	} elseif (4>2){
		echo "Not evaluted.";
	} else{
		echo "Not evaluted.";
	}
	if(4==4){
		echo "Printed";
	}

	$title = 'Harry Potter';
	switch($title){
		case 'Harry Potter':
			echo "Nice story, a bit too long.";
		break;
		case 'Lord of the Rings':
			echo "A classic!";
		break;		
		default: 
			echo "Dunno tha one.";
		break;	
	}

	$i=1;
	while ($i < 4){
		echo $i . "";
		echo $i;
		$i++;
	}

	do{
		echo $i . "";
		$i++;
	}while($i<6);

	for ($j=0; $j<10;$j++){
		echo "Contando: ".$j;
	}

	$names = ['Harry', 'Ron', 'Hermione'];
	for ($i=0;$i<count($names); $i++){
		echo $names[$i] . "";
	}

	$names = ['Kelvio', 'Jose', 'Maura'];
	foreach ($names as $name){
		echo $name . "";
	}
	foreach ($names as $key => $name){
		echo $key . " -> " . $name . "";
	}

	function addNumbers2($a, $b){
		$sum =$a + $b;
		return $sum;
	}
	$result = addNumbers2(2, 3);
	echo $result;

	function addNumbers($a, $b, $printResult=false){
		$sum = $a + $b;
		if($printResult){
			echo 'The result is ' . $sum;
		}
		return $sum;
	}

	$sum1 = addNumbers(1, 2);
	$sum1 = addNumbers(3, 4, false);
	$sum1 = addNumbers(5, 6, true);

	function modify($a){
		$a = 3;
	}

	$a = 2;
	modify($a);
	var_dump($a);

	function addNumbers3(int $a, int $b, bool $printSum): int{
		$sum = $a + $b;
		if ($printSum){
			echo 'The sum is ' . $sum;
		}
		return $sum;
	}

	addNumbers3(1, 2, true);
	addNumbers3(1, '2', true);
	addNumbers3(1, 'something', true);
?>
