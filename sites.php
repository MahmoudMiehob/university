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
                       <div style="background-color:#EEE;" class=" col-sm-12"> 

  
 
          <h3 class="sites" >  مواقع ترجمة نصوص وملفات</h3>
                        
                           <br> 
             <hr style="background-color:blue;">
            <p style="font-weight: bold;line-height: 40px;">إﻟﻰ ﺟﻤﻴﻊ اﻟﺒﺎﺣﺜﻴﻦ واﻟﻄﻠﺒﺔ.٫  اﻟﺘﺮﺟﻤﺔ ﺗﻜﻮن ﺗﺮﺟﻤﺔ ﺣﺮﻓﻴﺔ ، ﻋﻨﺪﻣﺎ ﻧﺮﻳﺪ ﺗﺮﺟﻤﺔ ﺟﻤﻞ ﻃﻮﻳﻠﺔ ﻋﻠﻰ ﺟﻮﺟﻞ ﻳﻌﻨﻲ ﻳﺘﺮﺟﻢ ﻛﻠﻤﺔ ﻛﻠﻤﺔ ! ﻟﻬﺬا ﻧﻀﻊ ﺑﻴﻦ أﻳﺪﻳﻜﻢ ﻣﺠﻤﻮﻋﺔ ﻣﻦ ﻣﻮاﻗﻊ اﻟﺘﺮﺟﻤﺔ ﺗﻐﻨﻴﻚ ﻋﻦ اﺳﺘﺨﺪام ﻣﻮﻗﻊ ﺟﻮﺟﻞ ﻟﻠﺘﺮﺟﻤﺔ
           <br><hr style="background-color:blue;"> <br>                
<br>
                
                <div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">مواقع ترجمة</h5>
      <p  style="line-height: 40px;"  class="card-text">
           freetranslation  موقع   
        <br>
         يعتبر ايضا من اهم المواقع للترجمة غير الحرفية  <a href="https://www.freetranslation.com/" target="_blank">اضغط هنا</a>         
        
        
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title">مواقع ترجمة</h5>
      <p style="line-height: 40px;" class="card-text">
            wordference  موقع   
        <br>
         يعتبر من اهم المواقع للترجمة غير الحرفية 
          <br>
          <a href="https://www.wordreference.com/" target="_blank">اضغط هنا</a>          
        
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title">مواقع ترجمة</h5>
      <p style="line-height: 40px;" class="card-text">
             wordlingo  موقع   
        <br>
         يعتبر ايضا من اهم المواقع للترجمة غير الحرفية  
        
          <a href="http://www.worldlingo.com/" target="_blank">اضغط هنا</a>   </p>
     
    </div>
  </div>
</div>
                
   <br><hr style="background-color:blue;"> <br>                
                     

<div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <p  style="line-height: 40px;"  class="card-text">
 
             ﻣﻮاﻗﻊ ﺗﺒﺤﺚ ﻓﻴﻬﺎ ﻋﻦ ﻣﻌﺎﻧﻲ اﻟﻜﻠﻤﺎت واﻟﻤﺼﻄﻠﺤﺎت و ﻋﻦ اﻟﻜﻠﻤﺎت اﻟﺘﻲ ﻟﻬﺎ ﻧﻔﺲ اﻟﻤﻌﻨﻲ  
          <br><br>
            <a href="https://www.thesaurus.com/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
    
      <p style="line-height: 40px;" class="card-text">
          
             ﻣﻮﻗﻊ ﻳﻤﻜﻨﻚ ﻣﻦ ﺗﺮﺟﻤﺔ ﻣﺴﺘﻨﺪ ﻛﺎﻣﻞ أو ﻣﻘﺎﻟﺔ
          <br><br><br>
          <a href="http://www.worldlingo.com/" target="_blank">اضغط هنا</a>  
          
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
   
      <p style="line-height: 40px;" class="card-text">
             
          مواقع لترجمة الأبحاث والملفات
          <br><br><br>
          <a href="http://translation2.paralink.com/translator/default.asp" target="_blank">اضغط هنا</a>
        </p>
     
    </div>
  </div>
