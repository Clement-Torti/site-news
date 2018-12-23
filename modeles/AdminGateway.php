<?php
	class AdminGateway {
		private $con;
		
		public function __construct(Connection $con) {
			$this->con = $con;
		}
		
		public function isAdmin(string $login, string $mdp): bool {
			$query = "SELECT COUNT(*) as nb FROM TAdmin WHERE login=:login AND mdp=:mdp";
			
			$this->con->executeQuery($query, [":login" => [$login, PDO::PARAM_STR],
											":mdp" =>[$mdp, PDO::PARAM_STR]]);
			
			$array = $this->con->getResults();
			$a = $array[0];
			

			return $a["nb"] == 1;
		}
	}
?>
