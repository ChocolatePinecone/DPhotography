<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/jpi22110/Documents/Development/Personal Development/DPhotography/user/themes/grayscale/blueprints.yaml',
    'modified' => 1521209842,
    'data' => [
        'name' => 'Grayscale',
        'version' => '1.0.0',
        'description' => 'Grayscale is a clean and professional one-page theme for **Grav**',
        'icon' => 'group',
        'author' => [
            'name' => 'Vitor Costa',
            'email' => 'vmcosta@me.com',
            'url' => 'http://vmcosta.net'
        ],
        'homepage' => 'https://github.com/vmcosta/grav-theme-grayscale',
        'demo' => 'http://demo.vmcosta.net/grayscale-skeleton',
        'keywords' => 'grayscale, theme, onepage, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/vmcosta/grav-theme-grayscale/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'color' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
