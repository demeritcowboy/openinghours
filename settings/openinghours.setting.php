<?php

  use CRM_Openinghours_ExtensionUtil as E;
  return [
    'openinghours_opening' => [
      'name' => 'openinghours_opening',
      'type' => 'Array',
      'html_type' => 'select',
      'options' => [
        '00:00' => '00:00',
        '01:00' => '01:00',
        '02:00' => '02:00',
        '03:00' => '03:00',
        '04:00' => '04:00',
        '05:00' => '05:00',
        '06:00' => '06:00',
        '07:00' => '07:00',
        '08:00' => '08:00',
        '09:00' => '09:00',
        '10:00' => '10:00',
        '11:00' => '11:00',
        '12:00' => '12:00',
        '13:00' => '13:00',
        '14:00' => '14:00',
        '15:00' => '15:00',
        '16:00' => '16:00',
        '17:00' => '17:00',
        '18:00' => '18:00',
        '19:00' => '19:00',
        '20:00' => '20:00',
        '21:00' => '21:00',
        '22:00' => '22:00',
        '23:00' => '23:00',
        '24:00' => '24:00',
      ],
      'settings_pages' => [
        'openinghours' => [
          'weight' => 300,
        ]
      ],
      'default' => '06:00',
      'title' => E::ts('Opening'),
      'is_domain' => 1,
      'is_contact' => 0,
      'description' => E::ts('Time Contribution Pages are open to process Transactions'),
    ],

    'openinghours_closing' => [
      'name' => 'openinghours_closing',
      'type' => 'Array',
      'html_type' => 'select',
      'options' => [
        '00:00' => '00:00',
        '01:00' => '01:00',
        '02:00' => '02:00',
        '03:00' => '03:00',
        '04:00' => '04:00',
        '05:00' => '05:00',
        '06:00' => '06:00',
        '07:00' => '07:00',
        '08:00' => '08:00',
        '09:00' => '09:00',
        '10:00' => '10:00',
        '11:00' => '11:00',
        '12:00' => '12:00',
        '13:00' => '13:00',
        '14:00' => '14:00',
        '15:00' => '15:00',
        '16:00' => '16:00',
        '17:00' => '17:00',
        '18:00' => '18:00',
        '19:00' => '19:00',
        '20:00' => '20:00',
        '21:00' => '21:00',
        '22:00' => '22:00',
        '23:00' => '23:00',
        '24:00' => '24:00',
      ],
      'settings_pages' => [
        'openinghours' => [
          'weight' => 310,
        ]
      ],
      'default' => '24:00',
      'title' => E::ts('Closing'),
      'is_domain' => 1,
      'is_contact' => 0,
      'description' => E::ts('Time Contribution Pages are closed'),
    ],

  ];
