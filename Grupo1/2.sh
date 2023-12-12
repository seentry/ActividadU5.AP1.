#!/bin/bash

echo "Introduce un valor mayor que 0: "
read valor

if [ $valor -gt 0 ];then
    if (( $valor %2 == 0 )); then
    echo "El número es par"
    else
    echo "El número es impar"
    fi
else
    echo "Vuelve a introducir un valor"
fi
