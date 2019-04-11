<?php

return [
    'name' => 'Utente',
    'description' => 'Credenziali e autenticazione',
    'attributes' => [
        'name' => [
            'label' => 'Nome',
            'description' => 'Come possiamo chiamarlo?'
        ],
        'email' => [
            'label' => 'Email',
            'description' => 'L\'email usata per il processo di autenticazione'
        ],
        'password' => [
            'label' => 'Password',
            'description' => 'Una parola o frase segreta usata per il processo di autenticazione'
        ],
        'token' => [
            'label' => 'Token',
            'description' => 'Un token pubblico usato in una varietà di casi'
        ],
        'role' => [
            'label' => 'Ruolo',
            'description' => 'Identifica il ruolo dell\'utente'
        ]
    ]
];