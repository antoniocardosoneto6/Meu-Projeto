<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>
<?php
$x = true;
var_dump($x);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>
<?php
echo "<br>"; 
echo strlen("Ola Mundo")
?>
<?php
echo "<br>";
echo str_word_count('Ola Mundo')
?>
<?php
echo "<br>";
echo strpos("Novo bravo mundo", "Iron Maiden")
?>
<?php
$x = "Ola Mundo";
echo strtoupper($x);
?>
<?php
$x="Novo Teste";
echo strtolower($x);
?>
<?php
$x="Meu teste";
echo "<br>";
echo str_replace ("Teste", "Arquivo", $x);
?>
<?php
$x="Meu teste";
echo "<br>";
echo strrev ($x);
?>
<?php
$x="Meu teste";
echo trim($x);
?>
<?php
echo "<input value='" . $x ."'>";
echo"<br>";
echo "<input value='" . trim($x) . "'>";
?>
<?php
$x="Meu";
$y="Teste";
$z=$x . $y;
echo"<br>";
echo $z;
?>
<?php
$x="Antonio ";
$y="Cardoso ";
$b="Neto ";
$z=$x . $y . $b;
echo"<br>";
echo $z;
?>
<?php
$octeto = 172;
$mascara = 248;
$valor = $octeto & $mascara;
echo ",br> Aplicando a operacao AND entre a mascara e o octeto com o valor $valor <br>";
?>
<?php
$valor = 05;
if ($valor == 15) { //testa se valor e igual a 15
	echo"<br><br> valore 15";
	
}
elseif ($valor >= 10){
	echo "Valor e maior ou igual a 10";
}
else {
	echo "Valor e menor que 10";
}
?>
<?php
echo "<br><br>";
$v = "Fabio";
$nome = $v . " dos Reis";
echo $nome;
?>
<?php
$valor = 10;
if ($valor === "10") {
	echo "Valor e string";
}
else {
       echo "Valor nao e string";	

}
echo "<br><br>";
echo "Agora, fazendo cast no valor atribuido a variavel: <br>";
$valor = (string) 10;
if ($valor === "10") {
	echo "Valor e string";
}
else {
	echo "Valor nao e string";
}

?>
<?php
$a = 10;
$b = 20;
echo ($a == 10) && ($b == 20);
echo "<br>";
if (($a == 10) && ($b == 20)){
	echo "Ambos os valores estao corretos <br>";
}

if (($a == 20) && ($b == 20)){
	echo "Um dos valore estao correto <br>";
}
if (($a == 10) && ($b == 10)){
	echo "Um dos valore esta errado <br>";
}

?>
<?php
$a = 3+5 * 4;
$b = (3+5) * 4;

echo "Valor: $a";
echo "<br>";
echo "Valor: $b";
?>

<?php
$a = 10;
$b = 9;
$c = 5;
$result = ($a+$b+$c)/3;
echo "<br> A media e: $result";

?>
<?php
$a = 8;
$b = 6;
$c = 4;
$resultado = ($a+$b+$c)/3;
if ($resultado >= 7){
	echo "<br>Aluno Aprovado $resultado";
}
else {
	echo "<br>Aluno Reprovado $resultado";

}
?>
<?php
$nota1 = 0;
$nota2 = 0;
$nota3 = 0;
$nota4 = 0;
$resultado = ($nota1+$nota2+$nota3+$nota4)/4;
if ($resultado >= 7 && $resultado != 10) {
	echo "<br> PARABENS Aluno Aprovado! ";
}
elseif ($resultado == 0) {
	echo "<br> ESTUDE MAIS, voce nao acertou nada!";
}
elseif ($resultado == 10) {
	echo "<br> PARABENS! Aprovado com nota maxima!";
}
else 
	echo '<br> O Aluno foi reprovado!';
?>
<?php
$num = 15;
if ($num > 20 ) {
	echo "<br> O numero e maior que 20";
}
else  {
	echo "<br> O numero e menor que 20";
}
?>
<?php
$num = 30;
if ($num > 20) {
	echo "<br> O numero e maior que 20";
}
elseif ($num < 20) {
	echo "<br> O numero e menor que 20";
}
elseif ($num == 20) {
	echo "<br> O numero e igual a 20";
}
else { 
	echo "<br> O numero e nulo";
}
?>
<?php
$num = 66;
if ($num >= 16 && $num <= 65) {
	echo "<br> Aluno pode fazer uso do medicamento";
}
elseif ($num <65) {
	echo "<br> O uso do medicasmento sera com restricoes";
}
elseif ($num <=10) {
	echo "<br> O uso do medicamento e proibido";
}
elseif ($num >= 11 && $num <= 15) {
	echo "<br> O uso do medicamento monitorado";
}

?>
<?php
$a = 5;	//Inter
$b = 3.14;	// Float
$c = "hoje";	// string
$d = true;	// Booleano
$e = NULL;	// NULL

// Conversao para string
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//Mostrar ao usuario
echo "<br>";
var_dump ($a);echo"<br>";
var_dump ($b);echo"<br>";
var_dump ($c);echo"<br>";
var_dump ($d);echo"<br>";
var_dump ($e);echo"<br>";
echo"<br>";


?>
<?php
$a = array ("Volvo", "BMW", "Toyota"); //array indexado
$b = array ("Peter">="30", "Joao" >= "40", "Carlos" >="50");
// array associativo
$a = (object) $a;
$b = (object) $b;
echo "<br>";

var_dump ($a); echo "<br>";
var_dump ($b); echo "<br>";
?>
<?php
echo (pi());
echo "<br>";
echo (min(0, 20, 130, -10, -230)). "<br>";
echo (max(0, 25, -230, 100, -530)). "<br>";
echo (sqrt(64)) . "<br>";
echo (sqrt(4)) . "<br>";
echo (round(0.60)) . "<br>";
echo (rand()) . "<br>";
echo (rand(10, 50)) . "<br>";


?>
