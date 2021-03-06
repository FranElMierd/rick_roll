<?php include("template/cabecera.php")  ?>
<style>

@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
}

body{
    background: #2E2E2E ;
}

.container__card{
    max-width: 1200px;
    margin: auto;
    margin-top: 100px;
    perspective: 1000px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.card__father{
    margin: 20px;
    perspective: 1000px;
}

.card__father:hover .card{
    transform: rotateY(180deg);
}


.card{
    width: 350px;
    height: 400px;
    position: relative;
    transform-style: preserve-3d;
    transition: all 600ms;
}

.card__front{
    background-size: cover;
    background-position: center;
}


.card__front,
.card__back{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    backface-visibility: hidden;
    transform-style: preserve-3d;
    border-radius: 20px;
}

.card__back{
    transform: rotateY(180deg);
    background: black;
}

.body__card_front{
    width: 100%;
    height: 100%;
    text-align: center;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    transform: translateZ(60px);
}

.bg{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.4);
    border-radius: 20px;
}

.body__card_back{
    padding: 40px;
    text-align: center;
    transform: translateZ(60px);
}

.body__card_back p{
    margin-top: 30px;
    font-size: 18px;
}

.body__card_back input{
    padding: 10px 40px;
    margin-top: 30px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    color: white;
    background: #58B0F6;
    box-shadow: 1px 1px 20px -5px #58B0F6;
    border-radius: 10px;
    transition: box-shadow 600ms;
}

.body__card_back input:hover{
    box-shadow: 1px 1px 30px 0px #449de6;
}

</style>
<main>



<div class="container__card">

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/Hk47.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>HK-47 </h1>
                    <p>HK-47 fue un droide asesino serie HK y cazador de Jedi construido por el Se??or Oscuro de los Sith Darth Revan poco despu??s del final de las Guerras Mandalorianas en 3.960 ABY.</p>
             
                </div>
            </div>
        </div>
    </div>

    
<div class="card__father">
        <div class="card">
            <div class="card__front" style=" background-image: url(img/EP3.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>

            <div class="card__back">
                <div class="body__card_back">
                    <h1>C-3PO</h1>
                    <p>C-3PO ("Citripio" , a veces abreviado como 3PO, "Tripio" o tambi??n Cetrespe??) era un droide de protocolo serie 3PO, dise??ado para interactuar con humanos. Hablaba con fluidez m??s de seis millones de formas de comunicaci??n</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/IG-88.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>IG-88</h1>
                    <p>IG-88 fue un droide asesino de la serie de droides IG creado en los Laboratorios Holowan para el Imperio Gal??ctico. El modelo IG-88 fue un derivado de los droides centinelas IG-86 utilizados durante las Guerras Clon.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/4-LOM.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>4-LOM</h1>
                    <p>4-LOM fue un droide de protocolo serie LOM creado por Industrias Automaton, que logr?? sobrescribir su programaci??n para dedicarse a ser cazarrecompesas.</p>
                
                </div>
            </div>
        </div>
    </div>
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/r2d2.jfif);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>R2-D2 </h1>
                    <p>R2-D2  Su cuerpo blanco, azul y plateado albergaba muchas armas, sensores y otros muchos aparatos que permanec??an ocultos al ojo humanoide normal. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/R5d4.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>R5-D4</h1>
                    <p>R5-D4 pertenec??a a los Jawas de Tatooine que capturaron a R2-D2 y C-3PO cuando estos se perdieron en el desierto tras escapar de la Tantive IV con los planes de la Estrella de la Muerte, y as?? comerciar con ellos.</p>
                
                </div>
            </div>
        </div>
    </div>
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/4-P17.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>R4-P17 </h1>
                    <p>R4-P17, apodado Arfour, era un droide astromec??nico, programado con una personalidad femenina, que fue asignado al Maestro Jedi Obi-Wan Kenobi antes y durante las Guerras Clon.</p>
    
                </div>
            </div>
        </div>
    </div>
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/T3-M4.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>T3-M4</h1>
                    <p>T3-M4 (tambi??n llamado Tetr??s) fue un droide astromec??nico serie T3 construido como experto en sistemas de desciframiento para el se??or del crimen Davik Kang. </p>
                
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/R7.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> R7</h1>
                    <p>La serie R7 fue dise??ada espec??ficamente para usarse en el caza estelar de escolta Ala-E de la Nueva Rep??blica.</p>
                
                </div>
            </div>
        </div>
    </div>

     
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/R5x2.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1>R5-X2</h1>
                    <p>R5-X2 era un droide astromec??nico de la serie R5. Pertenec??a a Jabba Desilijic Tiure alrededor de 32 ABY, y era usado para calcular apuestas en las carreras de vainas.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/b1.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> B1 </h1>
                    <p>Los droides de combate serie B1, tambi??n conocidos como droides de combate B1, droides de combate est??ndar, hojalatas, o chatarras fueron el tipo de droide de combate m??s usado</p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/b2.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> B2 </h1>
                    <p>El superdroide de combate B2 (SDB), tambi??n conocido como el droide de combate serie B2, era una versi??n mejorada del droide de combate B1, con armamento y armadura superiores</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/soldado.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> Soldado Oscuro </h2>
                    <p>Los soldados oscuros fueron unos droides de batalla avanzados que surgieron de un proyecto ideado y liderado por el General Rom Mohc. Despu??s de su impresionante primera demostraci??n bajo la supervisi??n de Darth Vader,</p>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/Droidekapromo.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> Droideka </h2>
                    <p> tambi??n llamado Droide Destructor (Destructores para acortar), Bolas de la Muerte, Droide de Ruedas, Rueda o Ruedas entre la jurga de los soldados clon, fue un tipo de droide de combate pesado utilizada por la Federaci??n de Comercio y la Confederaci??n de Sistemas Independientes.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/Cazas.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> Mark I </h1>
                    <p>tambi??n conocido como caza estelar droide clase Buitre o simplemente como el droide Buitre era un caza estelar droide usado por la Federaci??n de Comercio. </p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/YVH1.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> YVH 1 </h1>
                    <p>El droide de combate Yuuzhan Vong Huner Uno, o CYV 1-1A, era un droide de batalla desarrollado por Tendrando Arms como un medio para combatir eficazmente a los guerreros yuuzhan vong.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/MagnaGuardia.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> MagnaGuardia IG-100 </h2>
                    <p>El MagnaGuardia IG-100 fue Programado Auto-Motivado, era una clase avanzada de droide de batalla que se utiliz?? durante las Guerras Clon como guardaespaldas del General Grievous, por orden del Conde Dooku. </p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/OOM-9.JPG);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> OOM-9 </h1>
                    <p>OOM-9 era un droide de combate comandante OOM que lider?? el Ej??rcito de Droides de la Federaci??n de Comercio durante la Invasi??n de Naboo</p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/EV-9D9.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> EV-9D9 </h1>
                    <p>EV-9D9 era un droide donde, su mas famosa y conocida accion clandestina, fue poner bombas alrededor de la Ciudad de las Nubes que fue descubierto gracias a Lobot que avis?? al Bar??n y Administrador de la ciudad Lando Calrissian.</p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/Goto.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> G0-T0 </h2>
                    <p> tambi??n conocido como ???Goto???, era un sistema G0-T0 de planeaci??n de infraestructura operativo desde aproximadamente el 3.955 ABY hasta el 3.951 ABY. Se convirti?? en la cabeza de la organizaci??n criminal Intercambio en Nar Shaddaa y despu??s viaj?? con la Jedi Exiliada. </p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/IT-O.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> IT-O </h1>
                    <p> El droide interrogador IT-O fue un droide dise??ado por la Oficina de Seguridad Imperial y usado por el Imperio Gal??ctico. </p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/ROTS2.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> 2-1B </h1>
                    <p> fue un Droide M??dico 2-1B que en un inicio trabajo con el Imperio Gal??ctico para despu??s unirse a la Alianza para Restaurar la Rep??blica. </p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/FX_Droid.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> FX-7 </h1>
                    <p> Era un androide m??dico compuesto por un cuerpo cil??ndrico y varios brazos que sal??an de este, hasta 20.  </p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/negtd.jpg );">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> piloto FA-4 </h2>
                    <p> El droide piloto FA-4 era un modelo de droide piloto con ruedas que estuvo en funcionamiento durante las ??ltimas d??cadas de la Rep??blica Gal??ctica. Era el predecesor del droide de servicio FA-5, ambos producidos por SoroSuub. </p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/aaaaaaa.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> OOM </h1>
                    <p> El droide de combate piloto OOM era utilizado en el Ej??rcito de Droides de la Federaci??n de Comercio y, 
