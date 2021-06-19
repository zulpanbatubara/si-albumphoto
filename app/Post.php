<?php

namespace App;

Class Post extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil ()
    {
        $sql = "SELECT * FROM tb_post
        JOIN tb_category ON post.cat_id = tb_category.cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }
}