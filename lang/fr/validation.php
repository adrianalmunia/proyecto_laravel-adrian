<?php

return [
    'required' => 'Le champ :attribute est obligatoire.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'integer' => 'Le champ :attribute doit être un nombre entier.',
    'min' => [
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
        'numeric' => 'Le champ :attribute doit être au moins :min.',
    ],
    'max' => [
        'string' => 'Le champ :attribute ne peut pas dépasser :max caractères.',
    ],
    'unique' => 'Cette valeur pour le champ :attribute est déjà utilisée.',

    'attributes' => [
        'nombre' => 'prénom',
        'apellido' => 'nom de famille',
        'email' => 'adresse e-mail',
        'edad' => 'âge',
    ],
];
