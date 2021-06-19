<?php

namespace App;

class Category extends Koneksi {

    public function __construct ()
    {
        parent::__construct ();
    }

    public function tampil ()
    {
        $sql = "SELECT * FROM tb_category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }

    public function input()
    {
        $i_name = $_POST['i_name'];
        $i_keterangan = $_POST['i_keterangan'];

        $sql = "INSERT INTO tb_category VALUES (NULL, :cat_name, :cat_keterangan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $i_name);
        $stmt->bindParam(":cat_keterangan", $i_keterangan);
        $stmt->execute();
    }
    public function edit()
    {
        $sql = "SELECT * FROM tb_category WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }
    public function update()
    {
        $i_name = $_POST['i_name'];
        $i_keterangan = $_POST['i_keterangan'];
        $i_id = $_POST['i_id'];

        $sql = "UPDATE tb_category SET cat_name=:cat_name, cat_keterangan=:cat_keterangan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $i_name);
        $stmt->bindParam(":cat_keterangan", $i_keterangan);
        $stmt->bindParam(":cat_id", $i_id);
        $stmt->execute();
    }
}