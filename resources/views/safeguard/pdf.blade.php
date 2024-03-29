<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
        <div class="text-center">
            <img src="C:\laragon\www\softinvv\resources\views\images\velas-logo.png" class="rounded">
      </div>
        <p class="h6 text-right">Fecha: ___ /___ /______</p>
        <p class="text-left"><small>Velas Vallarta Resorts, Nte 585, Marina Vallarta</small></p>
        <p class="text-left"><small>CP. 48354 Puerto Vallarta, Jal. Tel: (322) 226 8673</small></p>
        <p class="text-left"><small>Empleado: <u><strong>{{$safeguard->employee->name}}</strong></u></small></p>
        <p class="text-left"><small>No. de empleado:<u><strong>{{$safeguard->employee->controlnum}}</strong></u></small></p>
        <p class="text-justify"><small>Recibí de Hotel Velas Vallarta el siguiente equipo. Pertenecientes a la siguiente informacion <u><strong>N/S: {{$safeguard->product->serialnumber}}, modelo: {{$safeguard->product->model}}, marca: {{$safeguard->product->trademark}}, pertenecientes al folio {{$safeguard->id}}.</strong></u></small></p>
        <p class="text-justify"><small>Dicho equipo estará bajo mi custodia y responsabilidad para el desarrollo exclusivo de mis funciones de trabajo dentro de la empresa, me comprometo a cuidarlo y devolverlo en cuanto me lo soliciten o en caso de que mi relación de trabajo de por terminado. Este equipo lo entregare al departamento de TECNOLOGIAS DE LA INFORMACION (TI) o a quien este último designe.</small></p>
        <p class="text-justify"><small>Esta estrictamente prohibido divulgar información relacionada con clientes, procesos, métodos, estrategias, planes proyectos, datos técnicos, de mercado o información confidencial. Reconozco que cualquier documento(s) o bien de la empresa son de la propiedad exclusiva de Velas Resorts. Por lo tanto, es compromiso el dar un uso adecuado a cualquier tipo de información, en cualquier tipo de formato, para beneficio de Velas Resorts y la seguridad de nuestros clientes. Me obligó a no retener información por medios electrónicos y/o copias de documento alguno, ya sean impresos o por cualquier otro medio de reproducción (manual, electrónico o mecánico).</small></p>
        <p class="text-justify"><small>Para casos de pérdida del equipo o daño, el departamento de TI evaluara y dictaminara la correspondiente al mismo, que será de la suma aproximada de <u><strong>${{$safeguard->product->price}}.00 MXN</strong></u></small></p>
        <p class="text-justify"><small>Cualquier daño y/o perdida, el departamento de TI evaluara y dictaminara el costo de la perdida o insumo que será cubierta con cargo al Responsable, ya sea deduciéndolo de su sueldo quincenal o aplicando el criterio que el departamento de  Contraloría del Hotel en común acuerdo con el jefe de área indique. Cada mes el equipo entregado será evaluado verificando integridad física y lógica del dispositivo.</small></p>
        <p class="text-justify"><small>NOTA: este resguardo sustituye a cualquier otro firmado con anterioridad y tendrá una vigencia hasta en tanto no se tenga la devolución del equipo y accesorios mencionados.</small></p>
        <table style="width: 99%">
            <tbody>
                <tr class="well" style="padding: 1%">
                    <th style="" class="text-center"><small>Responsable</small></th>
                    <td style="" class="text-center"><small> Jefe de area </small></td>
                </tr>
                <tr class="well" style="padding: 1%">
                    <td style="padding: 1%">_____________________________</td>
                    <td style="padding: 1%" class="text-right">_____________________________</td>
                </tr>
                <tr class="well" style="padding: 1%">
                    <th style="padding: 1%" class="text-center"> <small>{{$safeguard->employee->name}}</small></th>
                    <td style="padding: 1%" class="text-center"> <small>{{$safeguard->employee->boss->name}}</small> </td>
                </tr>
            </tbody>
        </table>
        <p class="text-center"> <small>Dpto. de TI</small> </p>
        <p class="text-center">_____________________________</p>
        <p class="text-center"> <small>Ing. Salvador Ramos</small> </p>


    </body>
</html>
