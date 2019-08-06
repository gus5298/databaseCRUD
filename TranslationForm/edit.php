  <?php
  // including the database connection file
 require('includes/conn.inc.php');

   
  if(isset($_POST['update']))
  {    
      $id = $_POST['id'];
      
      $key=$_POST['key'];
      $german=$_POST['german'];
      $english=$_POST['english'];   
      $context = $_POST['context'];
      $text = $_POST['text'];    

      
      
      // checking empty fields
      // if(empty($eventName) || empty($eventDescription) || empty($eventType)) {            
      //     if(empty($eventName)) {
      //         echo "<font color='red'>Name field is empty.</font><br/>";
      //     }
          
      //     if(empty($eventDescription)) {
      //         echo "<font color='red'>Age field is empty.</font><br/>";
      //     }
          
      //     if(empty($eventType)) {
      //         echo "<font color='red'>Email field is empty.</font><br/>";
      //     }        
      // } else {    
      //     //updating the table
           $result = mysqli_query($conn, "UPDATE translations SET context='$context', text='$text', german='$german', english='$english' WHERE id=$id");
          
      //     //redirectig to the display page. In our case, it is index.php
           header("Location: view.php");
      // }
  }


  ?>
  <?php
  //getting id from url
  $id = $_GET['id'];
   
  //
  $sql = "SELECT * FROM translations WHERE id=$id";

  //selecting data associated with this particular id
  $result = mysqli_query($conn, $sql);

   
  while($res = mysqli_fetch_array($result)) 
  {
    $context = $res['context'];
      $text = $res['text'];
      $german = $res['german'];
      $english = $res['english'];
      $key = $res['key'];
  }
  ?>



  <html>
  <head>
      <title>Edit Data</title>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
      <section id="banner" class="banner">
          <!--navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <!-- <a class="navbar-brand img" href="/~b6025590/WAD/index.php"><img src="/~b6025590/WAD/img/logo2.png" class="img-responsive"
                style="width: 160px; margin-top: -10px;"></a> -->
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <h2 style= "color: white;">Translations Review Form</h2>
            </div>
          </div>
        </nav>
        <!--end of navbar-->
        </section>
      
      <br/><br/>
      
      <div class="col-sm-1" style="margin-top: 60px">
      <form name="form1" method="post" action="edit.php">
          <table >
              <tr> 
                  <td><b>id</b></td>
                  <td><input  type="text" name="id" value="<?php echo $id;?>"></td>
              </tr>
              <tr> 
                  <td><b>Key</b></td>
                  <td><input style="min-height:50px;min-width:1000px;" type="text" name="key" value="<?php echo $key;?>"></td>
              </tr>
              <tr> 
                  <td><b>German</b></td>
                  <td><input style="min-height:50px;min-width:1000px;" type="text" name="german" value="<?php echo $german;?>"></td>
              </tr>
               <tr> 
                  <td><b>English</b></td>
                  <td><input style="min-height:50px;min-width:1000px;"  type="text" name="english" value="<?php echo $english;?>"></td>
              </tr>
              <tr> 
                  <td><b>Context</b></td>
                  <td><input style="min-height:50px;min-width:1000px;" type="text" name="context" value="<?php echo $context;?>"></td>
              </tr>
              <tr> 
                  <td><b>Text</b></td>
                  <td><input style="min-height:50px;min-width:1000px;" type="text" name="text" value="<?php echo $text;?>"></td>
              </tr>
              <tr>
                  <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?> "></td>
                  <td><input type="submit" name="update" value="Update"></td>
              </tr>
          </table>
      </form>
      </div>
  </body>
  </html>