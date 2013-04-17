<?php
return array(
    'code' => '223',
    'patterns' => array(
        'national' => array(
            'general' => '/^[246-8]\\d{7}$/',
            'fixed' => '/^(?:2(?:0(?:2[0-589]|7[027-9])|1(?:2[5-7]|[3-689]\\d))|44[239]\\d)\\d{4}$/',
            'mobile' => '/^(?:6[3569]|7\\d)\\d{6}$/',
            'tollfree' => '/^800\\d{5}$/',
            'emergency' => '/^1[578]$/',
        ),
        'possible' => array(
            'general' => '/^\\d{8}$/',
            'emergency' => '/^\\d{2}$/',
        ),
    ),
);