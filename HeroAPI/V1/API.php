<?php 
	require_once '../Includes/DbOperation.php';

	function isTheseParametersAvailable($params){
		$available = true; 
		$missingparams = ""; 
		
		//Montagem da estrutura
		foreach($params as $param){
			if(!isset($_POST[$param]) || strlen($_POST[$param])<=0){
				$available = false; 
				$missingparams = $missingparams . ", " . $param; 
			}
		}
		
		if(!$available){
			$response = array(); 
			$response['error'] = true; 
			$response['message'] = 'Parameters ' . substr($missingparams, 1, strlen($missingparams)) . ' missing';
			
			echo json_encode($response);
			
			die();
		}
	}
	
	$response = array();
	
	if (isset($_GET['apicall'])) {
		switch ($_GET['apicall']) {
			case 'createhero': //case 1
				isTheseParametersAvailable(array('name','realname','rating','teamaffiliation'));
				
				$db = new DbOperation();
				
				$result = $db->createHero(
					$_POST['name'], //$name
					$_POST['realname'], //$realname
					$_POST['rating'], //$rating
					$_POST['teamaffiliation'] //teamaffiliation
				);
				
				if ($result) {
					$response['error'] = false; 
					$response['message'] = 'Heroi adicionado com sucesso';
					$response['heroes'] = $db->getHeroes();
				} else {
					$response['error'] = true; 
					$response['message'] = 'Algum erro ocorreu por favor tente novamente';
				}
				break; 
			
			case 'getheroes': //case 2
				$db = new DbOperation();
				$response['error'] = false; 
				$response['message'] = 'Pedido concluido com sucesso.';
				$response['heroes'] = $db->getHeroes();
				break; 
			
			case 'updatehero': //case 3
				isTheseParametersAvailable(array('id','name','realname','rating','teamaffiliation'));
				$db = new DbOperation();
				$result = $db->updateHero(
					$_POST['id'],
					$_POST['name'],
					$_POST['realname'],
					$_POST['rating'],
					$_POST['teamaffiliation']
				);
				
				if ($result) {
					$response['error'] = false; 
					$response['message'] = 'Heroi atualizado com sucesso';
					$response['heroes'] = $db->getHeroes();
				} else {
					$response['error'] = true; 
					$response['message'] = 'Algum erro ocorreu por favor tente novamente';
				}
				break; 
			
			case 'deletehero': //case 4
				if (isset($_GET['id'])) {
					$db = new DbOperation();
					if ($db->deleteHero($_GET['id'])) {
						$response['error'] = false; 
						$response['message'] = 'Heroi excluido com sucesso';
						$response['heroes'] = $db->getHeroes();
					} else {
						$response['error'] = true; 
						$response['message'] = 'Algum erro ocorreu por favor tente novamente';
					}
				} else {
					$response['error'] = true; 
					$response['message'] = 'Nao foi possivel deletar, forneca um id por favor';
				}
				break; 
		}
	} else {
		$response['error'] = true; 
		$response['message'] = 'Chamada de API invalida';
	}
	
	echo json_encode($response); //saída linha a linha por json, $response é array com os dados