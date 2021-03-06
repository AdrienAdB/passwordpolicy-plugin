<?php return [
    'plugin' => [
        'name' => 'Password Policy',
        'description' => 'Various password policies for administrators and front-end users'
    ],
    'settings' => [
      'activate_backend_policy' => 'Activate backend user password policy',
      'activate_user_policy' => 'Activate front-user password policy (RainLab.User)',
      'description' => 'Select minimum number of each option below:',
      'length' => 'Length',
      'lower_case' => 'Lower case',
      'upper_case' => 'Upper case',
      'special_character' => 'Special character',
      'numbers' => 'Numbers',
      'pwned' => 'Pwned check',
      'pwned_comment' => 'Check your hashed password in haveibeenpwned.com database',
      'pwned_found' => 'Threshold of found in haveibeenpwned.com database',

      'tabs' => [
        'backend' => "Backend users",
        'user' => "Front-end users",
      ]
    ],
];
