<html>
    <head>
        <style>
            .bg {
   
                background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/img3.png);
                    width:100%;
                     height:100%;
                      background-position: center;
                     background-repeat: no-repeat;
                      background-size: cover;
                      position: relative;
                       
                       
                  }
             table,td,tr,th{
                border:1px solid white;
                margin-left:66px;
                color:white;
                font-size:24px;
                border-collapse: collapse;
                margin-top:45px;
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
                <form action="marks.php" method="GET" style="margin-left:44px;">
                    <label>
                        <h1 style="color:white;"> Please enter your name</h1>
                        <input type="text"  name="username" minlength="3" maxlength="20" size="20" required>
                    </label>
                    <button type="submit" style="margin-left:12px;background:linear-gradient(to bottom right, #ff33cc 14%, #ff9933 101%); padding: 13px 16px;border:none; border-radius:51px;">Submit</button>  
                </form>
        </div>  
         
        
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
$sql = " SELECT tamil,english,maths,science,social FROM marks where name='$username'";

$result = $mysqli->query($sql);
}
$mysqli->close();
?>
        
        <table>
            <tr>
                <th>Subjects</th>
                <th>Marks</th>
            </tr>
            <?php     
            if(isset($_GET['username'])){     
            while($rows=$result->fetch_assoc())
            {
        ?>
            <tr>
                 <td>Tamil</td>
                 <td><?php echo $rows['tamil'];?></td>
           </tr>
           <tr>
               <td>English</td>
               <td><?php echo $rows['english'];?></td>
           </tr>
           <tr>
               <td>Maths</td>
               <td><?php echo $rows['maths'];?></td>
           </tr>
           <tr>
               <td>Science</td>
               <td><?php echo $rows['science'];?></td>
           </tr>
           <tr>
               <td>Social</td>
               <td><?php echo $rows['social'];?></td>
           </tr>
           <?php
                 }
                }
             ?>
       </table>
        </div>
       
    </body>
</html>
