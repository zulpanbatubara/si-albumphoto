<?php

$photos = new App\Photos();
$rows = $photos->tampil();

?>

<h2>Daftar Photo Favorit</h2>

<table>
    <tr>
        <th>NO</th>
        <th>DATE</th>
        <th>TITTLE</th>
        <th>TEXT</th>
    </tr>
<?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['photos_id ']; ?></td>
        <td><?php echo $row['photos_date']; ?></td>
        <td><?php echo $row['photos_title']; ?></td>
        <td><?php echo $row['photos_text']; ?></td>
    </tr>
    <?php } ?>
</table>