m??s tarde, en el Ej??rcito de Droides Separatistas, que ten??an el prop??sito de pilotar veh??culos de varios tipos.  </p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/RX-Series.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> Droide piloto RX </h1>
                    <p> El droide piloto serie RX era una l??nea de droides piloto producida por Industrias Automaton. Eras usados frecuentemente en naves estelares y se les reconoc??a por ser alegres y habladores.  </p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/DUM.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> DUM </h1>
                    <p> WAC-47 fue un droide de reparaci??n de serie DUM, aunque estaba programado para ejercer de piloto.  </p>
                    
                </div>
            </div>
        </div>
    </div>
        
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/Sonda.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> sonda V??bora </h1>
                    <p>eran un modelo de Droide sonda creado por Industrias Arakyd para el Imperio Gal??ctico. </p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/batalla.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h1> serie-SD </h1>
                    <p> El droide de batalla serie SD-9 era un droide de batalla que era parte de la serie de droides SD de Armas Balmorra. El SD-9 era humanoide como la serie anterior, aunque empeque??ec??a incluso a un humano. </p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/bbbbbbb.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> Pistoeka </h2>
                    <p> tambi??n conocido como droide zumbador, fue un modelo de droide de sabotaje fabricado por Nido de Creaci??n Colicoide. Fueron utilizados por la Confederaci??n de Sistemas Independientes durante las ??ltimas etapas de las Guerras Clon con el prop??sito de deshabilitar naves enemiga </p>
                    
                </div>
            </div>
        </div>
    </div>
    

   
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/Grievous.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1></h1>
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> Grievous </h2>
                    <p> Grievous, nacido Qymaen jai Sheelal, fue el c??borg Comandante Supremo del Ej??rcito Droide de la Confederaci??n de Sistemas Independientes durante gran parte de las Guerras Clon </p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/iper_espacio.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1>pronto</h1>
                    
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> lo sentimos:(  </h2>
                    <p> proximamente nuevos droides </p>
                    
                </div>
            </div>
        </div>
    </div>
    
 
    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/iper_espacio.jpg);">
                <div class="bg"></div>
                <div class="body__card_front">
                    <h1>pronto</h1>
                    
                </div>
            </div>
            <div class="card__back">
                <div class="body__card_back">
                    <h2> lo sentimos:(  </h2>
                    <p> proximamente nuevos droides </p>
                    
                </div>
            </div>
        </div>
    </div>
    
 
    
 
</main>

<?php include("template/pie.php")  ?>