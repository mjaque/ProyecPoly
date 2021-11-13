/*  dado.js
    PROYECPOLI | Dado en JS
    Una clase dado que permite recibir el número de caras del dado y hacer un lanzamiento de
    X dados con X caras cada uno (pueden ser diferentes por cada dado)
    Autores:
        - Pablo Ceballos Benítez <pceballosbenitez.guadalupe@alumnado.fundacionloyola.net>
        - Ángel Manuel Fernández Baños <amfernandezbanos.guadalupe@alumnado.fundacionloyola.net>
        - Juanjo Carrasco Rodríguez <jcarrascorodriguez.guadalupe@alumnado.fundacionloyola.net>
        - Rubén Torres Gutiérrez <rtorresgutierrez.guadalupe@alumnado.fundacionloyola.net>
    Licencia: GPL v3 o superior
    Año: 2021
*/

export class Dado{
    constructor(caras, minimo, paso){
        this.caras = parseInt(caras);
        this.minimo = parseInt(minimo);
        this.paso = parseInt(paso);
    }
    /**
     * Realiza la tirada del dado.
     * @return {Number} Número entero con el resultado de la tirada.
     */
    tirar(){
        return Math.floor(Math.random() * this.caras) * this.paso + this.minimo;
    }
    /**
     * Realiza una tirada de daddos
     * @param dados {[Dado]} Array de objetos Dado.
     * @return {Number} Número entero con el resultado de la tirada.
     */
    static tirarDados(dados){
        let resultado = 0;
        for(let i = 0; i<dados.length; i++)
            resultado += dados[i].tirar();
        return resultado;
    }
}
