<?php
require "Conexion.php";

class DevuelveActores extends Conexion{
	public function DevuelveActores(){
		parent::__construct();
		
	}
	public function get_actores(){
		$resultado=$this->conexion_db->query('SELECT * FROM ACTOR');
		$actores = $resultado->fetch_all(MYSQLI_ASSOC);
		return $actores;
	}
}
?>