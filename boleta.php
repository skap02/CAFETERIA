<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEDIDOS</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<?php
        $NO ="";
        $DI ="";
        $DN ="";
        $FP ="";
        $N1 ="";
        $D1 ="";
        $C1 ="";
        $D2 ="";
        $C2 ="";
        $N2 ="";
        $D3 ="";
        $C3 ="";
        $N3 ="";

     
      ?>
   


    
<CENTER><form action="conexion3.php" method="POST">
<td class="logo">
                <td>
                    <img type="imagen" src="cafeee.png">
                </td>
            </td>
            <CENTER><H1 class="titulo">Boleta de Venta</H1></CENTER>
        <table>
            <tr>
                <td>Nombre</td>
            </tr>
            <tr>
<td>
    <input type="text7" name="NOM_CLI" value="<?php echo $NO;?>" pattern=[A-Z\s]{3,30} title="El formato debe ser con letras mayusculas y minimo mas de 3 caracteres"></td>
</tr>
<tr>
                <td>Dirección</td>
            </tr>
            <tr>
<td>
    <input type="text6" name="DIR_CLI" value="<?php echo $DI;?>" ></td>

            </tr>
            <tr>
                <td>Documento de Identidad</td>
            </tr>
            <tr>
            <td>
    <input type="text5" name="DNI_CLI" value="<?php echo $DN;?>"></td>

            </tr>
            <tr>
                <td>Fecha de Emisión</td>
            </tr>       
            <tr>
                <td>
                <td>
    <input type="date" name="FEC_PED" min="2000-01-02" value="<?php echo $FP;?>">
                </td>           
            </tr> 
            <tr>
                <td>Descripción</td>
            </tr>
            <tr>
            <td>
    <input type="text9" name="DES_UNO" value="<?php echo $D1;?>" ></td>
            </tr>
            <tr>
                <td><input type="text1" name="COS_UNO" value="<?php echo $C1;?>" placeholder="S/."></td>
             </tr>
             <tr>
            <td>
    <input type="text10" name="CAN_UNO" value="<?php echo $N1;?>" pattern=[0-50]{1,9} placeholder="N°" title="El formato debe ser con números y maximo de 8 caracteres"></td>

            </tr>
             
            <tr>
            <td>
    <input type="text9" name="DES_DOS" value="<?php echo $D2;?>" ></td>
            </tr>
            <tr>
                <td><input type="text1" name="COS_DOS" value="<?php echo $C2;?>" placeholder="S/."></td>
             </tr>
             <tr>
            <td>
    <input type="text10" name="CAN_DOS" value="<?php echo $N2;?>" pattern=[0-50]{1,9} placeholder="N°" title="El formato debe ser con números y maximo de 8 caracteres"></td>

            </tr>

          <tr>
            <td>
    <input type="text9" name="DES_TRE" value="<?php echo $D3;?>" ></td>
            </tr>
            <tr>
                <td><input type="text1" name="COS_TRE" value="<?php echo $C3;?>" placeholder="S/."></td>
             </tr>
             <tr>
            <td>
    <input type="text10" name="CAN_TRE" value="<?php echo $N3;?>" pattern=[0-50]{1,9} placeholder="N°" title="El formato debe ser con números y maximo de 8 caracteres"></td>
            </tr>
                
            
            <tr>
                <td><input type="submit" value="GENERAR BOLETA">
                </td>
            </tr>
       
        </form></CENTER></table>
</body>
</html>