<!DOCTYPE HTML>
<html lang="pl-PL" id=html>
    <head>
        <link rel=stylesheet type="text/css" href="style.css">
		<script src="spring.js"></script>
        <title> id </title>
        <meta charset="UTF-8">
    </head>
    <!-- 
	nice webpage remember it
	https://www.colorabout.com/
	-->
    <body>
	
		<div class="row top center">
			<img class="img_bar marg" onclick="okay(id_card);" src="id_icon.png">
			<img class="img_bar marg" onclick="okay(credit_card);" src="credit_card_icon.png">
			<img class="img_bar marg" onclick="okay(id_card);" src="id_icon.png">
		</div>
		<div id=field class=column>
			<div class="column field2" id=id_card>
				<form action="" method="POST">
				<div class="row big_marg">
					<div id=front class=row>
						<div class=column>
							<div class="row bot">
								<img class=herb src="Herb_Polski.svg">
								<div class="column marg bord">
									<div class="row bot h">
										<p> Rzeczpospolita Polska <p class="smaller marg_l"> Republic of Poland</p></p>
									</div>
									<div class="row bot h">
										<p> Dowod osobisty <p class="smaller marg_l"> Identity card</p></p>
									</div>
								</div>
								<img src="pp.png">
							</div>
							<div class="row bot">
								<img class=prof src='id.png'>
								<div class="column info1">
									<div class=column>
										<p class=small>NAZWISKO/SURNAME </p> 
										<input name=surname type=text placeholder="KOWALSKI" maxlength="12">
									</div>
									<div class=column>
										<p class=small>IMIONA/GIVEN NAMES: </p> 
										<input name=name type=text placeholder="DAWID JACOB" maxlength="12">
									</div>
									<div class=column>
										<p class=small>NAZWISKO RODOWE / FAMILY NAME: </p> 
										<input name=family_name type=text placeholder="KOWALSKI" maxlength="12">
									</div>
									<div class=column>
										<p class=small>IMIONA RODZICOW / PARENTS' GIVEN NAMES: </p> 
										<input class=sml name=parents_names type=text placeholder="CAROL MARIA" maxlength="21">
									</div>
									<div class=row>
										<div class=column>
										<p class=small>DATA URODZENIA / DATE OF BIRTH </p> 
										<input name=dob type=text placeholder="01.01.2000" maxlength="10">
										</div>
										<div class=column>
											<p class=small> PLEC / SEX </p> 
											<select name=sex id=sex type="text" placeholder="F">
											<option name=sex id=sex type="text" placeholder="F" value="F">F</option>
											<option name=sex id=sex type="text" placeholder="M" value="M">M</option>
											<option name=sex id=sex type="text" placeholder="-" value="-">-</option>
											</select>
										</div>
									</div>
								</div>
								<img class=small_img src='id.png'>
							</div>
						</div>
					</div>
					<div id=back class="back column">
						<div class="row marg_l">
							<div class="row marg">
								<img src="pp.png">
								<div id=info2 class="column">
									<p class=small>NUMER PESEL / PERSONAL NUMBER </p> 
									<input name=pesel id=pesel maxlength="11" type=text placeholder=00000000000>
									<p class=small>OBYWATELSTWO / NATIONALITY </p> 
									<input name=nationality id=nationality type=text placeholder=JAPONSKIE maxlength="14">
								</div>
								<img id=kontur class=marg src='kontur.png'>
								<div class="column marg_l">
									<p class="small">NUMER DOWODU OSOBISTEGO / </p><br>
									<p class="small">IDENTITY CARD NUMBER </p>
									<input name=id_num type=text placeholder="ARG696969" maxlength="9">
								</div>
							</div>
						</div>
						<div class=row>
							<div class="column marg_l">
								<p class=small>MIEJSCE URODZENIA / PLACE OF BIRTH </p>
								<input name=pob type=text placeholder=SIANOWSKO maxlength="12">
								<p class=small>ORGAN WYDAJACY / ISSUING AUTHORITY </p> 
								<input name=ia class=l type=text placeholder="PREZYDENT KTOREGOS MIASTA" maxlength="27">
							</div>
							<div class="row botto">
								<div class="column marg_l2">
									<p class="small">DATA WYDANIA / </p><br>
									<p class="small" >DATE OF ISSUE </p>
									<input name=issue  class=snail type=text placeholder="26.07.2019" maxlength="10">
									<p class="small">DATA WAZNOSCI / </p><br>
									<p class="small">EXPIRY DATE </p>
									<input name=expiry  class=snail type=text placeholder="26.07.2029" maxlength="10">
								</div>
								<img class=small_img src='id.png'>
							</div>
						</div>
						<div class=bottom_field>
							<input class=bottom_item id=can type=text placeholder="2HhMxMc)sx6rxG=_7:%&mA+HmLP@vv">
							<input class=bottom_item id=can type=text placeholder="*jz(_3L3Y+=--N]H!%TK{E<7+J-RcP">
							<input class=bottom_item id=can type=text placeholder="zeazfN:LM;@!5BG8br#NBH2:g:h),H">
						</div>
					</div>
					</div>
					<div class=field2>
						<button onclick="crabby();" type=submit name=submit_id_card>Submit
						<button onclick="crabby();" type=submit name=data_id_card>Show data
						<button onclick="crabby();" type=submit name=submit_id_card_massive>Input massive amout of data
						<button onclick="crabby();" type=submit name=delete_records id=delete>Delete all!
					</div>
				</form>
				<div id=crab>
					<div class=row id=info>
						<p class=snake>surname</p>
						<p class=snake>name</p>
						<p class=snake>family_name</p>
						<p class=snake>parents_names</p>
						<p class=snake>dob</p>
						<p class=snake>sex</p>
						<p class=snake>pesel</p>
						<p class=snake>nationality</p>
						<p class=snake>id_num</p>
						<p class=snake>pob</p>
						<p class=snake>ia</p>
						<p class=snake>issue</p>
						<p class=snake>expiry</p>
					</div>
					<?php
						mysqli_close($conn);
						$servername	= 'localhost';
						$username = 'root';
						$password = '';
						$database = 'mydatabejs';

							$con = mysqli_connect($servername,$username,$password,$database) or die('error');
							$querry = "SELECT * FROM dane";
							$smth = mysqli_query($con,$querry);
							while($row = mysqli_fetch_array($smth))
							{
								echo "<div class=row><p class=snake>", $row['surname'],"</p> ",
								"<p class=snake>", $row['name'],"</p> ",
								"<p class=snake>", $row['family_name'],"</p> ",
								"<p class=snake>", $row['parents_names'],"</p> ",
								"<p class=snake>", $row['dob'],"</p> ",
								"<p class=snake>", $row['sex'],"</p> ",
								"<p class=snake>", $row['pesel'],"</p> ",
								"<p class=snake>", $row['nationality'],"</p> ",
								"<p class=snake>", $row['id_num'],"</p> ",
								"<p class=snake>", $row['pob'],"</p> ",
								"<p class=snake>", $row['ia'],"</p> ",
								"<p class=snake>", $row['issue'],"</p> ",
								"<p class=snake>", $row['expiry'],"</p></div>";
							}

						if(isset($_POST['submit_id_card'])){
							$surname = $_POST['surname'];
							$name = $_POST['name'];
							$family_name = $_POST['family_name'];
							$parents_names = $_POST['parents_names'];
							$dob = $_POST['dob'];
							$sex = $_POST['sex'];
							$pesel = $_POST['pesel'];
							$nationality = $_POST['nationality'];
							$id_num = $_POST['id_num'];
							$pob = $_POST['pob'];
							$ia = $_POST['ia'];
							$issue = $_POST['issue'];
							$expiry = $_POST['expiry'];
							if ($surname === NULL or $surname === ''){
								echo "<script>alert('input ur surname')</script>";
							}
							elseif($name === NULL or $name === ''){
								echo "<script>alert('input ur name</script>";
							}
							elseif($family_name === NULL or $family_name === ''){
								echo "<script>alert('input ur family_name</script>";
							}
							elseif($parents_names === NULL or $parents_names === ''){
								echo "<script>alert('input ur parents_names</script>";
							}
							elseif($dob === NULL or $dob === ''){
								echo "<script>alert('input ur dob</script>";
							}
							elseif($sex === NULL or $sex === ''){
								echo "<script>alert('input ur sex</script>";
							}
							elseif($pesel === NULL or $pesel === '' or strlen ($pesel) !== 11){
								echo "<script>alert('input ur pesel</script>";
							}
							elseif($nationality === NULL or $nationality === ''){
								echo "<script>alert('input ur nationality</script>";
							}
							elseif($id_num === NULL or $id_num === ''){
								echo "<script>alert('input ur id_num</script>";
							}
							elseif($pob === NULL or $pob === ''){
								echo "<script>alert('input ur pob</script>";
							}
							elseif($ia === NULL or $ia === ''){
								echo "<script>alert('input ur ia</script>";
							}
							elseif($issue === NULL or $issue === ''){
								echo "<script>alert('input ur issue</script>";
							}
							elseif($expiry === NULL or $expiry === ''){
								echo "<script>alert('input ur expiry</script>";
							}
							elseif(1===1){
								echo "<div class=output>Surname: ",$surname ,"<br></div>";
								echo "<div class=output>Name: ",$name ,"<br></div>";
								echo "<div class=output>family_name: ",$family_name ,"<br></div>";
								echo "<div class=output>parents_names: ",$parents_names ,"<br></div>";
								echo "<div class=output>dob: ",$dob ,"<br></div>";
								echo "<div class=output>sex: ",$sex ,"<br></div>";
								echo "<div class=output>pesel: ",$pesel ,"<br></div>";
								echo "<div class=output>nationality: ",$nationality ,"<br></div>";
								echo "<div class=output>id_num: ",$id_num ,"<br></div>";
								echo "<div class=output>pob: ",$pob ,"<br></div>";
								echo "<div class=output>ia: ",$ia ,"<br></div>";
								echo "<div class=output>issue: ",$issue ,"<br></div>";
								echo "<div class=output>expiry: ",$expiry ,"<br></div>";
								
								$conn = new mysqli($servername,$username,$password,$database);
									
								$dane = "INSERT INTO dane 
										(surname,name,family_name,parents_names,dob,sex,pesel,nationality,id_num,pob,ia,issue,expiry)
										VALUES (
										'$surname',
										'$name',
										'$family_name',
										'$parents_names',
										'$dob',
										'$sex',
										'$pesel',
										'$nationality',
										'$id_num',
										'$pob',
										'$ia',
										'$issue',
										'$expiry')";

								$conn->query($dane);
								mysqli_close($conn);
							}
						}
						if(isset($_POST['submit_id_card_massive'])){
							$year = mt_rand(1000,date("Y"));
							$month = mt_rand(1,12);
							$day = mt_rand(1,28);
							$surname = $_POST['surname'];
							$name = $_POST['name'];
							$family_name = $_POST['family_name'];
							$parents_names = $_POST['parents_names'];
							$dob = $year . "." . $month . "." . $day;
							$sex = $_POST['sex'];
							$pesel = $_POST['pesel'];
							$nationality = $_POST['nationality'];
							$id_num = $_POST['id_num'];
							$pob = $_POST['pob'];
							$ia = $_POST['ia'];
							$issue = $year . "." . $month . "." . $day;
							$expiry = $year+10 . "." . $month . "." . $day;
							if ($surname === NULL or $surname === ''){
								echo "<script>alert('input ur surname')</script>";
							}
							elseif($name === NULL or $name === ''){
								echo "<script>alert('input ur name</script>";
							}
							elseif($family_name === NULL or $family_name === ''){
								echo "<script>alert('input ur family_name</script>";
							}
							elseif($parents_names === NULL or $parents_names === ''){
								echo "<script>alert('input ur parents_names</script>";
							}
							elseif($dob === NULL or $dob === ''){
								echo "<script>alert('input ur dob</script>";
							}
							elseif($sex === NULL or $sex === ''){
								echo "<script>alert('input ur sex</script>";
							}
							elseif($pesel === NULL or $pesel === '' or strlen ($pesel) !== 11){
								echo "<script>alert('input ur pesel</script>";
							}
							elseif($nationality === NULL or $nationality === ''){
								echo "<script>alert('input ur nationality</script>";
							}
							elseif($id_num === NULL or $id_num === ''){
								echo "<script>alert('input ur id_num</script>";
							}
							elseif($pob === NULL or $pob === ''){
								echo "<script>alert('input ur pob</script>";
							}
							elseif($ia === NULL or $ia === ''){
								echo "<script>alert('input ur ia</script>";
							}
							elseif($issue === NULL or $issue === ''){
								echo "<script>alert('input ur issue</script>";
							}
							elseif($expiry === NULL or $expiry === ''){
								echo "<script>alert('input ur expiry</script>";
							}
							elseif(1===1){
								$int = 0;
								echo "<div class=output>Surname: ",$surname ,"<br></div>";
								echo "<div class=output>Name: ",$name ,"<br></div>";
								echo "<div class=output>family_name: ",$family_name ,"<br></div>";
								echo "<div class=output>parents_names: ",$parents_names ,"<br></div>";
								echo "<div class=output>dob: ",$dob ,"<br></div>";
								echo "<div class=output>sex: ",$sex ,"<br></div>";
								echo "<div class=output>pesel: ",$pesel ,"<br></div>";
								echo "<div class=output>nationality: ",$nationality ,"<br></div>";
								echo "<div class=output>id_num: ",$id_num ,"<br></div>";
								echo "<div class=output>pob: ",$pob ,"<br></div>";
								echo "<div class=output>ia: ",$ia ,"<br></div>";
								echo "<div class=output>issue: ",$issue ,"<br></div>";
								echo "<div class=output>expiry: ",$expiry ,"<br></div>";
								
								while($int<50){
								$conn = new mysqli($servername,$username,$password,$database);
									
								$dane = "INSERT INTO dane  (surname,name,family_name,parents_names,dob,sex,pesel,nationality,id_num,pob,ia,issue,expiry)
										VALUES (
										'$surname$int',
										'$name',
										'$family_name',
										'$parents_names',
										'$dob',
										'$sex',
										'$pesel',
										'$nationality',
										'$id_num',
										'$pob',
										'$ia',
										'$issue',
										'$expiry')";

								$conn->query($dane);
								$int+=1;
								}
								mysqli_close($conn);
								
							}
						}
						
						if(isset($_POST['delete_records'])){
							$conn = new mysqli($servername,$username,$password,$database);
							$delete = "DELETE FROM dane;";
							$conn->query($delete);
							mysqli_close($conn);
						}
					?>
				</div>
			</div>
			<div class="column field2" id=credit_card>
			</div>
		</div>
    </body>
    <footer class=footer>
	
	</footer>
</html>