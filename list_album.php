<p><a href="index.php?page=create_album">Create new album</a></p>
<?php
$query = 'SELECT * FROM albums';
$albums = mysqli_query($conn, $query) or die(mysqli_error($conn));

if(mysqli_num_rows($albums)>0) { ?>
    <div>
        <?php while($row = mysqli_fetch_assoc($albums)) { ?>
            <p style="border: 2px solid aquamarine; padding: 10px;">
                <a href="index.php?page=detail_album&id=<?php echo $row['id'];?>"><?php echo $row['name']; ?></a></p>
        <?php } ?>
    </div>
<?php }
?>
