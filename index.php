<?php 

	$data = array(
		'turma' => array(
			'curso' => array(
				'tipo' =>array()
			)
		),
		'aluno' => array(
			'usuario' => array(
				'endereco' => array()
			)
		)
		
	);
	//inner join turma on turma_has_aluno.turma_idturma = turma.idturma
	$data2 = array(
		'turma_has_aluno' => array(
			'curso' => array(
			),
			'usuario'=> array()
		)
	);
	function setJoin($variables = array(), $res = "", $chave = "")
	{
		
			foreach ($variables as $keys => $values) {
				
						$res .= "<br> inner join ".$keys. " on ".$chave.".".$keys."_id".$keys. " = ".$keys.".id".$keys;
						if (!empty($values)) {
							$res .= setJoin($values, "", $keys);
						}
					
			}
		
		return $res;
	}

	echo setJoin($data, "", "turma_has_aluno");



 ?>