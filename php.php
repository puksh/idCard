<html>
    <head>
    </head>
	<body>
		<?php
			$surname = $_GET['surname'];
			$name = $_GET['name'];
			$family_name = $_GET['family_name'];
			$parents_names = $_GET['parents_names'];
			$dob = $_GET['dob'];
			$sex = $_GET['sex'];
			$pesel = $_GET['pesel'];
			$nationality = $_GET['nationality'];
			$id_num = $_GET['id_num'];
			$pob = $_GET['pob'];
			$ia = $_GET['ia'];
			$issue = $_GET['issue'];
			$expiry = $_GET['expiry'];
			if ($surname === NULL or $surname === '')
			{
			echo "input ur surname";
			}
			elseif($name === NULL or $name === '')
			{
			echo "input ur name";
			}
			elseif($family_name === NULL or $family_name === '')
			{
			echo "input ur family_name";
			}
			elseif($parents_names === NULL or $parents_names === '')
			{
			echo "input ur parents_names";
			}
			elseif($dob === NULL or $dob === '')
			{
			echo "input ur dob";
			}
			elseif($sex === NULL or $sex === '')
			{
			echo "input ur sex";
			}
			elseif($pesel === NULL or $pesel === '' or strlen ($pesel) !== 11)
			{
			echo "input ur pesel";
			}
			elseif($nationality === NULL or $nationality === '')
			{
			echo "input ur nationality";
			}
			elseif($id_num === NULL or $id_num === '')
			{
			echo "input ur id_num";
			}
			elseif($pob === NULL or $pob === '')
			{
			echo "input ur pob";
			}
			elseif($ia === NULL or $ia === '')
			{
			echo "input ur ia";
			}
			elseif($issue === NULL or $issue === '')
			{
			echo "input ur issue";
			}
			elseif($expiry === NULL or $expiry === '')
			{
			echo "input ur expiry";
			}
			elseif(1===1)
			{
			echo "Surname: ",$surname ,"<br>";
			echo "Name: ",$name ,"<br>";
			echo "family_name: ",$family_name ,"<br>";
			echo "parents_names: ",$parents_names ,"<br>";
			echo "dob: ",$dob ,"<br>";
			echo "sex: ",$sex ,"<br>";
			echo "pesel: ",$pesel ,"<br>";
			echo "nationality: ",$nationality ,"<br>";
			echo "id_num: ",$id_num ,"<br>";
			echo "pob: ",$pob ,"<br>";
			echo "ia: ",$ia ,"<br>";
			echo "issue: ",$issue ,"<br>";
			echo "expiry: ",$expiry ,"<br>";
			}
		?>
	</body>
</html>