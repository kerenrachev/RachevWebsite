<?php 
if(isset($_POST['submit'])){
    $to = "rachevsites@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $subject = "לקוח פוטנציאלי";
    $subject2 = "תודה שהשארת פרטים ב-Rachev אתרים";
    $message2 = "תודה על פנייתך ל-Rachev בניית אתרים.נחזור אליך בהקדם האפשרי.";

    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
    $headers .= "CC: rachevsites@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
    $message = '<html><body>';
    $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
     $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
     $message .= "<tr style='background: #eee;'><td><strong>שם:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
     $message .= "<tr><td><strong>אימייל:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
     $message .= "<tr><td><strong>מספר טלפון:</strong> </td><td>" . strip_tags($_POST['telephone']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
   
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<script>alert("תודה רבה, ניצור קשר בהקדם!")</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    	<link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180012077-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180012077-1');
</script>
    </head>
   
<body>

    <div class="loader" id="loader"></div>
    <script>
var loader = document.getElementById('loader');
loader.style.display='block';
window.addEventListener ("load", function() {
    //Hide the spinner after 2 seconds
setTimeout(function(){loader.style.display = 'none';}, 2000);

});</script>
    <div class="content">
         <div class="parent-container" id="parent-container" style="position: relative;top: 0;">
    
         <div id="video-container" style="z-index: -1;position: absolute; top: 0;left: 0; transition-delay: 500ms;overflow-y: hidden" >
             <img id="backgroung-image" class="fade-ine" src="images/mainBackround1.jpg" style="min-width:100%;max-height:100% ;position: fixed; left: 0; top: 0; "> 
        
        </div>
        
        <div class="videoRGBA" style="height: 100%; width: 100%;position: relative;background: rgba(0,0,0,0.5); top: 0;right: 0;left: 0;direction: rtl; text-align: center">
            
        <img id="brush" src="images/brush.png" style="position: relative; top: 15vw; left: 50px"> 
        <div class="title" >
            <h1>RACHEV</h1>
            <h2>בניית אתרים</h2>
            </div>
            
             
        </div>                           
        
    </div>
    <div class="mainInfo" style=" position: relative; overflow-x: hidden;overflow-y: hidden;background-color: rgb(232,232,232)">
        <div class="rgbaMainInfro" style="position: absolute;width: auto;height: 100%; background-color: rgba(240,240,240,0.5)"></div>
         <div class="fade-in" style="text-align: center">
        <h3>אנחנו מציעים אתרי תדמית, פורטפוליו ודפי נחיתה במחירים שוברי שוק.   </h3>
            <b3>
     
       <br><br><br>
        <a class="mainInfoButtons" style="font-family: 'Assistant', sans-serif;
    ">התאמה לכול סוגי המסכים.</a> <br><br>
             
             <a class="mainInfoButtons" style="font-family: 'Assistant', sans-serif;
    ">שירות דומיין ואיחסון למשך שנה כלולים בחבילה. </a> <br><br>
             <a class="mainInfoButtons" style="font-family: 'Assistant', sans-serif;
    ">מבטיחים להיות בקשר לכול בעיה.</a> <br><br>
             <a class="mainInfoButtons" style="font-family: 'Assistant', sans-serif;
    ">רוצים לא פחות מהמושלם בשבילך.</a>
                </div>
        
         
    </div>
    <div class="fade-in2 ">
        <img id="prices-image" src="images/backRound4.jpg" >
       <center><h3>אז מה המחיר?</h3><br><br>
        <h4>המחיר תלוי בסוג האתר וכמות הפיצ'רים שהלקוח מבקש.</h4>
           <br><br>
           <h3>הסוגים שאנחנו מציעים הם:</h3>
           <br><br>
              <h5>אתר תדמית</h5>
              <h6>אתר תדמית יכיל מספר עמודים שיציגו את העסק שלך והשירותים שלך. <br></h6>
              <h7>המחיר:</h7><h6> עד 3500 ש"ח תלוי במספר העמודים.</h6>
           
            <br><br>
              <h5>אתר פורטפוליו</h5>
              <h6>אתר פורטפוליו בדרך כלל יורכב מעמוד או שניים, כאשר הדגש המרכזי הוא העיצוב. 
מתאים בדרך כלל לעוסקים בתחומים וויזואליים יותר- צלמים, מעצבים, אריכלים ועוד. <br></h6>
              <h7>המחיר:</h7><h6> עד 3000 ש"ח. ( תלוי במספר העמודים ).</h6>
           
            <br><br>
              <h5>עמוד נחיתה</h5>
              <h6>זוהי הדרך הנפוצה ביותר לפרסום עסקים ושירותים למינהם. 
כלומר- גם אם יש לך אתר, זה לא אומר שאין צורך גם בעמוד נחיתה. <br>
עמוד נחיתה נועד על מנת למקד את את המשתמש לביצוע רכישה במהירות האפשרית.<br></h6>
              <h7>המחיר:</h7><h6> מחיר- עד 1400 ש"ח תלוי באורך העמוד, ללא פירסום .</h6>
           <br><br>
           <h9>כחלק מהשירות שלנו, אנחנו דואגים לכם לדומיין, חבילת איחסון ואבטחת SSL בסיסית לאתר שלכם למשך שנה.</h9>
           </center>
        <div class="contact">
               <form action="" class="form" style="position: relative" method= "post" >
                <input id= "input" name="name" type="name" placeholder="שם:" required/>
                <input id= "input" name="email" type="email" placeholder="אימייל:" required/>
                <input id= "input" name="telephone" type="tel" placeholder="מספר טלפון" required/>
                <button id="button" name="submit" type="submit" >שלח פרטים</button>
            
            </form>
        </div>
        
    </div>
          <div class="stickyContact">
                 
    <a  class="whats-app" href="https://wa.me/+9720524017711" target="_blank">
       <img src="images/whatssap.png" style:"decoration: none; ">
    </a>
    <a class="email-icon" href="mailto:rachevsites@gmail.com" style:"decoration: none; "><img src="images/emailIcon.png"></a>
   <div class="call-me" style="position:fixed;right:0;top:0;">
        <a class="clickToCall" href="tel:+972524017711" style="  padding: 10px 25px;background-color:rgba(44,130,201,0.8);text-decoration: none; color:white;font-family: 'Assistant', sans-serif;;font-size:20px; display: inline-block;">התקשרו עכשיו: 052-4017711</a>
       
       
   </div>
            </div>  
      <script src="js/observers.js"></script>
        </div>
    </div>
</body>
</html>