<?php

class ComplexNumber{

    //prop
    private float $real;
    private float $imag;

    //construct
    public function __construct(float $real, float $imag)
    {
        $this->real = $real;
        $this->imag = $imag;
    }

    //methods
    //getReal
    //...
    
    //getImag
    //...
    

}

class ComplexOp{

    //propiedades
    private ComplexNumber $num1;
    private ComplexNumber $num1;

    //métodos
    public function sum(): array
    {
        return [
            'real' => //completar,
            'imag' => //completar
        ];
    }

    public function subs(): array
    {
        return [
            'real' => //completar,
            'imag' => //completar
        ];
    }

    public function mult(): array
    {
        return [
            'real' => //completar,
            'imag' => //completar
        ];
    }


}