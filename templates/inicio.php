<?php
    /* Template Name: Inicio */ 
    get_header();
?>
  <section id="banner" class="template-section">
  <?php echo do_shortcode( '[rev_slider alias="slider-1"][/rev_slider]' ); ?>
</section>
    <section id="somos" class="template-section">
    <p class="blanco">¡Somos expertos en proveer servicios <br>de transporte de vehículos!  </p>
    </section>
  <section id="elegir" class="template-section">
  <div class="contenedor">
  <h2>¿Por qué elegirnos?</h2>
 <div class="grid">
       
       <div class="col3 primera">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p1.png" alt="Logo">
          <p class="primero"><strong>Camiones equipados</strong> con sistema de seguridad satelital. </p>
       </div>
       <div class="col3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p2.png" alt="Logo">
            <p><strong>Precios competitivos </strong> y sin recargos ocultos.  </p>
       </div>
       <div class="col3">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p3.png" alt="Logo">
          <p><strong>Personal cualificado</strong> e  infraestructura adecuada.  </p>
       </div>
       <div class="col3">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p4.png" alt="Logo">
          <p><strong>El mejor servicio</strong> en translado de vehículos. </p>
       </div>
       
</div>
      </div>
</section>
 <section id="testimonios" class="template-section">
 
         <div class="contenedor">
  <h2>Testimonios</h2>
 <div class="grid">
       
    <div class="col">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fernanda.png" alt="Logo">
     </div>
     <div class="col">
     <h3>Fernanda Pérez</h3>
     <p>Excelente servicio y trato al cliente. Muy profesionales y mi auto llego en excelentes condiciones.</p>

<p>¡Lo recomiendo ampliamente!</p>
     </div>
</div>
     </div>
</section>
 <section id="faq" class="template-section">
 
         <div class="contenedor">
  <h2>Preguntas Frecuentes</h2>
   <h3>1- ¿Cuánto cuesta?	</h3>
   <p>El costo es variado dependiendo de la unidad, el origen y el destino.</p>
   <h3>2-¿Cuánto tarda en llegar mi vehículo?</h3>
   <p>El tiempo de traslado varía dependiendo del servicio contratado, el origen y el destino; con un rango de 3 a 12 días.</p>
   <h3>3-¿Qué es un servicio consolidado?</h3>
   <p>El servicio consolidado permite transportar sus vehículos dentro de un camión, haciendo paradas en las principales ciudades de la república mexicana para la carga y descarga de las unidades.</p>
   <h3>4-¿Qué es un servicio exclusivo?
</h3>
   <p>Es un servicio es de puerta a puerta en el cual el equipo utizado para la realizacion del traslado es exclusivante para trasladar su o sus unidades.</p>
   <h3>5-¿En dónde se cargan los vehículos?

</h3>
   <p>En las pensiones ubicadas en las principales ciudades de la república mexicana o en lugares estratégicos para realizar las maniobras.</p>
   <h3>6-¿En qué lugares se consolida?	</h3>
   <p>En las diversas ciudades de paso.</p>
   <h3>7-¿Puedo llevar objetos dentro de mi vehículo?</h3>
   <p>Lo recomendable es no llevar nada.</p>
       <h3>8-¿Qué documentos necesito para trasladar mi vehículo?</h3>
   <p>
-Copia de Factura <br>
-Copia de identificación<br>
-Tarjeta de Circulación<br>
-Datos de Origen y Destino
</p>
    
     </div>
</section>

 <section id="nosotros" class="template-section">
 
         <div class="contenedor">
  
 <div class="grid">
       
    <div class="col col_especial">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acerca.jpg" alt="Logo">
     </div>
     <div class="col col_especial2">
     <h2 class="blanco">Acerca de Nosotros</h2>
     <p class="blanco">Somos una organización de jóvenes Mexicanos, con más de 10 años de experiencia dedicándonos al transporte de vehículos a nivel nacional.</p>
     <div class="center">
     <a href="#contacto" class="btn">Saber más</a>
     </div>
     </div>
</div>
     </div>
</section>
<section id="contacto" class="template-section">
<div class="contenedor">
  
 <div class="grid">
       
    <div class="col col_especial">
    <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
    <h3>¡Cotice su transporte ahora!</h3>
    <?php echo do_shortcode( '[caldera_form id="CF5df7e1a0810fd"]' ); ?>
     
     </div>
     <div class="col col_especial2">
     <p class="blanco bl1">Le ofrecemos soluciones para los traslados de vehículos con el mejor servicio.</p>
     <div class="grid" >
       <div class="col datos">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/direccion.png" alt="Logo">
        
        </div>
        <div class="col datos">
    <p class="blanco bl2">Colonia Centro,<br>
Cuernavaca Morelos.</p>
        </div>
        </div>
         <div class="grid" >
       <div class="col datos">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel.png" alt="Logo">
        
        </div>
        <div class="col datos">
    <p class="blanco bl2">777-243-20-63</p>
        </div>
        </div>
         <div class="grid" >
       <div class="col datos">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whats.png" alt="Logo">
        
        </div>
        <div class="col datos">
   <a href="https://wa.me/527772115979"><p class="blanco bl2">777-211-59-79</p></a>
    
        </div>
        </div>
        <div class="grid" >
       <div class="col datos">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/correo.png" alt="Logo">
        
        </div>
        <div class="col datos">
   <a href="mailto:contacto@logisticayaefa.com?Subject=Contacto"><p class="blanco bl2">contacto@logisticayaefa.com
</p></a>
    
        </div>
        </div>
        
        <p class="blanco"><span>SÍGUENOS: </span> </p>
       <a href="">  <img class="social" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.png" alt="Logo"> </a>
     </div>
</div>
     </div>
</section>
<?php 
    get_footer();
?>
