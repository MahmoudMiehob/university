<?php

include "header.php";
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

	<div class="container text-center">
        
     		      <div class="row">

     			  <div  class="col-sm-12"> 
                      <div class="unv">
                          
                          
                          
  <div class="card-group">
  <div  class="card">
    
    <div  class="card-body">
        <a href="https://sana.sy/?cat=201" target="_blank"> <img src="wtal.jfif" alt="وزارة التعليم العالي" width="310px" height="300px"></a>
               <br>
     <a href="https://sana.sy/?cat=201" target="_blank">  <h4 style="font-style: italic;
                                border: 1px;
                                border-radius: 10px;
                                background-color: blue;
                                opacity: .8;
                                color: white;
                                height:65px;
                                padding-top:10px" >وزارة التعليم العالي والبحث العلمي</h4></a>
        
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
 
         <a href="http://moed.gov.sy/site/" target="_blank"> <img src="wtis.jfif" alt="وزارة اتربية" width="310px" height="300px"></a>
        <br>
      <a href="https://sana.sy/?cat=201" target="_blank">  <h4 style="font-style: italic;
                                border: 1px;
                                border-radius: 10px;
                                background-color: blue;
                                opacity: .8;
                                color: white;
                                height:65px;
                                padding-top:10px" >وزارة التربية في الجمهورية العربية السورية</h4></a>
    </div>
  </div>                     
</div>                        
     <br>
            <hr style="background-color:blue;"><br>                    
                          
                          
<h2>جامعات الجمهورية العربية السورية</h2>

<br>
                          <h4>الجامعات الحكومية</h4>
                           <hr style="background-color:blue;"><br>
<div class="card-group">
  <div class="card">
   <a href="http://damascusuniversity.edu.sy/" target="_blank"> <img src="damascus.jfif" class="card-img-top" alt="Damascus" style=" width:240px "></a>
    <div class="card-body">
      <h5 class="card-title">Damascus university</h5>
    </div>
  </div>
  <div class="card">
    <a href="https://alepuniv.edu.sy/" target="_blank"><img src="aleppo.jfif" class="card-img-top" alt="Aleppo" style="width:240px"></a>
    <div class="card-body">
      <h5 class="card-title">Aleppo university</h5>
      
    </div>

  </div>
  <div class="card">
    <a href="http://www.tishreen.edu.sy/" target="_blank"><img src="tishreen.jfif" class="card-img-top" alt="tishreen" style=" width:240px" ></a>
    <div class="card-body">
      <h5 class="card-title">Tishreen university</h5>
    
    </div>

  </div>
</div>
                          
<br>

<br>
        
 <div class="card-group">
  <div class="card">
      <a href="http://tartous-univ.edu.sy/" target="_blank"> <img src="tartous.jfif" class="card-img-top" alt="tartous" style=" width:240px"></a>
    <div class="card-body">
      <h5 class="card-title">Tartous university</h5>
    </div>
  </div>
  <div class="card">
      <a href="https://albaath-univ.edu.sy/" target="_blank"> <img src="albaath.jfif" class="card-img-top" alt="Albaath" style=" width:240px"></a>
    <div class="card-body">
      <h5 class="card-title">Alpaath university</h5>
      
    </div>

  </div>
  <div class="card">
      <a href="https://www.marefa.org/%D8%AC%D8%A7%D9%85%D8%B9%D8%A9_%D8%A7%D9%84%D9%81%D8%B1%D8%A7%D8%AA" target="_blank"> <img src="Forat.jpg" class="card-img-top" alt="Syrian Virtual university"style="border-radius:50%; width:240px"></a>
    <div class="card-body">
      <h5 class="card-title">ٍAlforat university</h5>
    
    </div>

  </div>
</div>   

<br>

<br>
                     




                      </div>
                 </div>
        </div>
</div>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col"><a href="index.php">Home</a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
 <td><a href="careers.php">careers</a></td>
    <tr>
      <td><a href="sites.php">sites</a></td>
    </tr>
    <tr>
 <td><a href="courses.php">courses</a></td>
    </tr>
    <tr>
 <td><a href="university.php">university</a></td>
    </tr>
  </tbody>
</table>

<?php

include "footer.php";
?>