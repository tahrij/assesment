<?php
class MProgram extends CI_Model
{
    public $table = 'tbprogram';
    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // get all data
    function get_all()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table)->result();
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }

    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
}
