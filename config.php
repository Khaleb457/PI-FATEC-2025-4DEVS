<?php
// URL base do seu site online
define("BASE_URL", "/PI-FATEC-2025-4DEVS");

// Caminho raiz no servidor (usado para includes e requires)
define("ROOT_PATH", __DIR__);

// Inicia a sessão caso ainda não esteja iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define o fuso horário padrão
date_default_timezone_set('America/Sao_Paulo');
