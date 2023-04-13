<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Seeder;

class ArSeeder extends Seeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    protected $lang = 'ar';

    /**
     * Attribute that defines regions
     *
     * @var array
     */
    protected $regions = [
        'africa' => 'أفريقيا',
        'americas' => 'الأمريكيتين',
        'asia' => 'آسيا',
        'europe' => 'أوروبا',
        'oceania' => 'استراليا',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Builder::regionsTranslations($this->regions, $this->lang);
        Builder::countriesTranslations($this->countries(), $this->lang);
    }

    public function countries()
    {
        return [
            'AI' => "أنغيلا",
            'AG' => "أنتيغوا وبربودا",
            'AR' => "الأرجنتين",
            'AW' => "أروبا",
            'BS' => "جزر البهاما",
            'BB' => "باربادوس",
            'BZ' => "بليز",
            'BM' => "برمودا",
            'BO' => "بوليفيا",
            'BR' => "البرازيل",
            'CA' => "كندا",
            'CL' => "تشيلي",
            'CO' => "كولومبيا",
            'CR' => "كوستاريكا",
            'CU' => "كوبا",
            'DM' => "دومينيكا",
            'SV' => "السلفادور",
            'EC' => "خط الاستواء",
            'US' => "الولايات المتحدة",
            'GD' => "قنبلة يدوية",
            'GL' => "جرينلاند",
            'GP' => "جوادلوب",
            'GT' => "جواتيمالا",
            'GY' => "غيانا",
            'GF' => "غيانا الفرنسية",
            'HT' => 'هايتي',
            'HN' => "هندوراس",
            'KY' => "جزر كايمان",
            'FK' => "جزر مالفيناس",
            'TC' => "جزر تركس وكايكوس",
            'VG' => "جزر فيرجن البريطانية",
            'VI' => "جزر فيرجن الأمريكية",
            'JM' => "جامايكا",
            'MQ' => "مارتينيك",
            'MS' => "مونتسيرات",
            'MX' => "المكسيك",
            'NI' => "نيكاراغوا",
            'PA' => "بنما",
            'PY' => "باراغواي",
            'PE' => "بيرو",
            'PR' => "بورتوريكو",
            'DO' => "جمهورية الدومينيكان",
            'PM' => 'Saint Pierre and Miquelon',
            'LC' => "سانت لوسيا",
            'SR' => "سورينام",
            'BL' => "القديس بارثولوميو",
            'KN' => "سانت كيتس ونيفيس",
            'MF' => "سانت مارتن",
            'VC' => "سانت فنسنت وجزر غرينادين",
            'TT' => "ترينيداد وتوباغو",
            'UY' => "أوروجواي",
            'VE' => "فنزويلا",
            'AL' => "ألبانيا",
            'DE' => "ألمانيا",
            'AD' => "أندورا",
            'BY' => "بيلاروسيا",
            'BG' => "بلغاريا",
            'BE' => "بلجيكا",
            'BA' => "البوسنة والهرسك",
            'HR' => "كرواتيا",
            'DK' => "الدنمارك",
            'SK' => "سلوفاكيا",
            'SI' => "سلوفينيا",
            'ES' => "إسبانيا",
            'EE' => "إستونيا",
            'FI' => "فنلندا",
            'FR' => "فرنسا",
            'GI' => "جبل طارق",
            'GR' => "اليونان",
            'GG' => "غيرنسي",
            'NL' => "هولندا",
            'HU' => "المجر",
            'IM' => "جزيرة مان",
            'AX' => "جزر آلاند",
            'FO' => "جزر فارو",
            'IE' => "أيرلندا",
            'IS' => 'أيسلندا',
            'IT' => "إيطاليا",
            'JE' => "جيرسي",
            'LV' => "لاتفيا",
            'LI' => "ليختنشتاين",
            'LT' => "ليتوانيا",
            'LU' => "لوكسمبورغ",
            'MK' => "مقدونيا",
            'MT' => "مالطا",
            'MD' => "مولدوفا",
            'ME' => "الجبل الأسود",
            'MC' => "موناكو",
            'NO' => "النرويج",
            'PL' => " بولندا ",
            'PT' => "البرتغال",
            'GB' => "المملكة المتحدة",
            'CZ' => "جمهورية التشيك",
            'RO' => "رومانيا",
            'RU' => "روسيا",
            'SM' => "سان مارينو",
            'SE' => "السويد",
            'CH' => "سويسرا",
            'SJ' => "سفالبارد وجان ماين",
            'RS' => "صربيا",
            'CS' => "صربيا والجبل الأسود",
            'UA' => "أوكرانيا",
            'VA' => "الفاتيكان",
            'AT' => "النمسا",
            'AQ' => "القارة القطبية الجنوبية",
            'AU' => "أستراليا",
            'FJ' => "فيجي",
            'GS' => "جورجيا الجنوبية وجزر ساندويتش الجنوبية",
            'GU' => "غوام",
            'BV' => "جزيرة بوفيت",
            'HM' => "جزيرة هيرد وجزر ماكدونالد",
            'NF' => "جزيرة نورفولك",
            'CC' => "جزر كوكو",
            'CK' => "جزر كوك",
            'MP' => "جزر ماريانا الشمالية",
            'MH' => "جزر مارشال",
            'UM' => "الجزر الصغيرة النائية للولايات المتحدة",
            'CX' => "جزر الكريسماس",
            'SB' => "جزر سليمان",
            'FM' => "ميكرونيزيا",
            'NR' => "ناورو",
            'NU' => "لا",
            'NC' => "كاليدونيا الجديدة",
            'NZ' => "نيوزيلندا",
            'PW' => "بالاو",
            'PG' => "بابوا غينيا الجديدة",
            'PN' => "بيتكيرن",
            'PF' => "بولينيزيا الفرنسية",
            'KI' => "كيريباتي",
            'WS' => "ساموا",
            'AS' => "ساموا الأمريكية",
            'IO' => "إقليم المحيط الهندي البريطاني",
            'TF' => "الأقاليم الجنوبية الفرنسية",
            'TK' => "توكيلاو",
            'TO' => "تونجا",
            'TV' => "توفالو",
            'VU' => "فانواتو",
            'WF' => "واليس وفوتونا",
            'AO' => "أنغولا",
            'DZ' => "الجزائر",
            'BJ' => "بنين",
            'BW' => "بوتسوانا",
            'BF' => "بوركينا فاسو",
            'BI' => "بوروندي",
            'CV' => "كيب جرين",
            'TD' => "تشاد",
            'KM' => "جزر القمر",
            'CG' => "الكونغو",
            'CD' => "الكونغو كينشاسا",
            'CI' => "ساحل العاج",
            'DJ' => "جيبوتي",
            'EG' => "Egito",
            'ER' => 'إريتريا',
            'ET' => 'إثيوبيا',
            'GA' => 'Gabaon',
            'GH' => "رفض",
            'GN' => "غينيا",
            'GW' => "غينيا بيساو",
            'GQ' => "غينيا الاستوائية",
            'GM' => "غامبيا",
            'LS' => "ليسوتو",
            'LR' => "ليبيريا",
            'LY' => "ليبيا",
            'MG' => "مدغشقر",
            'MW' => "ملاوي",
            'ML' => "مالي",
            'MA' => "المغرب",
            'MR' => "موريتانيا",
            'MU' => "موريشيوس",
            'YT' => "مايوت",
            'MZ' => "موزمبيق",
            'NA' => "ناميبيا",
            'NG' => "نيجيريا",
            'NE' => "النيجر",
            'KE' => "ملكة",
            'CF' => "جمهورية إفريقيا الوسطى",
            'CM' => "جمهورية الكاميرون",
            'RE' => "اجتماع",
            'RW' => "رواندا",
            'EH' => "سارة الغربية",
            'SH' => "سانت هيلانة",
            'SN' => 'السنغال',
            'SL' => "Serra Leoa",
            'SC' => "سيشيل",
            'SO' => "الصومال",
            'SZ' => "سوازيلاند",
            'SD' => "جنوب",
            'ST' => "ساو تومي وبرينسيبي",
            'TZ' => "تنزانيا",
            'TG' => "توغو",
            'TN' => 'تونس',
            'UG' => "أوغندا",
            'ZW' => "زيمبابوي",
            'ZM' => "زامبيا",
            'ZA' => "جنوب إفريقيا",
            'AF' => "أفغانستان",
            'AM' => "أرمينيا",
            'SA' => "المملكة العربية السعودية",
            'AZ' => "أذربيجان",
            'BH' => "البحرين",
            'BD' => "بنغلاديش",
            'BN' => "بروناي",
            'BT' => "بوتان",
            'KH' => "كمبوديا",
            'KZ' => "كازاخستان",
            'QA' => 'Cather',
            'CN' => "الصين",
            'CY' => "قبرص",
            'SG' => "سنغافورة",
            'KP' => "كوريا الشمالية",
            'KR' => "كوريا الجنوبية",
            'AE' => "الإمارات العربية المتحدة",
            'PH' => "الفلبين",
            'GE' => "جورجيا",
            'HK' => 'هونغ كونغ , المنطقة الإدارية. خاص من الصين ',
            'ID' => "إندونيسيا",
            'IQ' => "العراق",
            'IR' => "إيران",
            'IL' => "إسرائيل",
            'HE' => 'Iêmen',
            'JP' => "اليابانية",
            'JO' => "الأردن",
            'KW' => "الكويت",
            'LB' => "لبنان",
            'MO' => 'ماكاو , المنطقة الإدارية. خاص من الصين ',
            'MV' => "جزر المالديف",
            'MY' => "ماليزيا",
            'MM' => "ميانمار",
            'MN' => "منغوليا",
            'NP' => "نيبال",
            'OM' => 'Om',
            'PK' => "باكستاني",
            'KG' => "قيرغيزستان",
            'LA' => "جمهورية لاوس الديمقراطية الشعبية",
            'LK' => "سريلانكا",
            'SY' => 'سوريا',
            'TJ' => "طاجيكي",
            'TH' => "تايلاند",
            'TW' => "تايوان",
            'PS' => "الأراضي الفلسطينية",
            'TL' => 'تيمور الشرقية',
            'TM' => 'تركمانستان',
            'TR' => "تركيا",
            'UZ' => "أوزبكي",
            'VN' => "فيتنام",
            'IN' => "الهند",
        ];
    }
}
