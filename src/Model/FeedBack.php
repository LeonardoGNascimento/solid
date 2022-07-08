<?php
namespace Alura\Solid\Model;

use Exception;

class FeedBack
{
    private int $nota;
    private string $depoimento;

    public function __construct(int $nota, ?string $depoimento)
    {
        if($nota < 9 && empty($depoimento)) {
            throw new Exception('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }
    
    public function getNota(): int
    {
        return $this->nota;
    }

    public function getDepoimento(): string
    {
        return $this->depoimento;
    }
}