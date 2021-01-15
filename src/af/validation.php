<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Die :attribute moet aanvaar word.',
    'active_url' => 'Die :attribute is nie \'n geldig URL.',
    'after' => 'Die :attribute moet \'n datum wees na :date.',
    'after_or_equal' => 'Die :attribute moet \'n datum wees na of gelyk aan :date.',
    'alpha' => 'Die :attribute mag slegs letters bevat.',
    'alpha_dash' => 'Die :attribute mag slegs letters, syfers, strepies en onderstrepe bevat.',
    'alpha_num' => 'Die :attribute mag slegs letters en syfers bevat.',
    'array' => 'Die :attribute moet \'n array wees.',
    'before' => 'Die :attribute moet datum voor :date wees.',
    'before_or_equal' => 'Die :attribute Moet datum voor of gelyk aan :date wees.',
    'between' => [
        'numeric' => 'Die :attribute moet tussen :min en :max wees.',
        'file' => 'Die :attribute moet tussen :min en :max kilobytes wees.',
        'string' => 'Die :attribute moet tussen :min en :max karakters wees.',
        'array' => 'Die :attribute moet tussen :min en :max items hê.',
    ],
    'boolean' => 'Die :attribute veld moet waar of onwaar wees.',
    'confirmed' => 'Die :attribute bevestiging stem nie ooreen nie.',
    'date' => 'Die :attribute is nie geldige datum nie.',
    'date_equals' => 'Die :attribute moet \'n datum wees wat gelyk is aan :date.',
    'date_format' => 'Die :attribute stem nie ooreen met die formaat :format nie.',
    'different' => 'Die :attribute en :other moet anders wees.',
    'digits' => 'Die :attribute moet :digits syfers wees.',
    'digits_between' => 'Die :attribute moet tussen :min en :max syfers wees.',
    'dimensions' => 'Die :attribute het ongeldige beeldafmetings.',
    'distinct' => 'Die :attribute veld het \'n duplikaatwaarde.',
    'email' => 'Die :attribute moet geldige epos adres wees.',
    'ends_with' => 'Die :attribute moet eindig met een van die volgende: :values.',
    'exists' => 'Die geselketeerde :attribute is ongeldig.',
    'file' => 'Die :attribute moet \'n lêer wees.',
    'filled' => 'Die :attribute veld \'n waarde moet hê.',
    'gt' => [
        'numeric' => 'Die :attribute moet groter wees as :value.',
        'file' => 'Die :attribute moet groter wees :value kilobytes.',
        'string' => 'Die :attribute moet groter wees as :value karakters.',
        'array' => 'Die :attribute moet meer hê as :value items.',
    ],
    'gte' => [
        'numeric' => 'Die :attribute moet groter wees of gelyk wees aan :value.',
        'file' => 'Die :attribute moet groter wees as of gelyk wees :value kilobytes.',
        'string' => 'Die :attribute moet groter wees as of gelyk wees :value characters.',
        'array' => 'Die :attribute moet :value items hê of meer.',
    ],
    'image' => 'Die :attribute moet n foto wees.',
    'in' => 'Die geselketeerde :attribute is ongeldig.',
    'in_array' => 'Die :attribute veld bestaan nie in :other.',
    'integer' => 'Die :attribute moet \'n getal wees.',
    'ip' => 'Die :attribute moet geldige IP adres wees.',
    'ipv4' => 'Die :attribute moet geldige IPv4 address wees.',
    'ipv6' => 'Die :attribute moet geldige IPv6 address wees.',
    'json' => 'Die :attribute moet geldige JSON string wees.',
    'lt' => [
        'numeric' => 'Die :attribute moet minder as wees :value.',
        'file' => 'Die :attribute moet minder as wees :value kilobytes.',
        'string' => 'Die :attribute moet minder as wees than :value karakters.',
        'array' => 'Die :attribute moet minder as wees :value items.',
    ],
    'lte' => [
        'numeric' => 'Die :attribute moet kleiner of gelyk wees aan :value.',
        'file' => 'Die :attribute moet kleiner of gelyk wees aan :value kilobytes.',
        'string' => 'Die :attribute moet kleiner of gelyk wees aan :value karakters.',
        'array' => 'Die :attribute moet nie meer as :value items wees.',
    ],
    'max' => [
        'numeric' => 'Die :attribute mag nie groter as :max wees.',
        'file' => 'Die :attribute mag nie groter as :max kilobytes wees.',
        'string' => 'Die :attribute mag nie groter as :max karakters wees.',
        'array' => 'Die :attribute mag nie groter as :max items wees.',
    ],
    'mimes' => 'Die :attribute moet \'n tipe lêer wees: :values.',
    'mimetypes' => 'Die :attribute moet \'n tipe lêer wees: :values.',
    'min' => [
        'numeric' => 'Die :attribute moet ten minste :min wees.',
        'file' => 'Die :attribute moet ten minste :min kilobytes wees.',
        'string' => 'Die :attribute moet ten minste :min karakters wees.',
        'array' => 'Die :attribute moet ten minste :min items wees.',
    ],
    'not_in' => 'Die geselketeerde :attribute is ongeldig.',
    'not_regex' => 'Die :attribute formaat is ongeldig.',
    'numeric' => 'Die :attribute moet \'n syfer wees.',
    'password' => 'Die wagwoord is verkeerd.',
    'present' => 'Die :attribute veld moet teenwoordig wees.',
    'regex' => 'Die :attribute formaat is ongeldig.',
    'required' => 'Die :attribute veld is verpligtend.',
    'required_if' => 'Die :attribute veld is verpligtend wanneer :other :value is.',
    'required_unless' => 'Die :attribute veld is verpligtend tensy :other in :values is.',
    'required_with' => 'Die :attribute veld is verpligtend wanneer :values teenwoordig is.',
    'required_with_all' => 'Die :attribute veld is verpligtend wanneer :values teenwoordig is.',
    'required_without' => 'Die :attribute veld is verpligtend wanneer :values nie teenwoordig is.',
    'required_without_all' => 'Die :attribute veld is verpligtend wanneer geen van :values teenwoordig is.',
    'same' => 'Die :attribute en :other moet ooreenstem.',
    'size' => [
        'numeric' => 'Die :attribute moet :size wees.',
        'file' => 'Die :attribute moet :size kilobytes wees.',
        'string' => 'Die :attribute moet:size karakters wees.',
        'array' => 'Die :attribute moet :size items bevat.',
    ],
    'starts_with' => 'Die :attribute moet met een van die volgende begin: :values.',
    'string' => 'Die :attribute moet \'n string wees.',
    'timezone' => 'Die :attribute moet \'n geldige sone wees.',
    'unique' => 'Die :attribute is reeds geneem.',
    'uploaded' => 'Die :attribute kon nie oplaai.',
    'url' => 'Die :attribute formaat is ongeldig.',
    'uuid' => 'Die :attribute moet \'n geldige UUID wees.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'address'               => 'adres',
        'age'                   => 'ouderdom',
        'body'                  => 'liggaam',
        'city'                  => 'stad',
        'content'               => 'inhoud',
        'country'               => 'land',
        'date'                  => 'datum',
        'day'                   => 'dag',
        'description'           => 'beskrywing',
        'email'                 => 'epos',
        'excerpt'               => 'uittreksel',
        'first_name'            =>  'naam',
        'gender'                => 'geslag',
        'hour'                  => 'uur',
        'last_name'             => 'van',
        'message'               => 'boodskap',
        'minute'                => 'minuut',
        'mobile'                => 'mobiele',
        'month'                 => 'maand',
        'name'                  => 'naam',
        'password'              => 'wagwoord',
        'password_confirmation' => 'bevestig_wagwoord',
        'phone'                 => 'telefoon',
        'price'                 => 'prys',
        'role'                  => 'rol',
        'second'                => 'sekonde',
        'sex'                   => 'geslag',
        'subject'               => 'onderwerp',
        'terms'                 => 'terme',
        'time'                  => 'tyd',
        'title'                 => 'titel',
        'username'              => 'gebruikersnaam',
        'year'                  => 'jaar',
    ],

];
