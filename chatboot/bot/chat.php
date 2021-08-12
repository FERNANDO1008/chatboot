<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //que es covid
    "que es covid?" => "La enfermedad por coronavirus (COVID 19) es una ‎enfermedad infecciosa causada por un ‎coronavirus recientemente descubierto.",
    "coronavirus?" => "Los coronavirus son una extensa familia de virus que pueden causar enfermedades tanto en animales como en humanos.",
    "covid 19?" => "La enfermedad del coronavirus 2019 (COVID-19) es una enfermedad respiratoria que puede transmitirse de persona a persona.",
    //sintomas
    "sintomas por la enfermedad?" =>"Sintomas graves causador por covid son dificultad para respirar o sensación de falta de aire, Dolor o presión en el pecho, Incapacidad para hablar o moverse.",
    "sintomas por covid?" =>"Sintomas comunes causados por covid Fiebre, Tos seca y Cansancio." ,
    "sintomas por covid 19?" =>"Sintomas inusiales Diarrea, Conjuntivitis, Dolor de cabeza, Pérdida del sentido del olfato o del gusto, Erupciones cutáneas o pérdida del color en los dedos de las manos o de los pies.",
    
   
    //name
    "como te llamas?" =>"Soy coroBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy coroBot y estoy para servirte",
    "tienes nombre?" =>"Soy coroBot y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is CoroBot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con coronavirus.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
