<?php

class Empresa extends CI_Model
{

    public $table = 'empresas';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($id)
    {
        $empresa = $this->db->get_where($this->table, ['id_empresa' => $id]);
        return $empresa->custom_row_object(0, 'Empresa');
    }

    public function getAll($per_page, $page)
    {
        return $empresa = $this->db->get($this->table, $per_page, $page)->result();
    
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id_empresa' => $id]);
    }

    public function insert(array $data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update(array $data, $id)
    {
        return $this->db->update($this->table, $data, ['id_empresa' => $id]);
    }

}

?>