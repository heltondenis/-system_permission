	<?php 

	class Users {

		private $pdo;
		private $id;
		private $permission;

		public function __construct($pdo) {
			$this->pdo = $pdo;
		}

		public function doLogin($email,$password) {
			$sql = "SELECT * FROM user WHERE email = :email AND password = :password";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':password', $password);
			$sql->execute();

			if ($sql-> rowCount() > 0) {
				$sql = $sql->fetch();

				$_SESSION['id'] = $sql['id'];

				return true;
			}
			return false;
		}
	


	public function setUser($id) {
		$this->id = $id;

		$sql = "SELECT * FROM user WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			$this->permission = explode(',', $sql['permission']);

		}
}
}
	?>

