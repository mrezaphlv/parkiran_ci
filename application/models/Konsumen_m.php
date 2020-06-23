<?php 
class Konsumen_m extends CI_Model{
	
	function getdata(){
		$this->db->from('konsumen');
$query = $this->db->get(); 
return $query;
		
	}
		function input_data($isi,$tbl){
		$this->db->insert($tbl,$isi);
	}
	function hapus($idd){
		$hasil=$this->db->query("DELETE FROM Konsumen WHERE id='$idd'");
		return $hasil;
	}
	function update($whr,$upd){
		$this->db->where($whr);
		$this->db->update('konsumen',$upd);
	}
}
 ?>