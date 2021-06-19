<?php

namespace App;

Class Photos extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil ()
    {
        $sql = "SELECT * FROM photos
        JOIN tb_post ON photos.post_id = tb_photos.post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }
}