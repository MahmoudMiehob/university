
<?php
if(isset($_GET['title'])){
    
    echo filter_var($_GET['title'], FILTER_SANITIZE_NUMBER_INT);
}
?>
<?php
if(isset($_GET['link'])){
    
    $link = $_GET['link'];
    
    $allInc = array('sites.php');
    if(in_array($link, $allInc)){
        include($link);
    }else{
        
        echo 'you dont have permission to include this file';
    }
}
?>



<footer>
   <div class="footer wow backInUp">
       
       	<div class="container text-center">
     		      <div class="row">
     			  <div class=" col-sm-4">
                      <h3 class="MNM">MNM ITE</h3>
                      <p style="  display: inline; " >facebook : </p><a style="  display: inline; " href="https://www.facebook.com/profile.php?id=100010194910703" target="_blank">mahmoud miehob</a><br>
                      <p style="  display: inline; " >instagram : </p><a style="  display: inline; " href="https://www.instagram.com/mahmoudmiyhob/" target="_blank">mahmoud miyhob</a><br>
                      <p style="  display: inline; " >Gmail : </p><a style="  display: inline; " href="mailto:mahmoudmiehob@gmail.com" target="_blank">mahmoudmiehob@gmail.com</a>
                      </div>
                      
                      
                  <div class=" col-sm-4">
                      <p> Data sources </p>
                      <ul style="text-align:left;">
                          
                         
                           <li><a style=" text-decoration: none;" href="https://www.manaraa.com/post/3579/%D8%A3%D9%81%D8%B6%D9%84-%D8%A7%D9%84%D9%85%D9%86%D8%B5%D8%A7%D8%AA-%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A%D8%A9-[%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9-%D9%88%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85%D9%8A%D8%A9]" target="_blank">Almanara </a></li>
                             <li><a style=" text-decoration: none;" href="https://www.zarkachat.com/" target="_blank"> Zarkashat </a></li>
                           <li><a style=" text-decoration: none;" href="">programming</a></li>
                            <li><a style=" text-decoration: none;" href="https://www.ibelieveinsci.com/" target="_blank">I believe since</a></li>
                           <li><a style=" text-decoration: none;" href="https://www.syr-res.com/" target="_blank">syrian Researchers</a></li>
                      </ul>
                      </div>
                    <div class=" col-sm-4">
                     <p style="padding-top:5px;" > last update </p><br>
                         <time datetime="2020-7-15" >15/7/2020</time><br><br>
                                     <a href="https://www.facebook.com/profile.php?id=100010194910703" target="_blank"><img style="  border: 1px; border-radius: 10px;" src="download (1).png" alt="facebook"width="50px";height="50px";> </a>
                                           <a href="https://www.instagram.com/mahmoudmiyhob/" target="_blank"><img style="  border: 1px; border-radius: 10px;" src="download (7).jfif" alt="instagram"width="50px";height="50px"> </a>
                                            <a href="mailto:mahmoudmiehob@gmail.com" target="_blank"><img style="  border: 1px; border-radius: 10px;" src="download.jfif" alt="facebook"width="50px";height="50px"> </a>
                                        
                      </div>
                      
                      
                      
               
          </div>
       </div>
    </div>
          



</footer>




<script src="wow.min.js"></script>
<script>new WOW().init();</script>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
 <script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
     </body>

</html>