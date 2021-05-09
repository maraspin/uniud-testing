<?php declare(strict_types=1);

final class Garzone
{
    private $nome;

    public static function fromString(string $nome): self
    {
        if (strlen($nome) < 1) {
            throw new \Exception('Non possiamo avere garzoni senza nome!');
        }
        return new self($nome);
    }

    public function installaCaldaia(): string
    {
        
        $caldaia = new Caldaia();
        
        $risultato = $caldaia->avvia();
        echo $risultato . PHP_EOL;

        return $risultato;

    }

    private function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function __toString(): string
    {
        return $this->nome;
    }

}