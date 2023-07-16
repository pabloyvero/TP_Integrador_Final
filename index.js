

const cantidadEntradas = document.getElementById('cantidadEntrada')

const botonCalcular = document.getElementById('botonCalcular')

const categoria = document.getElementById('inputState')

const totalCompra = document.getElementById('totalCompra')

$texto = "Total a Pagar: $ "
$valor = 200

function resume(){
    console.log(categoria.value)
    console.log(cantidadEntrada.value)
    

    $precioparcial = (cantidadEntradas.value * $valor)
    console.log($precioparcial)
    switch(categoria.value){
        case 'estudiante':
            $descuento = 80;
            break;
        case 'trainee':
            $descuento = 50;
            break;
        case 'junior':
            $descuento = 15;
            break;
    }
    console.log($descuento)
    totalCompra.innerHTML = $texto + ($precioparcial - ($precioparcial * $descuento / 100))
}

function borrar(){
    totalCompra.innerHTML = $texto
}
