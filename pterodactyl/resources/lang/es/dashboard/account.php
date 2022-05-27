<?php

return [
    'email' => [
        'title' => 'Actualizar tu Email',
        'updated' => 'Tu Email fué actualizado.',
    ],
    'password' => [
        'title' => 'Cambiar contraseña',
        'requirements' => 'Tu nueva contraseña requiere al menos 8 carácteres.',
        'updated' => 'Tu contraseña fué actualizada.',
    ],
    'two_factor' => [
        'button' => 'Configurar Autenticación en 2 pasos',
        'disabled' => 'La autenticación de dos factores ha sido deshabilitada en su cuenta. Ya no se le pedirá que proporcione un token al iniciar sesión.',
        'enabled' => '¡Se ha habilitado la autenticación de dos factores en su cuenta! A partir de ahora, al iniciar sesión, se le pedirá que proporcione el código generado por su dispositivo.',
        'invalid' => 'El token proporcionado no es válido.',
        'setup' => [
            'title' => 'Configurar la autenticación de dos factores',
            'help' => 'Can\'t scan the code? Enter the code below into your application:',
            'field' => 'Enter token',
        ],
        'disable' => [
            'title' => 'Disable two-factor authentication',
            'field' => 'Enter token',
        ],
    ],
];
