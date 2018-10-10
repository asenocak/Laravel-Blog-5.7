<?php
return [
    "accepted"          => ":attribute kabul edilmelidir.",
    "active_url"        => ":attribute geçerli bir URL olmalıdır.",
    "after"             => ":attribute şundan daha eski bir tarih olmalıdır :date.",
    "after_or_equal"    => ":attribute tarihi :date den daha sonra veya eşit olmalıdır.",
    "alpha"             => ":attribute sadece harflerden oluşmalıdır.",
    "alpha_dash"        => ":attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.",
    "alpha_num"         => ":attribute sadece harfler ve rakamlar içermelidir.",
    "array"             => ":attribute dizi olmalıdır.",
    "before"            => ":attribute şundan daha önceki bir tarih olmalıdır :date.",
    "before_or_equal"   => ":attribute tarihi :date den daha önce veya eşit olmalıdır.",
    "between"           => array(
        "numeric"   => ":attribute :min - :max arasında olmalıdır.",
        "file"      => ":attribute :min - :max arasındaki kilobayt değeri olmalıdır.",
        "string"    => ":attribute :min - :max arasında karakterden oluşmalıdır.",
        "array"     => ":attribute :min - :max arasında nesneye sahip olmalıdır."
    ),
    "boolean"           => ":attribute alanı true veya false olmalıdır.",
    "confirmed"         => ":attribute tekrarı eşleşmiyor.",
    "date"              => ":attribute geçerli bir tarih olmalıdır.",
    "date_format"       => ":attribute :format biçimi ile eşleşmiyor.",
    "different"         => ":attribute ile :other birbirinden farklı olmalıdır.",
    "digits"            => ":attribute :digits rakam olmalıdır.",
    "digits_between"    => ":attribute :min ile :max arasında rakam olmalıdır.",
    "dimensions"        => ":attribute yanlış resim boyutları vardır.",
    "distinct"          => ":attribute alanı aynı değere sahipfield has a duplicate value.",
    "email"             => ":attribute biçimi geçersiz.",
    "exists"            => "Seçili :attribute geçersiz.",
    "file"              => ":attribute alanı dosya türünde olmalıdır.",
    "filled"            => ":attribute alanının değeri olmak zorundadır.",
    "gt"                => [
        "numeric"   => ":attribute değeri :value den büyük olmalıdır.",
        "file"      => ":attribute değeri :value kilobytes dan çok olmalıdır.",
        "string"    => ":attribute değeri :value karakterden çok olmalıdır.",
        "array"     => ":attribute değeri :value elemandan fazla olmalıdır.",
    ],
    "gte"               => [
        "numeric"   => ":attribute değeri :value değerinden büyük veya eşit olmalıdır.",
        "file"      => ":attribute değeri :value kilobytes dan çok veya eşit olmalıdır.",  
        "string"    => ":attribute değeri :value karakterden büyük veya eşit  olmalıdır.",
        "array"     => ":attribute değeri :value veya daha fazla elamanı olmalıdır.",
    ],
    "image"             => ":attribute alanı resim dosyası olmalıdır.",
    "in"                => ":attribute değeri geçersiz.",
    "in_array"          => ":attribute alanı :other alanında olmalıdır.",
    "integer"           => ":attribute rakam olmalıdır.",
    "ip"                => ":attribute geçerli bir IP adresi olmalıdır.",
    "ipv4"              => ":attribute adresi geçerli bir IPv4 olmalıdır.",
    "ipv6"              => ":attribute adresi geçerli bir IPv6 olmalıdır.",
    "json"              => ":attribute geçerli bir JSON olmalıdır.",
    "lt"                => [
        "numeric"   => ":attribute değeri :value den küçük olmalıdır.",
        "file"      => ":attribute değeri :value kilobytes dan küçük olmalıdır.",
        "string"    => ":attribute değeri :value karakterden az olmalıdır.",
        "array"     => ":attribute değeri :value elemandan az olmalıdır.",
    ],
    'lte'               => [
        "numeric"   => ":attribute değeri :value değerinden küçük veya eşit olmalıdır.",
        "file"      => ":attribute değeri :value kilobytes dan az veya eşit olmalıdır.",
        "string"    => ":attribute değeri :value karakterden küçük veya eşit  olmalıdır.", 
        "array"     => ":attribute değeri :value değerden fazla olmamalıdır.",
    ],
    "max"               => array(
        "numeric"   => ":attribute değeri :max değerinden küçük olmalıdır.",
        "file"      => ":attribute değeri :max kilobayt değerinden küçük olmalıdır.",
        "string"    => ":attribute değeri :max karakter değerinden küçük olmalıdır.",
        "array"     => ":attribute değeri :max adedinden az nesneye sahip olmalıdır."
    ),
    "mimes"             => ":attribute dosya biçimi :values olmalıdır.",
    'mimetypes'         => ':attribute :values dosya tipinde olmalıdır.',
    "min"               => array(
        "numeric"   => ":attribute değeri :min değerinden büyük olmalıdır.",
        "file"      => ":attribute değeri :min kilobayt değerinden büyük olmalıdır.",
        "string"    => ":attribute değeri :min karakter değerinden büyük olmalıdır.",
        "array"     => ":attribute en az :min nesneye sahip olmalıdır."
    ),
    "not_in"            => "Seçili :attribute geçersiz.",
    'not_regex'         => ':attribute format geçersiz.',
    "numeric"           => ":attribute rakam olmalıdır.",
    'present'           => ':attribute alanı mevcut olmalıdır.',
    "regex"             => ":attribute biçimi geçersiz.",
    "required"          => ":attribute alanı gereklidir.",
    "required_if"       => ":attribute alanı, :other :value değerine sahip olduğunda zorunludur.",
    'required_unless'   => ':attribute alanı zorunludur.',
    "required_with"     => ":attribute alanı :values varken zorunludur.",
    "required_with_all" => ":attribute alanı :values varken zorunludur.",
    "required_without"  => ":attribute alanı :values yokken zorunludur.",
    "required_without_all"=> ":attribute alanı :values yokken zorunludur.",
    "same"              => ":attribute ile :other eşleşmelidir.",
    "size"              => array(
        "numeric"   => ":attribute :size olmalıdır.",
        "file"      => ":attribute :size kilobyte olmalıdır.",
        "string"    => ":attribute :size karakter olmalıdır.",
        "array"     => ":attribute :size nesneye sahip olmalıdır."
    ),
    'string'            => ':attribute string olmalıdır.',
    'timezone'          => ':attribute geçerli bir bölge olmalıdır.',
    "unique"            => ":attribute daha önceden kayıt edilmiş.",
    'uploaded'          => ':attribute dosya yükleme hatalı.',
    "url"              => ":attribute biçimi geçersiz.",

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes' => [],
];