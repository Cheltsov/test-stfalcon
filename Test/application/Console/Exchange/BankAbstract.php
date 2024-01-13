<?php

namespace Project\Console\Exchange;

abstract class BankAbstract
{
    private array $exchangeRates = [];

    abstract  public function parseExchangeRates(array $response): array;

    /**
     * @param array{USD: array{buy: float, sell: float}, EUR: array{buy: float, sell: float}} $exchangeRates
     */
    public function setExchangeRates(array $exchangeRates): self
    {
        $this->exchangeRates = $exchangeRates;

        return $this;
    }

    /**
     * @return array{USD: array{buy: float, sell: float}, EUR: array{buy: float, sell: float}}
     */
    public function getExchangeRates(): array
    {
        return $this->exchangeRates;
    }
}