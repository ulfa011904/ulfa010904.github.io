<?php

class absensiKaryawan extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
}
