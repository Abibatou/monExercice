<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/exercice.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Ajout d'élements</title>

</head>
<body class="banner">
	<?php 
	
	$classe = array(
		'said'=>13,
		'badr'=>16,
		'najat'=>15,
		 );?>
	<div class="container">
		<h3>Je crée un tableau associatif</h3>
             
  <table class="table table-striped tableau">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Note</th>
        
         </tr>
    </thead>
    <tbody>
      	<?php 
      		
      	
      	foreach ($classe as $key => $value) {
      	 ?>
      	
      	 	<tr>
      	 		<td><?php echo $key?></td>
                <td><?php echo $value?></td>
            </tr>
         <?php  
      	 }
      	
      	  
      	  ?>
        
     
      
      
    </tbody>
  </table>

<form action="#" method="POST">
		<h3>J'ajoute un étudiant</h3>
		<input type="text" name="cle" placeholder="nom">
		<input type="number" name="valeur" placeholder="valeur">
		<input type="submit" name="boutton" placeholder="supprimer">


		<table class="table table-striped tableau">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Note</th>
        
         </tr>
    </thead>
    <tbody>
		<?php
		if (isset($_POST["boutton"])) {
	
		$key=$_POST["cle"];
		$value=$_POST["valeur"];
		$classe[$key]=$value;

      	foreach ($classe as $key => $value) {
      	 ?>
      	
      		<tr>
      	 		<td><?php echo $key?></td>
                <td><?php echo $value?></td>
            </tr>
        <?php
      	 }
      	}
      	  
      	  ?>
      	</tbody>
      </table>
</form>
      	   
		<form action="#" method="POST">
		<h3>Je supprime un étudiant</h3>
         
			<table class="table table-striped tableau">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Note</th>
        
         </tr>
    </thead>
    <tbody>
    	<?php 
      		
      	
      	foreach ($classe as $key => $value) {
      	 ?>
      	
      	 	<tr>
      	 		<td><input type="radio" name="cle"><?php echo $key?></td>
                <td><input type="radio" name="valeur"><?php echo $value?></td>
            </tr>
         <?php  
      	 }
      	
      	  
      	  ?>
    	
    	
		<?php  
		if (isset($_POST["button"])) {
			$key=$_POST["cle"];
			$value=$_POST["valeur"];
			

		
        $key="value";
      
		
		foreach ($classe as $key => $value) {
			unset($classe[array_search($key, $classe)]);
      	 
      	 	
      	 }
      	 }

      	  
      	  ?>
      	</tbody>
      </table>
      <input type="submit" name="button" placeholder="supprimer">
  </form>

         <?php  
		if (($classe[0]=13)>($classe[1]=16)&&($classe[0]=13)>($classe[2]=10)) {
			echo "la note maximale est :".$classe[0]=13;
			}

		if (($classe[1]=15)>($classe[0]=13)&&($classe[1]=15)>($classe[2]=10)) {
				echo "la note maximale est :".$classe[1]=15;
			}
			echo "<br>";
		if(($classe[2]=10)>($classe[0]=13)&&($classe[2]=10)>($classe[1]=15)){
				echo "La note minimale est :".$classe[2]=10;
		};
		if (($classe[0]=13)<($classe[1]=16)&&($classe[0]=13)<($classe[2]=10)) {
			echo "la note minimale est :".$classe[0]=13;
			}

		if (($classe[1]=15)<($classe[0]=13)&&($classe[1]=15)<($classe[2]=10)) {
				echo "la note maximale est :".$classe[1]=15;
			}
		if(($classe[2]=10)<($classe[0]=13)&&($classe[2]=10)<($classe[1]=15)){
				echo "La note minimale est :".$classe[2]=10;
		};
		?>
				<table class="table table-striped tableau">
				    <thead>
				      <tr>
				        <th>Nom</th>
				        <th>Note</th>
				        
				         </tr>
				    </thead>
				    <tbody>
                  <?php  
					
					   
                        $classe = array(
									'said'=>13,
									'najat'=>15,
									'karim'=>10,
									 );
							$classeArrayObject = new ArrayObject($classe);
							$classeArrayObject->ksort();

							foreach ($classeArrayObject as $key => $value) {
								?>
							    <tr>
													      	 		<td><?php echo $key?></td>
													                <td><?php echo $value?></td>
													            </tr>;
							<?php						            
							}
							 ?>
													   
      	</tbody>
      </table>
       
		<table class="table table-striped tableau">
				    <thead>
				      <tr>
				        <th>Nom</th>
				        <th>Note</th>
				        
				         </tr>
				    </thead>
				    <tbody>
		
						<?php  
					
					   
                        $classe = array(
									'said'=>13,
									'najat'=>15,
									'karim'=>10,
									 );
							arsort($classe);
								foreach ($classe as $key => $value) {
								  ?>  
							                                    <tr>
													      	 		<td><?php echo $key?></td>
													                <td><?php echo $value?></td>
													            </tr>;
							<?php						            
							}
							 
							?>
						      	</tbody>
						      </table>
							
     
		
		
<?php  
echo "<h4>Je calcule la moyenne de la classe</h4>";
$moy=($classe[0]+$classe[1]+$classe[2])/3;
echo "<br>";
echo "La moyenne est de : ".$moy;

	
	 ?>
</div>

</body>
</html>