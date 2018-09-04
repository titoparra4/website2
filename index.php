<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
      <h2>La Mejor conferencia de diseño web en español</h2>
      <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc blandit purus non rhoncus venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat at nibh eget rhoncus. Vivamus mattis tortor et massa condimentum, non blandit lacus posuere. Mauris ac nunc ex.
      </p>
    </section><!--Seccion-->
    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">
        </video>
      </div><!--Contenedor Video-->
      <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-evento">
                <h2>Programa del evento</h2>
                <nav class="menu-programa">
                  <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
                  <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
                  <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
                </nav>
                  <div id="talleres" class="info-curso ocultar clearfix">
                    <div class="detalle-evento">
                      <h3>HTML, CSS3 y JavaScript</h3>
                      <p><i class="fa fa-clock-o" aria-hidden="true"></i> 16:00 hrs</p>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                      <p><i class="fa fa-user" aria-hidden="true"></i> Tito parra</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Responde Web Desing</h3>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                        <p><i class="fa fa-user" aria-hidden="true"></i> Tito parra</p>
                      </div>
                      <a href="#" class="button float-right">Ver todos</a>
                  </div>   
                  <div id="conferencias" class="info-curso ocultar clearfix">
                      <div class="detalle-evento">
                        <h3>Como ser freelancer</h3>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                        <p><i class="fa fa-user" aria-hidden="true"></i> Falcao Garcia</p>
                      </div>
                      <div class="detalle-evento">
                          <h3>Tecnologias del futuro</h3>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i> Jamez Rodriguez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>  
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                          <h3>Diseño UI/UX para moviles</h3>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i> Juan Cuadrado</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañna</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Santiago Arias</p>
                          </div>
                          <a href="#" class="button float-right">Ver todos</a>
                      </div>             
            </div>
        </div>
      </div>
    </section><!--Programa-->

    <?php include_once 'includes/templates/invitados.php'; ?>

    <div class="contador  parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero"></p>Invitados</li>
          <li><p class="numero"></p>Talleres</li>
          <li><p class="numero"></p>Dias</li>
          <li><p class="numero"></p>Conferencias</li>
        </ul>
      </div>
    </div>
    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por día</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadisllos Gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
          <li>
              <div class="tabla-precio">
                <h3>Todos los dias</h3>
                <p class="numero">$50</p>
                <ul>
                  <li>Bocadisllos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <a href="#" class="button">Comprar</a>
              </div>
            </li>
            <li>
                <div class="tabla-precio">
                  <h3>Pase por 2 días</h3>
                  <p class="numero">$45</p>
                  <ul>
                    <li>Bocadisllos Gratis</li>
                    <li>Todas las conferencias</li>
                    <li>Todos los talleres</li>
                  </ul>
                  <a href="#" class="button hollow">Comprar</a>
                </div>
              </li>
        </ul>
      </div>
    </section>
    <div id="mapa" class="mapa"></div>
    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra pellentesque lacinia. Donec blandit arcu eget ex ullamcorper, nec cursus quam sagittis</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Tito Parra <span>Ingeniero de Software</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra pellentesque lacinia. Donec blandit arcu eget ex ullamcorper, nec cursus quam sagittis</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Tito Parra <span>Ingeniero de Software</span></cite>
            </footer>
          </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra pellentesque lacinia. Donec blandit arcu eget ex ullamcorper, nec cursus quam sagittis</p>
              <footer class="info-testimonial clearfix">
                <img src="img/testimonial.jpg" alt="imagen testimonial">
                <cite>Tito Parra <span>Ingeniero de Software</span></cite>
              </footer>
            </blockquote>
          </div>
        </div>
    </section>
    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al newletter</p>
        <h3>gdlwebcamp</h3>
        <a href="#" class="button transparente">Registro</a>
      </div>
    </div>
    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li><p id="dias" class="numero"></p> días</li>
          <li><p id="horas" class="numero"></p> horas</li>
          <li><p id="minutos" class="numero"></p> minutos</li>
          <li><p id="segundos" class="numero"></p> segundos</li>
        </ul>
      </div>
    </section>
    <?php include_once 'includes/templates/footer.php'; ?>