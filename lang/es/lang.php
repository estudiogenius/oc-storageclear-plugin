<?php

return [
    'plugin' => [
        'name' => 'Storage Cleaner',
        'description' => 'Busca en el directorio Uploads archivos desconectados de la base de datos.',
    ],
    'clear' => [
        'seeking' => [
            'files' => 'Buscando archivos no registrados...',
            'registers' => 'Buscando registros sin archivos o sin modelos relacionados...',
            'directories' => 'Buscando directorios vacíos...'
        ],
        'removed' => [
            'files' => '... :count archivos eliminados, :total encontrados!',
            'registers' => '... :count registros eliminados, :total encontrados!',
            'directories' => '... :count directorios vacíos eliminados, :total encontrados!',
            'duplicates' => '... :count registros duplicados eliminados, :total encontrados!'
        ]
    ],
    'project' => [
        'cleaning' => 'Realizando un limpieza rápida para generar un archivo zip pequeño...',
        'start' => 'Construyendo un archivo zip para tu increíble proyecto...',
        'end' => '... Listo! El archivo zip se encuentra en la raíz del proyecto: :file'
    ],
    'database' => [
        'start' => 'Realizando un respaldo de la base de datos...',
        'end' => '... Listo! El archivo de respaldo se encuentra en la raíz del proyecto: :file'
    ]
];