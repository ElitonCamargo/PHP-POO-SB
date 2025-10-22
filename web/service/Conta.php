<?php

require_once 'Titular.php';
abstract class Conta{
    protected int $id;
    protected Titular $titular;
    protected float $saldo;
    protected float $limite;


    public function setId(int $id): void
    {
        if ($id <= 0)
        {
            throw new Exception("O número da conta deve ser positivo.");
        }
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

}
