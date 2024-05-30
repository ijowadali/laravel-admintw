<?php

declare(strict_types=1);

namespace App\Enums;

enum Country: string
{
    case United_Kingdom = 'GB';
    case United_States = 'US';
    case Afghanistan = 'AF';
    case Aland_Islands = 'AX';
    case Albania = 'AL';
    case Algeria = 'DZ';
    case AmericanSamoa = 'AS';
    case Andorra = 'AD';
    case Angola = 'AO';
    case Anguilla = 'AI';
    case Antarctica = 'AQ';
    case Antigua_and_Barbuda = 'AG';
    case Argentina = 'AR';
    case Armenia = 'AM';
    case Aruba = 'AW';
    case Australia = 'AU';
    case Austria = 'AT';
    case Azerbaijan = 'AZ';
    case Bahamas = 'BS';
    case Bahrain = 'BH';
    case Bangladesh = 'BD';
    case Barbados = 'BB';
    case Belarus = 'BY';
    case Belgium = 'BE';
    case Belize = 'BZ';
    case Benin = 'BJ';
    case Bermuda = 'BM';
    case Bhutan = 'BT';
    case Bolivia_Plurination = 'BO';
    case Bosnia_and_Herzegovi = 'BA';
    case Botswana = 'BW';
    case Brazil = 'BR';
    case British_Indian_Ocean = 'IO';
    case Brunei_Darussalam = 'BN';
    case Bulgaria = 'BG';
    case Burkina_Faso = 'BF';
    case Burundi = 'BI';
    case Cambodia = 'KH';
    case Cameroon = 'CM';
    case Cape_Verde = 'CV';
    case Cayman_Islands = 'KY';
    case Central_African_Repu = 'CF';
    case Chad = 'TD';
    case China = 'CN';
    case Christmas_Island = 'CX';
    case Cocos_Keeling_Isla = 'CC';
    case Colombia = 'CO';
    case Comoros = 'KM';
    case Congo = 'CG';
    case Congo_The_Democrati = 'CD';
    case Cook_Islands = 'CK';
    case Costa_Rica = 'CR';
    case Cote_dIvoire = 'CI';
    case Croatia = 'HR';
    case Cuba = 'CU';
    case Cyprus = 'CY';
    case Czech_Republic = 'CZ';
    case Denmark = 'DK';
    case Djibouti = 'DJ';
    case Dominica = 'DM';
    case Dominican_Republic = 'DO';
    case Ecuador = 'EC';
    case Egypt = 'EG';
    case El_Salvador = 'SV';
    case Equatorial_Guinea = 'GQ';
    case Estonia = 'EE';
    case Ethiopia = 'ET';
    case Falkland_Islands = 'FK';
    case Faroe_Islands = 'FO';
    case Fiji = 'FJ';
    case Finland = 'FI';
    case France = 'FR';
    case French_Guiana = 'GF';
    case French_Polynesia = 'PF';
    case Gabon = 'GA';
    case Georgia = 'GE';
    case Germany = 'DE';
    case Ghana = 'GH';
    case Gibraltar = 'GI';
    case Greece = 'GR';
    case Greenland = 'GL';
    case Grenada = 'GD';
    case Guadeloupe = 'GP';
    case Guam = 'GU';
    case Guatemala = 'GT';
    case Guernsey = 'GG';
    case Guinea = 'GN';
    case Guinea_Bissau = 'GW';
    case Guyana = 'GY';
    case Haiti = 'HT';
    case Holy_See = 'VA';
    case Honduras = 'HN';
    case Hong_Kong = 'HK';
    case Hungary = 'HU';
    case Iceland = 'IS';
    case India = 'IN';
    case Indonesia = 'ID';
    case Iran = 'IR';
    case Iraq = 'IQ';
    case Ireland = 'IE';
    case Isle_of_Man = 'IM';
    case Israel = 'IL';
    case Italy = 'IT';
    case Jamaica = 'JM';
    case Japan = 'JP';
    case Jersey = 'JE';
    case Jordan = 'JO';
    case Kazakhstan = 'KZ';
    case Kenya = 'KE';
    case Kiribati = 'KI';
    case Korea_Democratic_Pe = 'KP';
    case Korea_Republic_of_S = 'KR';
    case Kuwait = 'KW';
    case Kyrgyzstan = 'KG';
    case Laos = 'LA';
    case Latvia = 'LV';
    case Lebanon = 'LB';
    case Lesotho = 'LS';
    case Liberia = 'LR';
    case Libyan_Arab_Jamahiri = 'LY';
    case Liechtenstein = 'LI';
    case Lithuania = 'LT';
    case Luxembourg = 'LU';
    case Macao = 'MO';
    case Macedonia = 'MK';
    case Madagascar = 'MG';
    case Malawi = 'MW';
    case Malaysia = 'MY';
    case Maldives = 'MV';
    case Mali = 'ML';
    case Malta = 'MT';
    case Marshall_Islands = 'MH';
    case Martinique = 'MQ';
    case Mauritania = 'MR';
    case Mauritius = 'MU';
    case Mayotte = 'YT';
    case Mexico = 'MX';
    case Micronesia_Federate = 'FM';
    case Moldova = 'MD';
    case Monaco = 'MC';
    case Mongolia = 'MN';
    case Montenegro = 'ME';
    case Montserrat = 'MS';
    case Morocco = 'MA';
    case Mozambique = 'MZ';
    case Myanmar = 'MM';
    case Namibia = 'NA';
    case Nauru = 'NR';
    case Nepal = 'NP';
    case Netherlands = 'NL';
    case Netherlands_Antilles = 'AN';
    case New_Caledonia = 'NC';
    case New_Zealand = 'NZ';
    case Nicaragua = 'NI';
    case Niger = 'NE';
    case Nigeria = 'NG';
    case Niue = 'NU';
    case Norfolk_Island = 'NF';
    case Northern_Mariana_Isl = 'MP';
    case Norway = 'NO';
    case Oman = 'OM';
    case Pakistan = 'PK';
    case Palau = 'PW';
    case Palestinian_Territor = 'PS';
    case Panama = 'PA';
    case Papua_New_Guinea = 'PG';
    case Paraguay = 'PY';
    case Peru = 'PE';
    case Philippines = 'PH';
    case Pitcairn = 'PN';
    case Poland = 'PL';
    case Portugal = 'PT';
    case Puerto_Rico = 'PR';
    case Qatar = 'QA';
    case Romania = 'RO';
    case Russia = 'RU';
    case Rwanda = 'RW';
    case Reunion = 'RE';
    case Saint_Barthelemy = 'BL';
    case Saint_Helena_Ascens = 'SH';
    case Saint_Kitts_and_Nevi = 'KN';
    case Saint_Lucia = 'LC';
    case Saint_Martin = 'MF';
    case Saint_Pierre_and_Miq = 'PM';
    case Saint_Vincent_and_th = 'VC';
    case Samoa = 'WS';
    case San_Marino = 'SM';
    case Sao_Tome_and_Princip = 'ST';
    case Saudi_Arabia = 'SA';
    case Senegal = 'SN';
    case Serbia = 'RS';
    case Seychelles = 'SC';
    case Sierra_Leone = 'SL';
    case Singapore = 'SG';
    case Slovakia = 'SK';
    case Slovenia = 'SI';
    case Solomon_Islands = 'SB';
    case Somalia = 'SO';
    case South_Africa = 'ZA';
    case South_Georgia_and_th = 'GS';
    case Spain = 'ES';
    case Sri_Lanka = 'LK';
    case Sudan = 'SD';
    case Suriname = 'SR';
    case Svalbard_and_Jan_May = 'SJ';
    case Swaziland = 'SZ';
    case Sweden = 'SE';
    case Switzerland = 'CH';
    case Syrian_Arab_Republic = 'SY';
    case Taiwan = 'TW';
    case Tajikistan = 'TJ';
    case Tanzania_United_Rep = 'TZ';
    case Thailand = 'TH';
    case Timor_Leste = 'TL';
    case Togo = 'TG';
    case Tokelau = 'TK';
    case Tonga = 'TO';
    case Trinidad_and_Tobago = 'TT';
    case Turkey = 'TR';
    case Turkmenistan = 'TM';
    case Turks_and_Caicos_Isl = 'TC';
    case Tuvalu = 'TV';
    case Uganda = 'UG';
    case Ukraine = 'UA';
    case United_Arab_Emirates = 'AE';
    case Uruguay = 'UY';
    case Uzbekistan = 'UZ';
    case Vanuatu = 'VU';
    case Venezuela_Bolivaria = 'VE';
    case Vietnam = 'VN';
    case Virgin_Islands_Brit = 'VG';
    case Virgin_Islands_US = 'VI';
    case Wallis_and_Futuna = 'WF';
    case Yemen = 'YE';
    case Zambia = 'ZM';
    case Zimbabwe = 'ZW';

    public function label(): string
    {
        return (string) str($this->name)->replace('_', ' ');
    }
}
