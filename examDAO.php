<?php 	
include 'connect.php';
class examDAO{
	public static function getAnswers()
	{
		try{
			$ansque = mysql_query("SELECT result from questionare order by id");
			$array = array();
			while ($result = mysql_fetch_assoc($ansque)) {
				$array[] = $result['result'];
			}
			return $array;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
		return false;
	}
	public static function computeScore($answer)
	{
		try{
			$correct = self::getAnswers();
			if($correct === false){
				error_log("answer are not ready");
				return false;
			}if(count($correct) != strlen($answer)){
				error_log("wew");
				return false;
			}
				
			$val = 0;
			for ($a = 0; $a < 10 ; $a++) { 
				if($correct[$a] == $answer[$a]){
					$val++;
				}
			}
			return $val;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
	}
}
 ?>