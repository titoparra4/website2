<?php
        try {

            require_once('includes/funciones/bdconexion.php');
               $sql = " SELECT * FROM  INV_INVITADOS";
               $resulatdo = $conn->query($sql);
            
        } catch (Exception $e) {
            $error = $e->getMessage();
           }
           ?>

         <section class="invitados contenedor seccion">
         <h2>Nuestros invitados</h2>
         <ul class="lista-invitados clearfix">
        <?php while($invitados = $resulatdo->fetch_assoc() ) {  ?>
        <li>
          <div class="invitado">
              <a class="invitado-info" href="#invitado<?php echo $invitados['INV_ID']; ?>">
            <img src="img/<?php echo $invitados['INV_IMAGEN']; ?>" alt="imagen invitado">
            <p><?php echo $invitados['INV_NOMBRE']." ".$invitados['INV_APELLIDO']; ?></p>
            </a>
          </div>
        </li>
        <div style="display:none;">
                <div class="invitado-info" id="invitado<?php echo $invitados['INV_ID']; ?>">
                    <h2><?php echo $invitados['INV_NOMBRE'] . " " . $invitados['INV_APELLIDO']; ?></h2>
                    <img src="img/<?php echo $invitados['INV_IMAGEN']; ?>" alt="Imagen invitado">
                    <p><?php echo $invitados['INV_DESCRIPCION']; ?></p>
                </div>
              </div>
        </div>
        <?php } ?>
        </ul>
        </section> 

        <?php
            $conn->close();
        ?>