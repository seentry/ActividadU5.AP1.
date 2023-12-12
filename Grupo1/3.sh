#!/bin/bash
if [ $# -eq 0 ]; then
    echo "Uso: $0 "
    exit 1
fi

numero=$1

if ! [[ $numero =~ ^[1-9][0-9]*$ ]]; then
    echo "Error: Por favor, introduzca un valor entero mayor que 0."
    exit 1
fi

for ((i=0; i<=$numero; i++)); do
    echo $i
done