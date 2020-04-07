<?php

return [
    'BankAccount\\Model\\BankAccount' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'bank' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => false
                ],
                'index' => 3000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 4000
            ],
            'number' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 5000
            ],
            'currency' => [
                'comment' => 'Allowed currency, in JSON',
                'type' => 'TEXT',
                'attrs' => [
                    'null' => false
                ],
                'index' => 6000
            ],
            'status' => [
                'comment' => '0 Deleted, 1 Unverified, 2 Verified',
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => false,
                    'default' => 1
                ],
                'index' => 7000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ],
        'indexes' => [
            'by_user' => [
                'fields' => [
                    'user' => []
                ]
            ]
        ]
    ]
];