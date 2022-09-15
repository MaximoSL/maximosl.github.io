<?php

header('Content-type: text/html'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDMX hoy</title>
    <link rel="stylesheet" href="style-min.css">
</head>
<body class="widget">
    <h1 class="widget_title">La Ciudad hoy <span>30 de Septiembre 2021</span></h1>
    <div class="widget_wrapper">
        <button class="widget_control prev">
            <svg width="11" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 2 3 8l6 6" stroke="#fff" stroke-width="3.158"/>
            </svg>
        </button>
        <div class="widget_slide">
            <div class="widget_item">
                <div>
                    <img src="assets/img/cloud.svg" alt="">
                    <ul>
                        <li>Lluvia ligera</li>
                        <li><strong>23° C</strong></li>
                    </ul>
                </div>
                <div>
                    <img src="assets/img/air.svg" alt="">
                    <dl>
                        <div>
                            <dt>Calidad del aire</dt>
                            <dd><strong>Buena</strong></dd>
                        </div>
                        <div>
                            <dt>Índice UV</dt>
                            <dd><strong>6 - Alta</strong></dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="widget_item">
                <svg width="17" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x=".911" y="1.504" width="15.482" height="15.482" rx="1.786" fill="#FF5100" stroke="#fff" stroke-width="1.191"/></svg>
                <dl>
                    <dt><strong>Hoy no circula</strong></dt>
                    <dd class="d-block">Placa 5 y 6 Holograma 1 y 2</dd>
                </dl>
            </div>
            <div class="widget_item">
                <img src="assets/img/wifi.svg" alt="">
                <span>Encuentra <strong class="d-block">puntos WiFi</strong></span>
            </div>
        </div>
        <button class="widget_control next">
            <svg width="11" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 2 3 8l6 6" stroke="#fff" stroke-width="3.158"/>
            </svg>
        </button>
    </div>
    <script src="app-min.js"></script>
</body>
</html>
