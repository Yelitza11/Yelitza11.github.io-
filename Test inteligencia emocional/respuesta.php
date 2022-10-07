<?php

$v = [0, 0, 0, 0, 0];
$v1 = ['a', 'b', 'c'];
$v2 = ['a', 'b', 'c'];


if (isset($_POST['enviar'])) { //se conecta con el botón enviar

    $ca = 0;
    $cb = 0;
    $cc = 0;

    for ($i = 0; $i < 45; $i++) {
        $var;
        if ($i == 0) {
            $var = $_POST['r1'];
        }
        if ($i == 1) {
            $var = $_POST['r2'];
        }
        if ($i == 2) {
            $var = $_POST['r3'];
        }
        if ($i == 3) {
            $var = $_POST['r4'];
        }
        if ($i == 4) {
            $var = $_POST['r5'];
        }
        if ($i == 5) {
            $var = $_POST['r6'];
        }
        if ($i == 6) {
            $var = $_POST['r7'];
        }
        if ($i == 7) {
            $var = $_POST['r8'];
        }
        if ($i == 8) {
            $var = $_POST['r9'];
        }
        if ($i == 9) {
            $var = $_POST['r10'];
        }
        if ($i == 10) {
            $var = $_POST['r11'];
        }
        if ($i == 11) {
            $var = $_POST['r12'];
        }
        if ($i == 12) {
            $var = $_POST['r13'];
        }
        if ($i == 13) {
            $var = $_POST['r14'];
        }
        if ($i == 14) {
            $var = $_POST['r15'];
        }
        if ($i == 15) {
            $var = $_POST['r16'];
        }
        if ($i == 16) {
            $var = $_POST['r17'];
        }
        if ($i == 17) {
            $var = $_POST['r18'];
        }
        if ($i == 18) {
            $var = $_POST['r19'];
        }
        if ($i == 19) {
            $var = $_POST['r20'];
        }
        if ($i == 20) {
            $var = $_POST['r21'];
        }
        if ($i == 21) {
            $var = $_POST['r22'];
        }
        if ($i == 22) {
            $var = $_POST['r23'];
        }
        if ($i == 23) {
            $var = $_POST['r24'];
        }
        if ($i == 24) {
            $var = $_POST['r25'];
        }
        if ($i == 25) {
            $var = $_POST['r26'];
        }
        if ($i == 26) {
            $var = $_POST['r27'];
        }
        if ($i == 27) {
            $var = $_POST['r28'];
        }
        if ($i == 28) {
            $var = $_POST['r29'];
        }
        if ($i == 29) {
            $var = $_POST['r30'];
        }
        if ($i == 30) {
            $var = $_POST['r31'];
        }
        if ($i == 31) {
            $var = $_POST['r32'];
        }
        if ($i == 32) {
            $var = $_POST['r33'];
        }
        if ($i == 33) {
            $var = $_POST['r34'];
        }
        if ($i == 34) {
            $var = $_POST['r35'];
        }
        if ($i == 35) {
            $var = $_POST['r36'];
        }
        if ($i == 36) {
            $var = $_POST['r37'];
        }
        if ($i == 37) {
            $var = $_POST['r38'];
        }
        if ($i == 38) {
            $var = $_POST['r39'];
        }
        if ($i == 39) {
            $var = $_POST['r40'];
        }
        if ($i == 40) {
            $var = $_POST['r41'];
        }
        if ($i == 41) {
            $var = $_POST['r42'];
        }
        if ($i == 42) {
            $var = $_POST['r43'];
        }
        if ($i == 43) {
            $var = $_POST['r44'];
        }
        if ($i == 44) {
            $var = $_POST['r45'];
        }
        //contador
        if ($var == 'a') {
            $ca++;
        }
        if ($var == 'b') {
            $cb++;
        }
        if ($var == 'c') {
            $cc++;
        }
    }

    //Método burbuja para organizarlo del mayor al menor
    $v[0] = $ca;
    $v[1] = $cb;
    $v[2] = $cc;
    $v2[0] = $ca;
    $v2[1] = $cb;
    $v2[2] = $cc;

    for ($i = 0; $i < 5 - 1; $i++) {
        for ($j = $i + 1; $j < 4; $j++) {
            if ($v[$i] < $v[$j]) {
                $aux = $v[$i];
                $v[$i] = $v[$j];
                $v[$j] = $aux;
            }
        }
    }
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del test</title>
    <link rel="shortcut icon" href="img/psicologia.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->


</head>

<body>

    <!--APARTADO DE IMAGEN CON LAPICERO-->
    <header>
        <div class="logo">
            <img src="img/psicologia.png" alt="logo">
        </div>
        <nav>
            <a href="index.php">Inicio</a>

        </nav>
        <section class="textos-header">
            <h1>Test de inteligencia emocional</h1>
            <h2>Lic. Psic. Miriam Alejandra Mendez Velis</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros">
            <div>
                <h2 class="titulo">Resultados del test vocacional
                    <hr>
                </h2><br>
                <h3>
                   <?php
                   /* for ($i = 0; $i < 3; $i++) {

                        echo $v1[$i] . " = " . $v2[$i] . "<br>";
                    }
                    echo "<br><br>" */

                    ?>

                </h3>
                <!--<h3>Tu puntaje es: <?php /* echo $v[0]. " y tu otro puntaje es de " . $v[1]; */?></h3><br>-->

                <h3>El total de nunca es: <?php echo $v[0]; ?></h3><br>
                <h3>El total de algunas veces es: <?php echo $v[1]; ?></h3><br>
                <h3>El total de siempre es: <?php echo $v[2]; ?></h3><br>

            </div>
        </section>

        <section class="fondo">
            <div class="contenedor sobre-nosotros">
                <h2>Resultados</h2><br>

                <h3>A las respuestas NUNCA le corresponden 0 puntos</h3>
                <h3>A las respuestas ALGUNAS VECES le corresponden 1 punto</h3>
                <h3>A las respuestas SIEMPRE le corresponden 2 puntos</h3>
                <br>

                <h2>Puntuaciones</h2><br>

                <h3>Entre 0 y 20 puntos: MUY BAJO </h3>
                <h3>Entre 21 y 35 puntos: BAJO</h3>
                <h3>Entre 36 y 45 puntos: MEDIO-BAJO</h3>
                <h3>Entre 46 y 79 puntos: MEDIO-ALTO </h3>
                <h3>Entre 80 y 90 puntos: MUY ALTO</h3>
            </div>
        </section><br>

        <section class="clientes contenedor">
            <h2 class="titulo">El significado de las puntuaciones</h2>
            <div class="cards">
                <div class="card">
                    <div class="contenido-texto-card">
                        <h4>MUY BAJO</h4>
                        <p>Con esta puntuación debes saber que todavía no conoces suficientemente qué emociones son las que vives, no valoras adecuadamente tus capacidades, que seguramente tienes. Son muchas las habilidades que no pones en práctica, y son necesarias para que te sientas más a gusto contigo mismo y para que las relaciones con la gente sean satisfactorias.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="contenido-texto-card">
                        <h4>BAJO</h4>
                        <p>Con esta puntuación tus habilidades emocionales son todavía escasas. Necesitas conocerte un poco mejor y valorar más lo que tú puedes ser capaz de hacer. Saber qué emociones experimentas, cómo las controlas, cómo las expresas y como las identificas en los demás es fundamental para que te puedas sentir bien, y desarrollar toda tu personalidad de una manera eficaz.</p>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="clientes contenedor">
            <div class="cards">
                <div class="card">
                    <div class="contenido-texto-card">
                        <h4>MEDIO-BAJO</h4>
                        <p>Casi lo conseguiste. Con esta puntuación te encuentras rayando lo deseable para tus habilidades emocionales. Ya conoces muchas cosas de lo que piensas, haces y sientes y, posiblemente, de cómo manejar tus emociones y comunicarte con eficacia con los demás. No obstante, no te conformes con este puntaje conseguido.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="contenido-texto-card">
                        <h4>MEDIO-ALTO</h4>
                        <p>No está nada mal la puntuación que has obtenido. Indica que sabes quién eres, cómo te emocionas, cómo manejas tus sentimientos y cómo descubres todo esto en los demás. Tus relaciones con la gente las llevas bajo control, empleando para ello tus habilidades para saber cómo te sientes tú, cómo debes expresarlo y también conociendo cómo se sienten los demás, y qué debes hacer para mantener relaciones satisfactorias con otras personas.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="clientes contenedor">
            <div class="cards">
                <div class="card">
                    <div class="contenido-texto-card">
                        <h4>MUY ALTO</h4>
                        <p>Eres un superhéroe de la emoción y su control. Se diría que eres número 1 en eso de la INTELIENCIA EMOCIONAL. Tus habilidades te permiten ser consciente de quién eres, qué objetivos pretendes, qué emociones vives, sabes valorarte como te mereces, manejas bien tus estados emocionales y, además, con más mérito todavía, eres capaz de comunicarte eficazmente con quienes te rodean, y también eres único/a para solucionar posconflictos interpersonales que cada día acontecen.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>232 118 1231</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>mmeyvel80@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Martínez de la Torre, Ver</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Universidad Veracruzana | Equipo 6</h2>
    </footer>


</body>

</html>