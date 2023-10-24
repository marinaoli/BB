<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "corpo";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

$ESPONTANEA = isset($_POST["ESPONTANEA"]) ? "SIM" : "NÃO";
var_dump($ESPONTANEA);

$ESTIMULODOLOROSO = isset($_POST["ESTIMULODOLOROSO"]) ? "SIM" : "NÃO";
var_dump($ESTIMULODOLOROSO);

$PALAVRASAPROPIADAS = isset($_POST["PALAVRASAPROPIADAS"]) ? "SIM" : "NÃO";
var_dump($PALAVRASAPROPIADAS);

$PALAVRASINAPROPIADAS = isset($_POST["PALAVRASINAPROPIADAS"]) ? "SIM" : "NÃO";
var_dump($PALAVRASINAPROPIADAS);

$CHOROOUGRITOS = isset($_POST["CHOROOUGRITOS"]) ? "SIM" : "NÃO";
var_dump($CHOROOUGRITOS);

$SONSINCOMPREENSIVEIS = isset($_POST["SONSINCOMPREENSIVEIS"]) ? "SIM" : "NÃO";
var_dump($SONSINCOMPREENSIVEIS);

$NENHUMARESPOSTAVERBAL = isset($_POST["NENHUMARESPOSTAVERBAL"]) ? "1" : "0";
var_dump($NENHUMARESPOSTAVERBAL);

$OBEDECEPRONTAMENTE = isset($_POST["OBEDECEPRONTAMENTE"]) ? "1" : "0";
var_dump($OBEDECEPRONTAMENTE);

$LOCALIZADOROUESTÍMULOTATIL = isset($_POST["LOCALIZADOROUESTÍMULOTATIL"]) ? "1" : "0";
var_dump($LOCALIZADOROUESTÍMULOTATIL);

$MOVIMENTODERETIRADADOSEGMENTOESTIMULADO = isset($_POST["MOVIMENTODERETIRADADOSEGMENTOESTIMULADO"]) ? "1" : "0";
var_dump($MOVIMENTODERETIRADADOSEGMENTOESTIMULADO);

$FLEXAOANORMAL = isset($_POST["FLEXAOANORMAL"]) ? "1" : "0";
var_dump($FLEXAOANORMAL);

$EXTENSAOANORMAL = isset($_POST["EXTENSAOANORMAL"]) ? "1" : "0";
var_dump($EXTENSAOANORMAL);

$PARALISIA = isset($_POST["PARALISIA"]) ? "1" : "0";
var_dump($PARALISIA);

$FLACIDA = isset($_POST["FLACIDA"]) ? "1" : "0";
var_dump($FLACIDA);

$HIPOTONIA = isset($_POST["HIPOTONIA"]) ? "1" : "0";
var_dump($HIPOTONIA);

$PERDIDO = isset($_POST["PERDIDO"]) ? "1" : "0";
var_dump($PERDIDO);
