<?php
return [

    /*
    |--------------------------------------------------------------------------
    | سطور لغة التحقق
    |--------------------------------------------------------------------------
    |
    | السطور اللغوية التالية تحتوي على رسائل الخطأ الافتراضية المستخدمة من قبل
    | فئة المُحقق. بعض هذه القواعد لها عدة نسخ،
    | مثل قواعد الحجم. لك حرية تعديل كل من هذه الرسائل هنا.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other هو :value.',
    'active_url' => ':attribute ليس عنوان URL صالح.',
    'after' => 'يجب أن يكون :attribute تاريخ بعد :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخ بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على حروف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على حروف، أرقام، شرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخ قبل :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخ قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم ملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد أحرف :attribute بين :min و :max حرف.',
        'array' => 'يجب أن يحتوي :attribute على عدد عناصر بين :min و :max.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صحيح أو خاطئ.',
    'confirmed' => 'تأكيد :attribute لا يتطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => ':attribute ليس تاريخ صحيح.',
    'date_equals' => ':attribute يجب أن يكون تاريخ يساوي :date.',
    'date_format' => ':attribute لا يطابق الصيغة :format.',
    'declined' => 'يجب رفض :attribute.',
    'declined_if' => 'يجب رفض :attribute عندما :other هو :value.',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون :attribute :digits رقم.',
    'digits_between' => 'يجب أن يكون :attribute بين :min و :max رقم.',
    'dimensions' => ':attribute له أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد الأمور التالية: :values.',
    'enum' => 'المحدد :attribute غير صالح.',
    'exists' => 'المحدد :attribute غير صالح.',
    'file' => 'يجب أن يكون :attribute ملفاً.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون عدد أحرف :attribute أكبر من :value حرف.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون عدد أحرف :attribute أكبر من أو يساوي :value حرف.',
        'array' => 'يجب أن يحتوي :attribute على :value عناصر أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'المحدد :attribute غير صالح.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عدد صحيح.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيح.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيح.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالح.',
    'json' => 'يجب أن يكون :attribute سلسلة JSON صحيحة.',
    'lt' => [
        'numeric' => 'يجب أن يكون :attribute أقل من :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أقل من :value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أقل من :value حروف.',
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عناصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
        'file' => 'يجب ألا يتجاوز حجم ملف :attribute :value كيلوبايت.',
        'string' => 'يجب ألا يتجاوز طول :attribute :value حروف.',
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عناصر.',
    ],
    'mac_address' => 'يجب أن يكون :attribute عنوان MAC صالح.',
    'max' => [
        'numeric' => 'يجب ألا يكون :attribute أكبر من :max.',
        'file' => 'يجب ألا يكون حجم ملف :attribute أكبر من :max كيلوبايت.',
        'string' => 'يجب ألا يكون طول :attribute أكبر من :max حروف.',
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :max عناصر.',
    ],
    'mimes' => 'يجب أن يكون ملف :attribute من نوع: :values.',
    'mimetypes' => 'يجب أن يكون ملف :attribute من نوع: :values.',
    'min' => [
        'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
        'file' => 'يجب أن يكون حجم ملف :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute على الأقل :min حروف.',
        'array' => 'يجب أن يحتوي :attribute على الأقل :min عناصر.',
    ],
    'multiple_of' => 'يجب أن يكون :attribute مضاعفاً ل: :value.',
    'not_in' => 'ال:attribute المختار غير صالح.',
    'not_regex' => 'تنسيق :attribute غير صالح.',
    'numeric' => 'يجب أن يكون :attribute رقماً.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب تقديم حقل :attribute.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other في :values.',
    'prohibits' => 'حقل :attribute يحظر وجود :other.',
    'regex' => 'تنسيق :attribute غير صالح.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي حقل :attribute على إدخالات لـ: :values.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عند وجود :values.',
    'required_with_all' => 'حقل :attribute مطلوب عند وجود كل من :values.',
    'required_without' => 'حقل :attribute مطلوب عند عدم وجود :values.',
    'required_without_all' => 'حقل :attribute مطلوب عند عدم وجود أي من :values.',
    'same' => 'يجب أن يتطابق :attribute و :other.',
    'size' => [
        'numeric' => 'يجب أن يكون :attribute :size.',
        'file' => 'يجب أن يكون حجم ملف :attribute :size كيلوبايت.',
        'string' => 'يجب أن يحتوي :attribute على :size حروف.',
        'array' => 'يجب أن يحتوي :attribute على :size عناصر.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بإحدى القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute نصاً.',
    'timezone' => 'يجب أن يكون :attribute منطقة زمنية صالحة.',
    'unique' => ':attribute تم أخذه بالفعل.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'url' => 'يجب أن يكون :attribute عنوان URL صالحاً.',
    'uuid' => 'يجب أن يكون :attribute UUID صالحاً.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    'attributes' => [
        'user_name' => 'الاسم الاول',
        'email' => 'الايميل',
        'password' => 'كلمة السر',
        'roles_name' => 'الدور',
        'code' => 'كود التحقق',
        'password_confirmation' => 'تاكيد كلمة السر',

        'name' => 'الاسم',
        'first_name' => 'الاسم الاول',
        'middle_name' => 'الاسم الوسط',
        'last_name' => 'الاسم الاخير',

        'gender'=>'الجنس',
        'birth_day'=>'تاريخ الميلاد',
        'location'=>'الموقع',
        'image'=>'صورة',
        'skills'=>'المهارات',
        'certificates'=>'الشهادات',
        'about'=>'حول',

        'company_name' => 'اسم الشركة',
        'logo' => 'الشعار',
        'contact_info' => 'معلومات الاتصال',

        'title'=>'العنوان',
        'body'=>'',
        'file' => 'ملف',
        'job_type' =>'نوع العمل',
        'work_place_type' => 'نوع مكان العمل',
        'job_hours' => 'ساعات العمل',
        'qualifications' => 'المؤهلات',
        'skills_req' => 'المهرات',
        'salary' => 'الراتب',
        'vacant' => 'شاغر',

        '' => '',
        '' => '',
    ],

];