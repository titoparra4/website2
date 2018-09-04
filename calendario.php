<?php include_once 'includes/templates/header.php'; ?>

     <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>
        <?php
        try {

            require_once('includes/funciones/bdconexion.php');
               $sql = " SELECT EVE_ID, EVE_NOMBRE, EVE_FECHA,EVE_HORA, CATE_EVENTO, CATE_ICONO, INV_NOMBRE, INV_APELLIDO ";
               $sql .= " FROM EVE_EVENTO ";
               $sql .= " INNER JOIN CATE_CATEGORIA_EVENTO ";
               $sql .= " ON EVE_EVENTO.CATE_CATEGORIA_ID = CATE_CATEGORIA_EVENTO.CATE_CATEGORIA_ID ";
               $sql .= " INNER JOIN INV_INVITADOS ";
               $sql .= " ON EVE_EVENTO.INV_ID = INV_INVITADOS.INV_ID ";
               $sql .= " ORDER BY EVE_ID ";
               $resulatdo = $conn->query($sql);
            
        } catch (Exception $e) {
            $error = $e->getMessage();
           }
           ?>

        <div class="calendario">

        <?php
            $calendario = array();
            while($eventos = $resulatdo->fetch_assoc() )
            { 
                $fecha = $eventos['EVE_FECHA'];

                $evento = array(
                    'Titulo' => $eventos['EVE_NOMBRE'],
                    'Fecha' => $eventos['EVE_FECHA'],
                    'Hora' => $eventos['EVE_HORA'],
                    'Categoria' => $eventos['CATE_EVENTO'],
                    'Icono' => $eventos['CATE_ICONO'],
                    'Invitado' => $eventos['INV_NOMBRE'] . " " . $eventos['INV_APELLIDO']
                );

                $calendario [$fecha] [] = $evento;
                
                ?>               

           <?php } //while de fetch_assoc ?>

                <?php
                    //Imprime todos los eventos
                    foreach($calendario as $dia => $lista_eventos){ ?>
                        <h3>
                            <i class="fa fa-calendar"></i>

                            <?php 
                            
                            setlocale(LC_TIME, 'spanish');
                            echo strftime( "%A, %d de %B del %Y", strtotime($dia)) ; ?>
                        </h3>
                          <?php 
                          foreach($lista_eventos
                           as $evento) { ?>

                            <div class="dia">
                                <p class="titulo"><?php echo $evento ['Titulo'];?></p>
                                <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $evento ['Fecha'] ." ". $evento['Hora'] ;?></p>
                                <p><i class="fa <?php echo $evento['Icono']; ?>" aria-hidden="true"></i>
                                <?php echo $evento ['Categoria'];?></p>
                                <p>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <?php echo $evento ['Invitado'];?></p>
                            </div>
                         <?php  } //fin foreach eventos?>  
                   <?php } //fin foreach de dias?>

        </div>
        <?php
            $conn->close();
        ?>
        
    </section>
 
    <?php include_once 'includes/templates/footer.php'; ?>
