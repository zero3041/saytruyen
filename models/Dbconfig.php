<?php 
	class Database{
		private $hostname = 'localhost';
		private $username = 'root';
		private $password = '';
		private $dbname   = 'saytruyen';

		private $conn = NULL;
		private $result = NULL;

		public function connect(){
			$this->conn = new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
			if(!$this->conn){
				echo 'Kết nối lỗi';
				exit();
			}else{
				mysqli_set_charset($this->conn,'utf8');
			}
			return $this->conn;
		}
		
		public function execute($sql){
			$this->result = $this->conn->query($sql);
			return $this->result;
		}
		// Lay database
		public function getData()
		{
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
		}
		// Lay all data
		public function getAlldata()
		{
			if($this->result){
				return false;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}
		// Dem so ban ghi
		

		// them ban ghi
		public function InsertDatabase($tblTable)
		{
			$sql = 'INSERT INTO $tblTable() VALUES(NULL)';
		}
	}
?>