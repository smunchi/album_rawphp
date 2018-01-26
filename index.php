<!DOCTYPE html>
<html lang="en">
<head>
  <title>Album Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script>
      $(document).ready(function() {
          
      });
      
      function bookmarkAlbum(id) {
          $.ajax({
           url:'add_bookmark.php',
           type:'POST', 
           dataType:'JSON',
           data:{id:id},
           success:function(response) {
               alert(response.success);
           }
          });
      }
  </script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <?php include 'sidebar.php'; ?>      
    </div>

    <div class="col-sm-9" style="padding-top:20px;">
      <?php 
        if(isset($_GET['page']) && file_exists($_GET['page'].'.php')) {
            include('debug.php');
            include('flash_message.php');
            include('dbcon.php');
            include($_GET['page'].'.php');
        } else {
            include('welcome.php');
        }
      ?>        
    </div>
  </div>
</div>

<?php include 'footer.php';?>
</body>
</html>
