<?php
$query = 'SELECT * FROM photos LEFT JOIN albums ON albums.id = photos.album_id WHERE album_id='.$_GET['id'];
$photos = mysqli_query($conn, $query) or die(mysqli_error($conn));

if(mysqli_num_rows($photos)>0) { ?>
   <div class="row">
        <?php while($row = mysqli_fetch_assoc($photos)) { ?>
            <div class="col-md-4">
                <p>Album: <strong><?php echo $row['name']?></strong></p>
                <div class="thumbnail">
                  <a href="<?php echo $row['file']; ?>" target="_blank">
                    <img src="<?php echo $row['file']; ?>" style="width:100%">
                    <div class="caption">
                      <p><?php echo $row['description']?></p>
                    </div>
                  </a>
                </div>
            </div>
    </div>
<?php } ?>
<?php } ?>

<input type="button" value="Bookmark this album" onclick="bookmarkAlbum('<?php echo $_GET['id']?>')"/>