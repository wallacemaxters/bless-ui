<?php

$shadow  = 'shadow-lg';
$rounded = 'rounded-lg';
$duration = 'duration-200';

return [

    'namespace' => 'ui',

    'components' => [

        'container' => [
            'base'   => 'px-5 lg:px-0 max-w-6xl mx-auto w-full',
            'themes' => [
                'normal' => []
            ]
        ],

        'button' => [
            'base'   => ['px-5 py-3 duration-500 inline-flex', $rounded],
            'themes' => [
                'normal'    => 'bg-neutral-200 text-neutral-600',
                'blue'      => 'bg-blue-400 hover:bg-blue-600 text-white',
                'primary'   => 'bg-primary hover:bg-primary text-white',
                'secondary' => 'bg-secondary hover:bg-zinc-800 text-white',
            ]
        ],

        'select' => [
            'wrapper' => 'relative flex items-center',
            'arrow'   => 'absolute right-3 pointer-events-none dark:text-white text-neutral-800',
            'base' => 'w-full border-b-2 px-6 text-lg py-3 border-zinc-300 inline-flex bg-white outline-none appearance-none font-sans',
            'themes' => [
                'normal' => [],
                'blue'   => 'bg-blue-400 hover:bg-blue-600 text-white',
            ]
        ],

        'input' => [
            'base' => 'w-full border-b-2 px-6 text-lg py-3 border-zinc-300 inline-flex bg-white outline-none',
            'themes' => [
                'normal' => [],
                'blue'   => 'bg-blue-400 hover:bg-blue-600 text-white',
            ]
        ],


        'textarea' => [
            'base'   => 'w-full border-b-2 px-6 text-lg py-3 border-zinc-300 inline-flex placeholder:font-sans',
            'themes' => [
                'normal' => []
            ]
        ],


        'label' => [
            'base' => 'block'
        ],


        'avatar'    => [
            'base' => [
                'rounded-full',
                'aspect-square',
                'bg-neutral-200',
                'flex items-center justify-center',
                'overflow-hidden',
                $shadow
            ],
            'image'  => ['h-full w-full', 'object-cover object-center'],
            'themes' => [
                'normal' => []
            ]
        ],


        'section' => [
            'base' => 'py-12 lg:py-20',
            'themes' => [
                'normal' => []
            ]
        ],

        'card' => [
            'base' => [$shadow, $rounded, 'p-8'],
            'themes' => [
                'none'   => [],
                'normal' => ['bg-white dark:bg-neutral-800'],
                'blue'   => ['bg-blue-500 text-white'],
            ]
        ],

        'heading' => [
            'h1' => [
                'base' => [
                    'text-5xl',
                ],
                'themes' => []
            ],
            'h2' => [
                'base' => [
                    'text-4xl',
                ],
                'themes' => []
            ],

            'h3' => [
                'base' => 'text-3xl',
                'themes' => []
            ],

            'h4' => [
                'base'   => 'text-2xl',
                'themes' => []
            ],

            'h5' => [
                'base' => 'text-xl',
                'themes' => []
            ],

            'h6' => [
                'base' => 'text-lg',
                'themes' => []
            ],
        ]

    ]
];