<?php
require_once "inc/config.php";
$category = new App\Category();
$id = $_GET['id'];
$row = $category->edit($id);
?>

<h2>Silahkan Perbaharui Data Kategory Anda</h2>
<form action="category_proses.php" method = "POST">
<input type="hidden" name=i_id value="<?php echo $id; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="i_name"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><input type="text" name="i_keterangan"></td>
        </tr>
        <tr>
            <td>UPDATE</td>
            <td><input type="submit" name="b_edit" value="UPDATE"></td>
        </tr>
    </table>
</form>