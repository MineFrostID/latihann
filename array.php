<?php

	$gudang = array();
	$makanan = new Makanan();

	print_r($makanan->insert());
	
	
	class Makanan
	{

		public function get($id_makanan)
		{
			
		}
		public function get_all()
		{
			echo "
				<table border='1'>
					<tr>
						<td>
						
						</tr>
					</td>
				</table>
			";
		}
		public function insert()
		{
			$this->data = new Data_Makanan();
			array_push($this->data->id_makanan,0,1,2);
			array_push($this->data->nama,"Batagor","Pop Ice","MieGoreng");
			array_push($this->data->harga,5000,3000,7000);
			array_push($this->data->stok,20,20,50);
			$id = $this->data->id_makanan;
			$nama = $this->data->nama;
			$harga = $this->data->harga;
			$stok = $this->data->stok;
			$data_makanan = array($id,$nama,$harga,$stok);
			print_r($data_makanan);
		}
		public function delete($id_makanan)
		{
			
		}
	}

	class Data_Makanan
	{

		public $id_makanan = array();
		public $nama = array();
		public $harga = array();
		public $stok = array();

	}


?>