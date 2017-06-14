<?php

    return [
        'title' => 'Groups',

        'templates' => [
            'owner' => '
                <div>Text:<br> [+text+]</div>
                <div>Images:<br> [+images+]</div>
            ',

            'images' => '
                <img src="[+image+]">
                <div>Files:<br> [+files+]</div>
            ',

            'files' => '<a href="[+file+]">[+text+], ([+checkbox+])</a> ',

            'checkbox' => '[+title+] ',
        ],

        'fields' => [
            'text' => [
                'caption' => 'Text',
                'type'    => 'text',
            ],

            'images' => [
                'caption' => 'Images',
                'type'    => 'group',
                'fields'  => [
                    'image' => [
                        'caption' => 'Image',
                        'type'    => 'image',
                    ],

                    'files' => [
                        'caption' => 'Files',
                        'type'    => 'group',
                        'fields'  => [
                            'text' => [
                                'caption' => 'Text',
                                'type'    => 'text',
                            ],

                            'file' => [
                                'caption' => 'File',
                                'type'    => 'file',
                            ],

                            'checkbox' => [
                                'caption'  => 'Checkbox',
                                'type'     => 'checkbox',
                                'layout'   => 'horizontal',
                                'elements' => [
                                    0 => 'No',
                                    1 => 'First',
                                    2 => 'Second',
                                ],
                                'default' => [ 1, 2 ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

