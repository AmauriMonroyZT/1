<html>
 <head>
  <title>Menu</title>
  <style type="text/css">
   
   * {
    margin:0px;
    padding:0px;
   }
   
   #header {
    margin:auto;
    width:500px;
    font-family:Arial, Helvetica, sans-serif;
   }
   
   ul, ol {
    list-style:none;
   }
   
   .nav > li {
    float:left;
   }
   
   .nav li a {
    

    background-color:#DF3A01;
    color:#fff;
    text-decoration:none;
    padding:10px 12px;
    display:block;
   }
   
   .nav li a:hover {
    background-color:#434343;
   }
   
   .nav li ul {
    display:none;
    position:absolute;
    min-width:140px;
   }
   
   .nav li:hover > ul {
    display:block;
   }
   
   .nav li ul li {
    position:relative;
   }
   
   .nav li ul li ul {
    right:-140px;
    top:0px;
   }
   
  </style>
  <style type="text/css">
    html, body {
        height: 100%;
        width: 100%;/*El video se mueeve*/
        padding: 0;
        margin: 0;
    }
 
    #full-screen-background-image {
        z-index: -999;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
    }
</style>
 </head>
 <body>
  <div id="header">
   <ul class="nav">
    <li><a href="Cuatri.php">Inicio</a></li>
    <li><a href="">Java</a>
     <ul>
      <li><a href="enlace youtube.php">Instalacion y Hola Mundo</a></li>
      
      
       <ul>
        
       </ul>
      </li>
     </ul>
    </li>
    <li><a href="">Programacion Estructurada</a>
     <ul>
      
      <li><a href="">Conceptos</a></li>
      <li><a href="">Metodos de ordenacion</a></li>
      <li><a href="">TOP-DOWN</a></li>
     </ul>
    </li>
    <li><a href="">PHP</a></li>
   </ul>
  </div>
  <section>
  <article>
    
    <img alt="full screen background image" src="programenu.jpg" id="full-screen-background-image" /> 
  </article>
</section>
 </body>
</html>﻿