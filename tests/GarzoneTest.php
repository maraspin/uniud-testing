<?php declare(strict_types=1);
include(__DIR__ . '/../src/Garzone.php');
include(__DIR__ . '/../src/Caldaia.php');

use PHPUnit\Framework\TestCase;

class GarzoneTest extends TestCase
{
    /**
     * Test sul costruttore
     */
    public function testCanBeCreatedFromName(): void
    {
        $this->assertInstanceOf(
            Garzone::class,
            Garzone::fromString('Bubez')
        );
    }

    /**
     * Confirmation Bias
     */
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException('Exception');
        Garzone::fromString('');
    }

    public function testInstallaCaldaia(): void
    {

        $stub = $this->createMock(Caldaia::class);

        // Configure the stub.
        $stub->method('avvia')
             ->willReturn('Funziona');

        // solo per rendere l'idea...
        // $this->assertEquals('Funziona', $stub->avvia());

        $this->assertEquals(
            'Funziona',
            Garzone::installaCaldaia($stub)
        );
    }
}

