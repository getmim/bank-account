<?php

return [
    '__name' => 'bank-account',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/bank-account.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/bank-account' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-bank-provider' => NULL
            ],
            [
                'lib-enum' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'BankAccount\\Model' => [
                'type' => 'file',
                'base' => 'modules/bank-account/model'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'bank-account.status' => [
                0 => 'Deleted',
                1 => 'Unverified',
                2 => 'Verified'
            ]
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'bank-account' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'bank' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibBankProvider\\Library\\Provider',
                        'field' => 'id',
                        'type' => 'number'
                    ]
                ],
                'name' => [
                    'type' => 'text'
                ],
                'number' => [
                    'type' => 'text'
                ],
                'currency' => [
                    'type' => 'json'
                ],
                'status' => [
                    'type' => 'enum',
                    'enum' => 'bank-account.status',
                    'vtype' => 'int'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];