</div>
                     <br><hr style="background-color:blue;"> <br> 
                     <h3 style="text-align:center">مواقع لتصحيح الكتابة</h3>
                     <br>
                     

<div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <p  style="line-height: 40px;"  class="card-text">
            afterhedeadline  اولا موقع 
          <br>
           يعتبر من اهم المواقع لتصحيح الكتابة
          <br>
     <a href="http://www.afterthedeadline.com/" target="_blank">اضغط هنا</a>   
        </p>
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
    <p  style="line-height: 40px;"  class="card-text">
           prowritingaid  اولا موقع 
        <br>
        يعتبر ايضا من اهم المواقع لتصحيح الكتابة
        <br>
        <a href="https://prowritingaid.com/" target="_blank">اضغط هنا</a>  
          
          
        </p>
     
    </div>
  </div>                     
</div>
             <br><hr style="background-color:blue;"> <br> 
                           
                  <h3>أفضل المواقع لتحميل تطبيقات الأندرويد</h3>         
<div class="card-group">
  <div class="card">
    
    <div class="card-body">
     
 
       <h5>   Apkpure </h5>    
           <p  style="line-height: 40px;"  class="card-text">
          موقع
         مضمون لتحميل التطبيقات والألعاب للأندرويد
          <br>
            <a href="https://apkpure.com/ar/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
    
     
      <h5> uptodown  </h5>       
         <p style="line-height: 40px;" class="card-text">
        موقع
         مضمون ايضا لتحميل التطبيقات والألعاب للأندرويد
          <br>
            <a href="https://ar.uptodown.com/android" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
   
      
             
      <h5>Googleplay</h5>   
         <p style="line-height: 40px;" class="card-text">
          المتجر الغني عن التعريف لتحميل كل التطبيقات التي تحتاجها
          
          <br>
            <a href="https://support.google.com/googleplay/thread/29482954?hl=ar" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
</div>                       
                           
  <br><hr style="background-color:blue;"> <br> 
                           
                           
                    <h3>أفضل المواقع لتحميل تطبيقات الويندوز</h3>         
<div class="card-group">
  <div class="card">
    
    <div class="card-body">
     
 
       <h5>mutaz.com </h5>    
           <p  style="line-height: 40px;"  class="card-text">
          موقع
         مضمون لتحميل التطبيقات  للويندوز
          <br><br>
            <a href="https://www.mutaz.net/free-programs/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
    
     
      <h5> Ninite  </h5>       
         <p style="line-height: 40px;" class="card-text">
        موقع
           مضمون لتحميل تطبيقات الويندوز
          <br><br>
            <a href="https://www.arabes1.com/p/redirect.html?&&url=_https://ninite.com/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
   
      
             
      <h5>softpedia</h5>   
         <p style="line-height: 40px;" class="card-text">
          موقع لتحميل تطبيقات الويندوز
          
          <br><br>
            <a href="https://www.softpedia.com/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
</div>                                          
              <br><hr style="background-color:blue;"> <br>              
            
                    <h3>أفضل المواقع لتحميل  الكتب العلمية والروايات</h3>         
<div class="card-group">
  <div class="card">
    
    <div class="card-body">
     
 
       <h5>بوكس ستريم </h5>    
           <p  style="line-height: 40px;"  class="card-text">
          موقع
         مضمون لتحميل الكتب العلمية مجانا  
          <br><br>
            <a href="https://www.tahmil-kutubpdf.net/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
    
     
      <h5> مكتبة الكتب  </h5>       
         <p style="line-height: 40px;" class="card-text">
        
             لتحميل الكتب العلمية مجانا
          <br><br>
            <a href="https://www.pdf-books.org/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
   
      
             
      <h5>عصير الكتب</h5>   
         <p style="line-height: 40px;" class="card-text">
          موقع لقراءة لتحميل الكتب العلمية مجانا
          
          <br><br>
            <a href="https://www.booksjuice.com/" target="_blank">اضغط هنا</a>
          
        </p>
     
    </div>
  </div>
</div> 
                <br><hr style="background-color:blue;"> <br>            
                           
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