<?php

return [
    'services' => [
        'Protobuf\\Identity\\AuthServiceClient' => [
            'host' => 'localhost:9001',
            'authentication' => 'insecure',
            'cert' => 'cert'
        ],
    ],
];

