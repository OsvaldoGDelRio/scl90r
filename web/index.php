<?php declare(strict_types=1); header('Set-Cookie: cross-site-cookie=bar; SameSite=None; Secure', false); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prueba SCL90R - Psicosis</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
<body>
<div class="container">
        <h1 class="display-3">SCL-90R - Psicosis</h1>
        <p class="text-justify"><strong>INSTRUCCIONES:</strong> A continuación se presenta una lista de malestares o molestias que las personas pueden llegar a tener, lea cada una de éstas y marque la opción que describa si en las últimas semanas se le han presentado y qué tanto le afectaron; elija para cada frase una de las cinco posibilidades de respuesta: Nada, Muy poco, Poco, Bastante y Mucho. Si no se le presentaron o se le presentaron pero no le afectaron seleccione la opción “Nada”.</p>
        <form method="POST" action="VerificarPruebaScl90R.php">
        <!--Pregunta 1-->
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Síntomas de psicosis: SCL-90R</a>
                        </h6>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">  
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-left">Frases</th>
                                                <th scope="col" class="text-center">Nada</th>
                                                <th scope="col" class="text-center">Muy poco</th>
                                                <th scope="col" class="text-center">Poco</th>
                                                <th scope="col" class="text-center">Bastante</th>
                                                <th scope="col" class="text-center">Mucho</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">1. Perder la confianza en la mayoría de las personas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="CONFIANZA" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="CONFIANZA" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="CONFIANZA" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="CONFIANZA" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="CONFIANZA" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">2. Sentir que me vigilan o que hablan de mí</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="VIGILAN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="VIGILAN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="VIGILAN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="VIGILAN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="VIGILAN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">3. Tener ideas o pensamientos que los demás no entienden</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="ENTIENDEN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="ENTIENDEN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="ENTIENDEN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="ENTIENDEN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="ENTIENDEN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">4. Sentir que los demás no me valoran como merezco</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="VALORAN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="VALORAN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="VALORAN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="VALORAN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="VALORAN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">5. Sentir que se aprovechan de mí si los dejo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="APROVECHAN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="APROVECHAN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="APROVECHAN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="APROVECHAN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="APROVECHAN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">6.<b> Sentir que alguien puede controlar mis pensamientos.</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="CONTROLAR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="CONTROLAR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="CONTROLAR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="CONTROLAR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="CONTROLAR" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">7. <b>Escuchar voces que otras personas no pueden oír</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="VOCES" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="VOCES" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="VOCES" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="VOCES" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="VOCES" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">8. <b>Creer que la gente sabe qué estoy pensando</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="PENSANDO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="PENSANDO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="PENSANDO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="PENSANDO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="PENSANDO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">9. Tener ideas o pensamientos que no son los míos</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="PENSAMIENTOS" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="PENSAMIENTOS" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="PENSAMIENTOS" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="PENSAMIENTOS" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="PENSAMIENTOS" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">10. Sentirme solo/a aun estando con gente</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="SOLO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="SOLO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="SOLO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="SOLO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="SOLO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">11. Pensar cosas sobre el sexo que me molestan</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="SEXO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="SEXO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="SEXO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="SEXO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="SEXO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">12. <b>Ver cosas que otros no pueden ver</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="VER" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="VER" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="VER" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="VER" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="VER" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">13. Sentir que debo ser castigado/a por mis pecados</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CASTIGADO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CASTIGADO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CASTIGADO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CASTIGADO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CASTIGADO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">14. Sentir que algo anda mal en mi cuerpo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CUERPO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CUERPO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CUERPO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CUERPO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CUERPO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">15. Sentirme alejado/a de las demás personas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="ALEJADO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="ALEJADO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="ALEJADO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="ALEJADO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="ALEJADO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">16. <b>Sentir algo caminando o moviéndose en mi cuerpo que no se pueda ver</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MOVIENDOSE" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MOVIENDOSE" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MOVIENDOSE" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MOVIENDOSE" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MOVIENDOSE" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">17. Pensar que en mi cabeza hay algo que no funciona bien</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="CABEZA" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="CABEZA" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="CABEZA" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="CABEZA" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="CABEZA" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">                   
                                            <p class="text-left">Un puntaje a partir de 37 puntos y/o la presencia de los síntomas correspondientes a las frases en negritas: 6, 7, 8, 12 y 16, que tienen asignada una puntuación de Poco (2 puntos), Bastante (3 puntos) o Mucho (4 puntos) sugieren la necesidad de referir al/la usuario/a a una valoración psiquiátrica para que el especialista determine si presenta el diagnóstico de psicosis.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>                
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg">Evaluar</button>
                    </div>
                    </div> 
            </form>
            </div>
</div>
<footer class="container mt-5">
  <p>Desarrollado por <a target="_blank" href="https://osvaldogonzalez.name/"> Osvaldo Noe Gonzalez Del Rio</a> &copy; <?php echo date("Y"); ?> <a href="https://github.com/OsvaldoGDelRio">GitHub</a></p>
</footer>
</main><!-- /.container -->
</div>
</div>
</body>
</html>  