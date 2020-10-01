<?php 

class M_Status extends Model{
	public function tambah($data){
		$query = $this->insert('status', ['status' => $data]);
		$query = $this->execute();
		return $query;
	}

	public function lihat(){
		$query = $this->get('status');
		$query = $this->execute();
		return $query;
	}

	public function lihat_id($id){
		$query = $this->get_where('status', ['id_status' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function ubah($status, $id){
		$query = $this->update('status', ['status' => $status], ['id_status' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function cek($id){
		$query = $this->get_where('status', ['id_status' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function hapus($id){
		$query = $this->delete('status', ['id_status' => $id]);
		$query = $this->execute();
		return $query;
	}
}