<?php declare(strict_types=1);

namespace tests;

use Exception;
use PHPUnit\Framework\TestCase;
use src\factory\PruebaScl90R;
use src\frases\Frase;
use src\frases\Frases;
use src\frases\FrasesValidas;
use src\frases\ValoresValidos;
use src\molestia\Molestia;
use src\molestia\ValoresMolestia;
use src\PruebaScl90R as SrcPruebaScl90R;

use function Ramsey\Uuid\v1;

class SclTest extends TestCase
{
    public function testFraseFunciona()
    {
        $frase = new Frase('1', '0', new FrasesValidas, new ValoresValidos);

        $this->assertSame('1', $frase->fraseNumero());
        $this->assertSame('Perder la confianza en la mayoría de las personas', $frase->fraseTexto());

        $this->assertSame('0', $frase->valorNumero());
        $this->assertSame('Nada', $frase->valorTexto());
        $frase = new Frase('1', 'Nada', new FrasesValidas, new ValoresValidos);
        $this->assertSame('0', $frase->valorNumero());
        $this->assertSame('1', $frase->fraseNumero());
    }

    public function testFraseNoPuedeTenerValoresVaciosOIncorrectosEnFrase()
    {
        $this->expectException(Exception::class);
        $frase = new Frase('', 'Nada', new FrasesValidas, new ValoresValidos);
    }

    public function testFraseNoPuedeTenerValoresVaciosOIncorrectosEnValor()
    {
        $this->expectException(Exception::class);
        $frase = new Frase('1', '', new FrasesValidas, new ValoresValidos);
    }

    public function testMolestiaFuncionaBien()
    {
        $frasesValidas = new FrasesValidas();
        $valores = new ValoresValidos();

        $frase1 = new Frase('1', '0', $frasesValidas, $valores);
        $frase2 = new Frase('2', '0', $frasesValidas, $valores);
        $frase3 = new Frase('3', '0', $frasesValidas, $valores);
        $frase4 = new Frase('4', '0', $frasesValidas, $valores);
        $frase5 = new Frase('5', '0', $frasesValidas, $valores);
        $frase6 = new Frase('6', '0', $frasesValidas, $valores);
        $frase7 = new Frase('7', '0', $frasesValidas, $valores);
        $frase8 = new Frase('8', '0', $frasesValidas, $valores);
        $frase9 = new Frase('9', '0', $frasesValidas, $valores);
        $frase10 = new Frase('10', '0', $frasesValidas, $valores);
        $frase11 = new Frase('11', '0', $frasesValidas, $valores);
        $frase12 = new Frase('12', '0', $frasesValidas, $valores);
        $frase13 = new Frase('13', '0', $frasesValidas, $valores);
        $frase14 = new Frase('14', '0', $frasesValidas, $valores);
        $frase15 = new Frase('15', '0', $frasesValidas, $valores);
        $frase16 = new Frase('16', '0', $frasesValidas, $valores);
        $frase17 = new Frase('17', '1', $frasesValidas, $valores);

        $frases = new Frases($frase1, $frase2, $frase3, $frase4, $frase5, $frase6, $frase7, $frase8, $frase9, $frase10, $frase11, $frase12, $frase13, $frase14, $frase15, $frase16, $frase17);
        $molestia = new Molestia($frases, new ValoresMolestia);

        $this->assertSame('1', $molestia->numero());
        $this->assertSame('Leve', $molestia->texto());
    }

    public function testFactoryRegresaClaseCorrecta()
    {
        $datos = [
            'frase1' => '0',
            'frase2' => '0',
            'frase3' => '0',
            'frase4' => '0',
            'frase5' => '0',
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
            'frase17' => '0',
        ];

        $prueba = new PruebaScl90R();
        $prueba = $prueba->crear($datos);
        $this->assertInstanceOf(SrcPruebaScl90R::class, $prueba);

        $this->assertInstanceOf(Frases::class, $prueba->frase());
        $this->assertInstanceOf(Molestia::class, $prueba->molestia());
    }
}
