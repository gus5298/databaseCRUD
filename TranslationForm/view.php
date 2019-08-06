      <?php
      //including the database connection file
     require('includes/conn.inc.php');
   
       
      //fetching data in descending order (lastest entry first)
      //$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
      $result = mysqli_query($conn, "SELECT * FROM translation ORDER BY id DESC"); // using mysqli_query instead
      $result2 = mysqli_query($conn, "SELECT * FROM translation ORDER BY id DESC"); // using mysqli_query instead
      $sql =  "SELECT `id`, `key`, `german`, `english`, `context`, `text`, `language` FROM `translations`";
      $result = $conn->query($sql);
      $result2 = $conn->query($sql);
      ?>
       
      <html>
      <head>
          <title>Translation Review Form</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="css/style.css">
          <!--search-->
      <script>
      $(document).ready(function(){
          $('.search').on('keyup',function(){
              var searchTerm = $(this).val().toLowerCase();
              $('#myTable tbody tr').each(function(){
                  var lineStr = $(this).text().toLowerCase();
                  if(lineStr.indexOf(searchTerm) === -1){
                      $(this).hide();
                  }else{
                      $(this).show();
                  }
              });
          });
      });
      </script>
      <!--end of search-->
        </head>
       
      <body>
        <section id="banner" class="banner">
          <!--navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
             
            <h2 style= "color: white;">Translations Review Form - 
            <?php  $res2 = $result2->fetch_assoc();
             echo "Language: ".$res2['language'];?>
             </h2>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              
            </div>
          </div>
        </nav>
        <!--end of navbar-->
        </section>

      <div class="col-sm-1" style="margin-top: 70px">
        
                
      </div> 
      
       <div class="col-sm-12" style="margin-top: 5px">
       <input type="text" class="search"  onkeyup="myFunction()" placeholder="Search...">
          <table class= "table" id="myTable" style="border: 2px solid black;">
                <tr>
                    <td><b>id</b></td>
                    <td><b>Key</b></td>
                    <td><b>German</b></td>
                    <td><b>English</b></td>
                    <td><b>Context</b></td>
                    <td><b>Text</b></td>
                    <td></td>
                </tr>



        <?php

        
        
      
        if ($result->num_rows > 0) {
            //output data of each row
            // $res = $result->fetch_assoc();
            // echo "<h2>Language: ".$res['language']."</h2>";
            while($res = $result->fetch_assoc()) {
              
                 echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['key']."</td>";
                    echo "<td>".$res['german']."</td>";
                    echo "<td>".$res['english']."</td>";
                    echo "<td><i>".$res['context']."</i></td>";
                    echo "<td>".$res['text']."</td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
                echo "</tr>";
            }

        } else {
            echo "0 results";
        }

        $conn->close();

        ?>
        </table>
        </div>
      </body>
      </html>