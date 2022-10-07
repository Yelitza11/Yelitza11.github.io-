<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST DE INTELIGENCIA EMOCIONAL</title>
    <link rel="shortcut icon" href="img/psicologia.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>

    <!--APARTADO DE IMAGEN CON LAPICERO-->
    <header>
        <!--LOGO DE PSICOLOGÍA-->
        <div class="logo">
            <img src="img/psicologia.png" alt="logo">
        </div>
        <nav>
            <!--BARRA DE NAVEGACIÓN-->
            <a href="#">Inicio</a>
          
        </nav>
        <section class="textos-header">
            <h1>Test de inteligencia emocional</h1>
            <h2>Lic. Psic. Miriam Alejandra Méndez Velis</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
   
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Test<hr></h2>
            <div class="contenedor-sobre-nosotros">
                
                <form method="POST" action="respuesta.php">

                    <h2>Comportamiento</h2>
                    <br>
                    <!--PREGUNTAS-->
                    <!--1-->
                    <h3>1.-Me conozco a mí mismo, sé lo que pienso, lo que
                        siento y lo que hago.</h3>
                        <input type="radio" name="r1" value="a"> a) Nunca <br>
                        <input type="radio" name="r1" value="b"> b) Algunas veces <br>
                        <input type="radio" name="r1" value="c"> c) Siempre <br>
                        <br>
                    <!--2-->
                    <h3>2.-Soy capaz de auto motivarme para aprender,
                        estudiar, aprobar, conseguir algo.
                        </h3>
                        <input type="radio" name="r2" value="a"> a) Nunca <br>
                        <input type="radio" name="r2" value="b"> b) Algunas veces <br>
                        <input type="radio" name="r2" value="c"> c) Siempre <br>
                        <br>
                    <!--3-->
                    <h3>3.-Cuando las cosas me van mal, mi estado de ánimo
                        aguanta hasta que las cosas vayan mejor.</h3>
                        <input type="radio" name="r3" value="a"> a) Nunca <br>
                        <input type="radio" name="r3" value="b"> b) Algunas veces <br>
                        <input type="radio" name="r3" value="c"> c) Siempre <br>
                        <br>
                    <!--4-->
                    <h3>4.-Llego a acuerdos razonables con otras personas
                        cuando tenemos posturas enfrentadas.</h3>
                    <input type="radio" name="r4" value="a"> a) Nunca <br>
                    <input type="radio" name="r4" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r4" value="c"> c) Siempre <br>
                    <br>
                    <!--5-->
                    <h3>5.-Sé qué cosas me ponen alegre y qué cosas me
                        ponen triste.</h3>
                    <input type="radio" name="r5" value="a"> a) Nunca <br>
                    <input type="radio" name="r5" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r5" value="c"> c) Siempre <br>
                    <br>
                    <!--6-->
                    <h3>6.-Sé lo que es más importante en cada momento.</h3>
                    <input type="radio" name="r6" value="a"> a) Nunca <br>
                    <input type="radio" name="r6" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r6" value="c"> c) Siempre <br>
                    <br>
                    <!--7-->
                    <h3>7.-Cuando hago las cosas bien me felicito a mí
                        mismo.</h3>
                    <input type="radio" name="r7" value="a"> a) Nunca <br>
                    <input type="radio" name="r7" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r7" value="c"> c) Siempre <br>
                    <br>
                    <!--8-->
                    <h3>8.-Cuando los demás me provocan
                        intencionadamente soy capaz de no responder.</h3>
                    <input type="radio" name="r8" value="a"> a) Nunca <br>
                    <input type="radio" name="r8" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r8" value="c"> c) Siempre <br>
                    <br>
                    <!--9-->
                    <h3>9.-Mi fijo en el lado positivo de las cosas, soy
                        optimista.</h3>
                    <input type="radio" name="r9" value="a"> a) Nunca <br>
                    <input type="radio" name="r9" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r9" value="c"> c) Siempre <br>
                    <br>
                    <!--10-->
                    <h3>10.-Controlo mis pensamientos, pienso lo que de
                        verdad me interesa.</h3>
                    <input type="radio" name="r10" value="a"> a) Nunca <br>
                    <input type="radio" name="r10" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r10" value="c"> c) Siempre <br>
                    <br>
                    <!--11-->
                    <h3>11.-Hablo conmigo mismo, en voz baja claro.</h3>
                    <input type="radio" name="r11" value="a"> a) Nunca <br>
                    <input type="radio" name="r11" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r11" value="c"> c) Siempre <br>
                    <br>
                    
                    <!--12-->
                    <h3>12.-Cuando me piden que diga o haga algo que me
                        parece inaceptable me niego a hacerlo.</h3>
                    <input type="radio" name="r12" value="a"> a) Nunca <br>
                    <input type="radio" name="r12" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r12" value="c"> c) Siempre <br>
                    <br>

                    <!--13-->
                    <h3>13.-Cuando alguien me critica injustamente me
                        defiendo adecuadamente con el diálogo.</h3>
                    <input type="radio" name="r13" value="a"> a) Nunca <br>
                    <input type="radio" name="r13" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r13" value="c"> c) Siempre <br>
                    <br>

                    <!--14-->
                    <h3>14.-Cuando me critican por algo que es justo lo acepto
                        porque tienen razón.</h3>
                    <input type="radio" name="r14" value="a"> a) Nunca <br>
                    <input type="radio" name="r14" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r14" value="c"> c) Siempre <br>
                    <br>

                    <!--15-->
                    <h3>15.-Soy capaz de quitarme de la mente las
                        preocupaciones que me obsesionan.</h3>
                    <input type="radio" name="r15" value="a"> a) Nunca <br>
                    <input type="radio" name="r15" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r15" value="c"> c) Siempre <br>
                    <br>

                    <!--16-->
                    <h3>16.-Me doy cuenta de lo que dicen, piensan y sienten
                        las personas más cercanas a mí (amigos, compañeros, familiares…).</h3>
                    <input type="radio" name="r16" value="a"> a) Nunca <br>
                    <input type="radio" name="r16" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r16" value="c"> c) Siempre <br>
                    <br>

                    <!--17-->
                    <h3>17.-Valoro las cosas buenas que hago.</h3>
                    <input type="radio" name="r17" value="a"> a) Nunca <br>
                    <input type="radio" name="r17" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r17" value="c"> c) Siempre <br>
                    <br>

                    <!--18-->
                    <h3>18.-Soy capaz de divertirme y pasármelo bien allí
                        donde esté.</h3>
                    <input type="radio" name="r18" value="a"> a) Nunca <br>
                    <input type="radio" name="r18" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r18" value="c"> c) Siempre <br>
                    <br>

                     <!--19-->
                     <h3>19.-Hay cosas que no me gusta hacer pero sé que hay
                        que hacerlas y las hago.</h3>
                    <input type="radio" name="r19" value="a"> a) Nunca <br>
                    <input type="radio" name="r19" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r19" value="c"> c) Siempre <br>
                    <br>

                    <!--20-->
                    <h3>20.-Soy capaz de sonreír.</h3>
                    <input type="radio" name="r20" value="a"> a) Nunca <br>
                    <input type="radio" name="r20" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r20" value="c"> c) Siempre <br>
                    <br>

                    <!--21-->
                    <h3>21.-Tengo confianza en mí mismo, en lo que soy
                        capaz de hacer, pensar y sentir.</h3>
                    <input type="radio" name="r21" value="a"> a) Nunca <br>
                    <input type="radio" name="r21" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r21" value="c"> c) Siempre <br>
                    <br>

                    <!--22-->
                    <h3>22.-Soy una persona activa, me gusta hacer cosas.</h3>
                    <input type="radio" name="r22" value="a"> a) Nunca <br>
                    <input type="radio" name="r22" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r22" value="c"> c) Siempre <br>
                    <br>

                    <!--23-->
                    <h3>23.-Comprendo los sentimientos de los demás.</h3>
                    <input type="radio" name="r23" value="a"> a) Nunca <br>
                    <input type="radio" name="r23" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r23" value="c"> c) Siempre <br>
                    <br>

                    <!--24-->
                    <h3>24.-Mantengo conversaciones con la gente.</h3>
                    <input type="radio" name="r24" value="a"> a) Nunca <br>
                    <input type="radio" name="r24" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r24" value="c"> c) Siempre <br>
                    <br>

                    <!--25-->
                    <h3>25.-Tengo buen sentido del humor.</h3>
                    <input type="radio" name="r25" value="a"> a) Nunca <br>
                    <input type="radio" name="r25" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r25" value="c"> c) Siempre <br>
                    <br>

                    <!--26-->
                    <h3>26.-Aprendo de los errores que cometo.</h3>
                    <input type="radio" name="r26" value="a"> a) Nunca <br>
                    <input type="radio" name="r26" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r26" value="c"> c) Siempre <br>
                    <br>

                    <!--27-->
                    <h3>27.-En momentos de tensión y ansiedad soy capaz de relajarme y tranquilizarme para no perder el control
                        y actuar apresuradamente.</h3>
                    <input type="radio" name="r27" value="a"> a) Nunca <br>
                    <input type="radio" name="r27" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r27" value="c"> c) Siempre <br>
                    <br>

                    <!--28-->
                    <h3>28.-Soy una persona realista, con los ofrecimientos
                        que hago, sabiendo qué cosa puedo cumplir y qué no me será posible hacer.</h3>
                    <input type="radio" name="r28" value="a"> a) Nunca <br>
                    <input type="radio" name="r28" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r28" value="c"> c) Siempre <br>
                    <br>

                    <!--29-->
                    <h3>29.-Cuando alguien se muestra muy nervioso/a o
                        exaltado/a lo calmo y tranquilizo.</h3>
                    <input type="radio" name="r29" value="a"> a) Nunca <br>
                    <input type="radio" name="r29" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r29" value="c"> c) Siempre <br>
                    <br>

                    <!--30-->
                    <h3>30.-Tengo las ideas muy claras sobre lo que quiero.</h3>
                    <input type="radio" name="r30" value="a"> a) Nunca <br>
                    <input type="radio" name="r30" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r30" value="c"> c) Siempre <br>
                    <br>

                    <!--31-->
                    <h3>31.-Controlo bien mis miedos y temores.</h3>
                    <input type="radio" name="r31" value="a"> a) Nunca <br>
                    <input type="radio" name="r31" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r31" value="c"> c) Siempre <br>
                    <br>

                    <!--32-->
                    <h3>32.-Si he de estar solo no me agobio por eso.</h3>
                    <input type="radio" name="r32" value="a"> a) Nunca <br>
                    <input type="radio" name="r32" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r32" value="c"> c) Siempre <br>
                    <br>

                    <!--33-->
                    <h3>33.-Formo parte algún grupo o equipo de deporte o de
                        ocio para compartir intereses o aficiones.</h3>
                    <input type="radio" name="r33" value="a"> a) Nunca <br>
                    <input type="radio" name="r33" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r33" value="c"> c) Siempre <br>
                    <br>

                    <!--34-->
                    <h3>34.-Sé cuáles son mis defectos y cómo cambiarlos.</h3>
                    <input type="radio" name="r34" value="a"> a) Nunca <br>
                    <input type="radio" name="r34" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r34" value="c"> c) Siempre <br>
                    <br>

                    <!--35-->
                    <h3>35.-Soy creativo, tengo ideas originales y las
                        desarrollo.</h3>
                    <input type="radio" name="r35" value="a"> a) Nunca <br>
                    <input type="radio" name="r35" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r35" value="c"> c) Siempre <br>
                    <br>

                    <!--36-->
                    <h3>36.-Sé qué pensamientos son capaces de hacerme
                        sentir feliz, triste, enfadado, altruista, angustiado.</h3>
                    <input type="radio" name="r36" value="a"> a) Nunca <br>
                    <input type="radio" name="r36" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r36" value="c"> c) Siempre <br>
                    <br>

                    <!--37-->
                    <h3>37.-Soy capaz de aguantar bien la frustración cuando
                        no consigo lo que me propongo.</h3>
                    <input type="radio" name="r37" value="a"> a) Nunca <br>
                    <input type="radio" name="r37" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r37" value="c"> c) Siempre <br>
                    <br>

                    <!--38-->
                    <h3>38.-Me comunico bien con la gente con la que me
                        relaciono.</h3>
                    <input type="radio" name="r38" value="a"> a) Nunca <br>
                    <input type="radio" name="r38" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r38" value="c"> c) Siempre <br>
                    <br>

                    <!--39-->
                    <h3>39.-Soy capaz de comprender el punto vista de los
                        demás.</h3>
                    <input type="radio" name="r39" value="a"> a) Nunca <br>
                    <input type="radio" name="r39" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r39" value="c"> c) Siempre <br>
                    <br>

                    <!--40-->
                    <h3>40.-Identifico las emociones que expresa la gente a mi
                        alrededor.</h3>
                    <input type="radio" name="r40" value="a"> a) Nunca <br>
                    <input type="radio" name="r40" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r40" value="c"> c) Siempre <br>
                    <br>

                    <!--41-->
                    <h3>41.-Soy capaz de verme a mí mismo desde la
                        perspectiva de los otros.</h3>
                    <input type="radio" name="r41" value="a"> a) Nunca <br>
                    <input type="radio" name="r41" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r41" value="c"> c) Siempre <br>
                    <br>

                    <!--42-->
                    <h3>42.-Me responsabilizo de las cosas que hago.</h3>
                    <input type="radio" name="r42" value="a"> a) Nunca <br>
                    <input type="radio" name="r42" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r42" value="c"> c) Siempre <br>
                    <br>

                    <!--43-->
                    <h3>43.-Me adapto a las nuevas situaciones, aunque me
                        cuesten algún cambio en mi manera de sentir las cosas.</h3>
                    <input type="radio" name="r43" value="a"> a) Nunca <br>
                    <input type="radio" name="r43" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r43" value="c"> c) Siempre <br>
                    <br>

                    <!--44-->
                    <h3>44.-Creo que soy una persona equilibrada
                        emocionalmente.</h3>
                    <input type="radio" name="r44" value="a"> a) Nunca <br>
                    <input type="radio" name="r44" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r44" value="c"> c) Siempre <br>
                    <br>

                    <!--45-->
                    <h3>45.-Tomo decisiones sin dudar ni titubear demasiado.</h3>
                    <input type="radio" name="r45" value="a"> a) Nunca <br>
                    <input type="radio" name="r45" value="b"> b) Algunas veces <br>
                    <input type="radio" name="r45" value="c"> c) Siempre <br>
                    <br>

                    <input type="submit" name="enviar">

                                   



                </form>
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