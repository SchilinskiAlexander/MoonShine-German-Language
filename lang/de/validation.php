<?php

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

return [
    'accepted'             => 'Das :attribute muss akzeptiert werden.',
    'accepted_if'          => 'Das :attribute muss akzeptiert werden, wenn :other :value entspricht.',
    'active_url'           => 'Das :attribute ist keine gültige URL.',
    'after'                => 'Das :attribute muss ein Datum nach dem :date sein.',
    'after_or_equal'       => 'Das :attribute muss ein Datum nach oder gleich dem :date sein.',
    'alpha'                => 'Das :attribute darf nur Buchstaben enthalten.',
    'alpha_dash'           => 'Das :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num'            => 'Das :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array'                => 'Das :attribute muss ein Array sein.',
    'before'               => 'Das :attribute muss ein Datum vor dem :date sein.',
    'before_or_equal'      => 'Das :attribute muss ein Datum vor oder gleich dem :date sein.',
    'between'              => [
        'array'   => 'Das :attribute muss zwischen :min und :max Elemente haben.',
        'file'    => 'Die Dateigröße von :attribute muss zwischen :min und :max Kilobytes liegen.',
        'numeric' => 'Das :attribute muss zwischen :min und :max liegen.',
        'string'  => 'Das :attribute muss zwischen :min und :max Zeichen enthalten.',
    ],
    'boolean'              => 'Das Feld :attribute muss wahr oder falsch sein.',
    'confirmed'            => 'Die Bestätigung für :attribute stimmt nicht überein.',
    'current_password'     => 'Das Passwort ist falsch.',
    'date'                 => 'Das :attribute ist kein gültiges Datum.',
    'date_equals'          => 'Das :attribute muss ein Datum gleich dem :date sein.',
    'date_format'          => 'Das :attribute entspricht nicht dem Format :format.',
    'declined'             => 'Das :attribute muss abgelehnt werden.',
    'declined_if'          => 'Das :attribute muss abgelehnt werden, wenn :other :value ist.',
    'different'            => 'Das :attribute und :other müssen unterschiedlich sein.',
    'digits'               => 'Das :attribute muss :digits Ziffern haben.',
    'digits_between'       => 'Das :attribute muss zwischen :min und :max Ziffern haben.',
    'dimensions'           => 'Das :attribute hat ungültige Bildabmessungen.',
    'distinct'             => 'Das Feld :attribute hat einen doppelten Wert.',
    'email'                => 'Das :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with'            => 'Das :attribute muss mit einem der folgenden Werte enden: :values',
    'enum'                 => 'Der ausgewählte Wert für :attribute ist ungültig.',
    'exists'               => 'Der ausgewählte Wert für :attribute ist ungültig.',
    'file'                 => 'Das :attribute muss eine Datei sein.',
    'filled'               => 'Das Feld :attribute muss ausgefüllt sein.',
    'gt'                   => [
        'array'   => 'Das :attribute muss mehr als :value Elemente haben.',
        'file'    => 'Die Dateigröße von :attribute muss größer als :value Kilobytes sein.',
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'string'  => 'Das :attribute muss mehr als :value Zeichen enthalten.',
    ],
    'gte'                  => [
        'array'   => 'Das :attribute muss :value oder mehr Elemente haben.',
        'file'    => 'Die Dateigröße von :attribute muss mindestens :value Kilobytes betragen.',
        'numeric' => 'Das :attribute muss mindestens :value sein.',
        'string'  => 'Das :attribute muss mindestens :value Zeichen enthalten.',
    ],
    'image'                => 'Das :attribute muss ein Bild sein.',
    'in'                   => 'Der ausgewählte Wert für :attribute ist ungültig.',
    'in_array'             => 'Das Feld :attribute existiert nicht in :other.',
    'integer'              => 'Das :attribute muss eine ganze Zahl sein.',
    'ip'                   => 'Das :attribute muss eine gültige IP-Adresse sein.',
    'ipv4'                 => 'Das :attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6'                 => 'Das :attribute muss eine gültige IPv6-Adresse sein.',
    'json'                 => 'Das :attribute muss ein gültiger JSON-String sein.',
    'lt'                   => [
        'array'   => 'Das :attribute muss weniger als :value Elemente haben.',
        'file'    => 'Die Dateigröße von :attribute muss kleiner als :value Kilobytes sein.',
        'numeric' => 'Das :attribute muss kleiner als :value sein.',
        'string'  => 'Das :attribute muss weniger als :value Zeichen enthalten.',
    ],
    'lte'                  => [
        'array'   => 'Das :attribute darf nicht mehr als :value Elemente haben.',
        'file'    => 'Die Dateigröße von :attribute darf maximal :value Kilobytes betragen.',
        'numeric' => 'Das :attribute darf maximal :value sein.',
        'string'  => 'Das :attribute darf maximal :value Zeichen enthalten.',
    ],
    'mac_address'          => 'Das :attribute muss eine gültige MAC-Adresse sein.',
    'max'                  => [
        'array'   => 'Das :attribute darf nicht mehr als :max Elemente haben.',
        'file'    => 'Die Dateigröße von :attribute darf maximal :max Kilobytes betragen.',
        'numeric' => 'Das :attribute darf maximal :max sein.',
        'string'  => 'Das :attribute darf maximal :max Zeichen enthalten.',
    ],
    'mimes'                => 'Das :attribute muss eine Datei des Typs: :values sein.',
    'mimetypes'            => 'Das :attribute muss eine Datei des Typs: :values sein.',
    'min'                  => [
        'array'   => 'Das :attribute muss mindestens :min Elemente haben.',
        'file'    => 'Die Dateigröße von :attribute muss mindestens :min Kilobytes betragen.',
        'numeric' => 'Das :attribute muss mindestens :min sein.',
        'string'  => 'Das :attribute muss mindestens :min Zeichen enthalten.',
    ],
    'multiple_of'          => 'Das :attribute muss ein Vielfaches von :value sein.',
    'not_in'               => 'Der ausgewählte Wert für :attribute ist ungültig.',
    'not_regex'            => 'Das :attribute-Format ist ungültig.',
    'numeric'              => 'Das :attribute muss eine Zahl sein.',
    'password'             => 'Das Passwort ist ungültig.',
    'present'              => 'Das Feld :attribute muss vorhanden sein.',
    'prohibited'           => 'Das Feld :attribute ist verboten.',
    'prohibited_if'        => 'Das Feld :attribute ist verboten, wenn :other :value ist.',
    'prohibited_unless'    => 'Das Feld :attribute ist verboten, es sei denn, :other ist in :values.',
    'prohibits'            => 'Das Feld :attribute verbietet :other.',
    'regex'                => 'Das :attribute-Format ist ungültig.',
    'required'             => 'Das Feld :attribute ist erforderlich.',
    'required_array_keys'  => 'Das :attribute muss Schlüssel enthalten: :values',
    'required_if'          => 'Das Feld :attribute ist erforderlich, wenn :other :value ist.',
    'required_unless'      => 'Das Feld :attribute ist erforderlich, es sei denn, :other ist in :values.',
    'required_with'        => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all'    => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden ist.',
    'required_without'     => 'Das Feld :attribute ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das Feld :attribute ist erforderlich, wenn keines der :values vorhanden ist.',
    'same'                 => 'Das :attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'array'   => 'Das :attribute muss :size Elemente enthalten.',
        'file'    => 'Die Dateigröße von :attribute muss :size Kilobytes betragen.',
        'numeric' => 'Das :attribute muss :size sein.',
        'string'  => 'Das :attribute muss :size Zeichen enthalten.',
    ],
    'starts_with'          => 'Das :attribute muss mit einem der folgenden Werte beginnen: :values',
    'string'               => 'Das :attribute muss eine Zeichenkette sein.',
    'timezone'             => 'Das :attribute muss eine gültige Zeitzone sein.',
    'unique'               => 'Das :attribute ist bereits vergeben.',
    'uploaded'             => 'Das Hochladen von :attribute ist fehlgeschlagen.',
    'url'                  => 'Das :attribute-Format ist ungültig.',
    'uuid'                 => 'Das :attribute muss eine gültige UUID sein.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'Benutzerdefinierte Nachricht',
        ],
    ],
];