<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/plain; charset=windows-1251" />
<meta name="keywords" content=" Контактная информация " />
<meta name="description" content=" Контактная информация  " />
<title> Контактная информация </title>
<meta name="robots" content="INDEX,FOLLOW"> 
<meta name="revisit-after" content="2 week"> 
<meta http-equiv="content-language" content="English"> 
<meta name="author" content="russianheadshop">  
<meta name="publisher" content="www.russianheadshop.com">  
<meta name="made" content="info@russianheadshop.com">  
<meta name="copyright" content="russianheadshop.com">  
<meta name="audience" content="All">  
<meta name="page-topic" content="Russianheadshop - legal drugs"> 
<link href="../css/cssEf.css" rel="stylesheet" type="text/css" />
</head>
<body background="../img/background1.jpg">

<table width="1000" border="0" cellspacing="20" cellpadding="0" bgcolor="#36B630" align="center">
  <tr>
    <td>
<!--1 tabl-->    
    
    
<table width="1000" border="0" cellspacing="20" cellpadding="0" align="center" bgcolor="#F2CA28">
  <tr>
    <td>
<!--2 tabl-->    
    
<table width="1000" border="0" cellspacing="20" cellpadding="0" align="center" bgcolor="#CA1F00">
  <tr align="left" valign="top">
    <td>
<!--3 tabl-->    
    
    
    
 <table width="1000" border="0" cellspacing="20" cellpadding="0" align="center" bgcolor="#F2CA28">
  <tr>
    <td>
<!--4 tabl-->    
   
    
    
 <table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
<?php /*?> header <?php */?> 
<?php include "../rus/block/header.php";  ?>

  </tr>
  <tr>
    <td><img src="../img/menu1.jpg" width="1000" height="5"></td>
  </tr>
 
<tr>
    <td><table width="1000" border="0" cellspacing="0" cellpadding="0" align="right">
  
<?php /*?> menuUP <?php */?> 
<? include "../rus/block/menuup.php"; ?>

  
</table>
</td>
</tr>

  <tr>
    <td><img src="../img/menu1.jpg" width="1000" height="5"></td>
  </tr>

    <td><table width="1000" height="500" border="0" cellspacing="10" cellpadding="10">
      <tr>
        <td width="200" valign="top" class="menuright"><table width="200" border="0" cellspacing="5" cellpadding="5" class="menuUP a">
        
<?php /*?> menuright <?php */?> 
<? include "../rus/block/menuright.php"; ?>


</table>
</td>
        
        <td width="721" align="left" valign="top"><p><strong>Свяжитесь с нами:</strong></p> <br />
          <p><strong>через Email:</strong> <a href="mailto:info@russianheadshop.com" style="color:#000">info@russianheadshop.com</a></p>
         <br /><br /> <p><strong>через форму:</strong></p>
<?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) { 
        // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменной $_POST['mess'] все аналогично 
        $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000);
	     $phone = substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000); 
	     $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
	     $website = substr(htmlspecialchars(trim($_POST['website'])), 0, 1000); 

 
        // $from - от кого 
        $from = substr(htmlspecialchars(trim($_POST['sendermail'])), 0, 1000);
	  // $to - кому отправляем 
	  $mess = $mess."\n
	  
Name: ".$name."\nMail: ".$from."\nMobile: ".$phone."\nWebsite: ".$website;
        $to = 'info@russianheadshop.com'; 
        // функция, которая отправляет наше письмо. 
        mail($to, 'Mail from website form'.$title, $mess, 'Content-type:text/plain; charset = windows-1251','Content-type:text/plain; charset = windows-1251\r\nFrom:'.$from); 
        echo '<br><br><h3 align="center">Благодарим вас за ваше письмо, мы свяжемся с вами в ближайшее время.</h3><br><br>'; 
} 
?> 
         
          
          
          
<form action="contact.php" method="post"> 
              <div align="left" style="margin-left: 55px;"> 
              <table cellpadding="3" cellspacing="0" border="0" >
              <tr>
                 <td>
                    <p> Ваше полное имя: </p>
                 </td>
                 <td>
                    <input type="text" name="name" size="20" value="<?php  echo $name  ?>"><br/>
                 </td>
              </tr>
              <tr>
                 <td>
                   <p>  Ваш email адрес: </p>
                 </td>
                 <td>
              <input type="text" name="sendermail" size="20" value="<?php  echo $from  ?>"><br/> 
                 </td>
              </tr>
              <tr>
                 <td>
                   <p>  Ваш контактный телефон: </p>
                 </td>
                 <td>
              <input type="text" name="phone" size="20" value="<?php  echo $phone  ?>"><br/> 
                 </td>
              </tr>
              <tr>
                 <td>
                   <p>  Ваш веб сайт: </p>
                 </td>
                 <td>
              <input type="text" name="website" size="20" value="<?php  echo $website  ?>"><br/> 
</td>
</tr>
</table>
            <p>  Введите ваш текст: </p>
              <textarea name="mess" rows="10" cols="68"></textarea> 
              <br /> 
              <div style="padding-left:250px;">
              <input type="submit" value="Oтправить" name="submit"></div> </div>
             
</form>
          
         <br /><br /> 
          
          <p><strong>Как нас найти:</strong></p>
          
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><iframe width="300" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Talbot+St,+Dublin,+County+Dublin,+Ireland&amp;sll=53.34968,-6.259289&amp;sspn=0.013808,0.038581&amp;ie=UTF8&amp;ll=53.350872,-6.255319&amp;spn=0.003843,0.006437&amp;z=16&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Talbot+St,+Dublin,+County+Dublin,+Ireland&amp;sll=53.34968,-6.259289&amp;sspn=0.013808,0.038581&amp;ie=UTF8&amp;ll=53.350872,-6.255319&amp;spn=0.003843,0.006437&amp;z=16" style="color:#0000FF;text-align:left">View Larger Map</a></small></td>
    <td width="375" height="285" align="right" valign="top" ><img src="../img/bus card side 2jpg.jpg" width="375" height="285" alt="map" /><br /></td>
  </tr>
</table>
      
          
          </td>
      </tr>
    </table></td>
 
   <tr>
    <td><img src="../img/menu1.jpg" width="1000" height="5"></td>
  </tr>

 
   <tr>
    
<?php /*?> footer <?php */?>    
<? include "../rus/block/footer.php"; ?>    
    
    
  </tr>

</table>
   
    
<!--4 tabl-->    
    </td>
  </tr>
</table>
    
    
    
    
    
<!--3 tabl-->    
    </td>
  </tr>
</table>
    
    
<!--2 tabl-->    
    </td>
  </tr>
</table>
    
    
    
<!--1 tabl-->   
    </td>
  </tr>
</table>
</body>
</html>