<?php


function isApiRunning() {
    // Utiliser la commande ps pour lister les processus et grep pour rechercher le nom du processus
    $command = "ps aux | grep 'unraid-api' | grep -v grep";
    $output = shell_exec($command);

    // Si la sortie n'est pas vide, le processus est en cours d'exécution
    if (!empty($output)) {
        return true;
    }
    return false;
}

function start() {
    $command    = "unraid-api";
    $output     = shell_exec($command);
    return true;
}

function stop() {
    $command    = "killall unraid-api";
    $output     = shell_exec($command);
    return true;
}


