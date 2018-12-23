<?php

	class UserModel {
		
		public function afficherNews() {
			global $con;

			$newsGw = new NewsGateway($con);
			
			return $newsGw->getAllNews();

		}
		
		public function connexion(string $l, string $m): bool {
			global $mdp, $login;
		
			if($m == $mdp && $l == $login) {
				return true;
			} else {
				return false;
			}
		}
		
	}
?>
