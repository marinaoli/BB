<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trauma";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

$FRATURAS = isset($_POST["FRATURAS"]) ? "1" : "0";
var_dump($FRATURAS);

$LUXACOES = isset($_POST["LUXACOES"]) ? "1" : "0";
var_dump($LUXACOES);

$ENTORSES = isset($_POST["ENTORSES"]) ? "1" : "0";
var_dump($ENTORSES);

$FERIMENTODIVERSOS = isset($_POST["FERIMENTODIVERSOS"]) ? "1" : "0";
var_dump($FERIMENTODIVERSOS);

$HEMORRAGIA = isset($_POST["HEMORRAGIA"]) ? "1" : "0";
var_dump($HEMORRAGIA);

$EVISCERACAO = isset($_POST["EVISCERACAO"]) ? "1" : "0";
var_dump($EVISCERACAO);

$FABFAF = isset($_POST["FABFAF"]) ? "1" : "0";
var_dump($FABFAF);

$AMPUTACAO = isset($_POST["AMPUTACAO"]) ? "1" : "0";
var_dump($AMPUTACAO);

$QUEIMADURAPRIMEIROGRAU = isset($_POST["QUEIMADURAPRIMEIROGRAU"]) ? "1" : "0";
var_dump($QUEIMADURAPRIMEIROGRAU);

$QUEIMADURASEGUNDOGRAU = isset($_POST["QUEIMADURASEGUNDOGRAU"]) ? "1" : "0";
var_dump($QUEIMADURASEGUNDOGRAU);

$QUEIMADURATERCEIROGRAU = isset($_POST["QUEIMADURATERCEIROGRAU"]) ? "1" : "0";
var_dump($QUEIMADURATERCEIROGRAU);

$comando = $conexao->query("INSERT INTO trauma  (FRATURAS, LUXACOES ,ENTORSES  ,FERIMENTODIVERSOS , HEMORRAGIA, EVISCERACAO, FABFAF, AMPUTACAO, QUEIMADURAPRIMEIROGRAU, QUEIMADURASEGUNDOGRAU ,QUEIMADURATERCEIROGRAU ,) VALUES ('$FRATURAS', '$LUXACOES', '$ENTORSES', '$FERIMENTODIVERSOS', '$HEMORRAGIA', '$EVISCERACAO', '$FABFAF', '$AMPUTACAO', '$QUEIMADURAPRIMEIROGRAU', '$QUEIMADURASEGUNDOGRAU', '$QUEIMADURATERCEIROGRAU',)");
