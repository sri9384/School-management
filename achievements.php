<html>
    <head>
        <style>
            .bg {
   
                background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/img4.jpg);
                    width:100%;
                     height:100%;
                      background-position: center;
                     background-repeat: no-repeat;
                      background-size: cover;
                      position: relative;
                       
                       
                  }
                  button:hover{
                color:white;
             }
        </style>
    </head>
    <body>
        <div class="bg">
            <h1 style="color:white;margin-left:66px;text-align:center;padding-top:22px;">PEG UNIVERSITY</h1>
              <!--form-->
               
              <div style="padding-top:54px;" >              
                <form action="achievements.php" method="GET" style="margin-left:44px;">
                    <label>
                        <h1 style="color:white;"> Please enter your name</h1>
                        <input type="text"  name="username" minlength="3" maxlength="20" size="20" required>
                    </label>
                    <button type="submit" style="margin-left:12px;background:linear-gradient(to bottom right, #ff33cc 14%, #ff9933 101%); padding: 13px 16px;border:none; border-radius:51px;">Submit</button>  
                </form>
        </div>  
        <!--mark displaying-->
        <h1 style="color:white;padding-left:44px;">
            Your achievements will be displayed below....
        </h1>
        <?php
        if(isset($_GET['username'])){
            $username=$_GET['username'];}
      
          $user = "root";
       $password = "";
     $database = "school";
$servername="localhost";
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
if(isset($_GET['username'])){
$sql = " SELECT achieve FROM profile where name='$username'";

$result = $mysqli->query($sql);

if(isset($_GET['username'])){     
    while($rows=$result->fetch_assoc())
    {      
        echo "<h2 style='color:white;margin-left:60px;'>" . $rows['achieve']. "</h2>";
    }}
$mysqli->close();
}
?>
        </div>
    </body>
</html>
