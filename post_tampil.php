<?php

$post = new App\Post();
$rows = $post->tampil();

?>

<h2>Pilihan Album Post</h2>
<table>
    <tr>
        <th>NO</th>
        <th>TANGGAL</th>
        <th>SLUG</th>
        <th>TITTLE</th>
        <th>TEXT</th>
    </tr>
<?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_date']; ?></td>
        <td><?php echo $row['post_slug']; ?></td>
        <td><?php echo $row['post_title']; ?></td>
        <td><?php echo $row['post_text']; ?></td>
    </tr>
    <?php } ?>
</table>