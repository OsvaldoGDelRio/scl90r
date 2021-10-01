[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/scl90r/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/scl90r/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/OsvaldoGDelRio/scl90r/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/scl90r/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/scl90r/badges/build.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/scl90r/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/scl90r/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)

# scl90r
Librería para la prueba SCL90R - Síntomas de psicosis

### Instalación

```shell
composer require osvaldogdelrio/scl90r
```

### Uso

A partir de un array con los datos, ya sean de BD o un formulario, los datos que puede tener cada frase pueden ser el valor numérico de cada frase o su representación textual, '0' o 'Nada' y así sucesivamente.
```php
$datos = [
    'frase1' => '2',
    'frase2' => '0',
    'frase3' => '0',
    'frase4' => '0',
    'frase5' => '3',
    'frase6' => '0',
    'frase7' => '0',
    'frase8' => '0',
    'frase9' => '0',
    'frase10' => '0',
    'frase11' => '0',
    'frase12' => '0',
    'frase13' => '0',
    'frase14' => '0',
    'frase15' => '0',
    'frase16' => '0',
    'frase17' => '0'
];
```

Creamos un [Factory](https://github.com/OsvaldoGDelRio/factory) de la prueba y le pasamos los datos como parámetro
```php
$factory = new Factory();
$scl = $factory->crear('src\factory\PruebaScl90R',$datos);
```

Mostramos los resultados
```php
//Frase $scl->frase()->{NUMERO_DE_FRASE}()->{VALOR_REQUERIDO}();

echo $scl->frase()->frase1()->fraseNumero();
echo $scl->frase()->frase1()->fraseTexto();
echo $scl->frase()->frase1()->valorTexto();
echo $scl->frase()->frase1()->valorNumero();

//Molestia $scl->molestia()->{VALOR_REQUERIDO}();

echo $scl->molestia()->numero();
echo $scl->molestia()->texto();
```

### Ejemplo

Se elaboró un ejemplo de implementación sencillo con Bootstrap y CkEditor, se encuentra en al carpeta web y en el siguiente enlace: [Prueba SCL90R - Psicosis](https://scl90r.ticsa.org.mx/)

### Información de la prueba

[Información](https://www.pearsonclinical.es/scl-90-r-test-de-los-90-sintomas)