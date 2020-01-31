<?php

	class Kulkas
	{
		public $freezer = array();

		public function get($id_makanan)
		{

		}

		public function get_all()
		{

		}

		public function insert($makanan)
		{
			array_push($this->freezer, $makanan);
		}

		public function delete($id_makanan)
		{

		}
	}

	class Makanan
	{
		public $id_makanan;
		public $nama;
		public $harga;
		public $stok;
	}

	$batagor = new Makanan();
	$batagor->insert();

	$popice = new Makanan();
	$batagor->insert();

	$mie = new Makanan();
	$batagor->insert();
?>