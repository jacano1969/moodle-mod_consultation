<?php

// This file is part of Consultation module for Moodle.
//
// Consultation is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Consultation is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Consultation.  If not, see <http://www.gnu.org/licenses/>.

/**
 * mod_consultation lang pack file.
 *
 * @package    mod
 * @subpackage consultation
 * @copyright  2009 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addmynewpost'] = 'Odeslat';
$string['attachment'] = 'Příloha';
$string['bynameondate'] = 'od {$a->name} - {$a->date}';
$string['candidatesnotyet'] = 'Žádné dotazy';
$string['candidatesopened'] = 'Již dotazován';
$string['cannotdeleteinquiry'] = 'Dotaz nemůže být odstraněn.';
$string['resolveinquiry'] = 'Označit jako uzavřeno';
$string['resolvedconsultations'] = 'Uzavřené dotazy';
$string['confirmclosure'] = 'Opravdu si přejete označit dotaz <strong>{$a}</strong> jako uzavřený?<br />Dotaz již nebudete moci doplnit.';
$string['confirmdeleteinquiry'] = 'Opravdu si přejete odstranit dotaz <strong>{$a}</strong>?';
$string['confirmdeletepost'] = 'Opravdu si přejete odstranit následující zprávu?<br /><br />{$a}';
$string['confirmreopen'] = 'Opravdu si přejete znovu otevřít následující dotaz?<br /><br />{$a}';
$string['consultation:deleteany'] = 'Smazat jakýkoliv dotaz';
$string['consultation:interrupt'] = 'Vstoupit do konzulace ostatních';
$string['consultation:answer'] = 'Odpovídat na dotaz';
$string['consultation:open'] = 'Dotázat se konzultanta';
$string['consultation:openany'] = 'Dotázat se kohokoliv z kurzu';
$string['consultation:reopen'] = 'Povolit znovuotevření dotazu';
$string['consultation:reopenany'] = 'Povolit znovuotevření libovolného dotazu';
$string['consultation:resolve'] = 'Povolit uzavření dotazu';
$string['consultation:resolveany'] = 'povolit uzavření libovolného dotazu';
$string['consultation:viewany'] = 'Číst obsah všech dotazů';
$string['inquiryalreadyresolved'] = 'Tento dotaz je už uzavřen.';
$string['inquiryfromuser'] = 'Od';
$string['inquirylast'] = 'Poslední aktualizace';
$string['inquiries'] = 'Dotazy';
$string['inquiriestart'] = 'Vytvořeno';
$string['inquiriesunreadcount'] = 'Nepřečtené zprávy';
$string['inquirytouser'] = 'Pro';
$string['inquirywithuser'] = 'Uživatel';
$string['fromme'] = 'já';
$string['fullsubjectothers'] = 'Dotaz od {$a->fromname} pro {$a->toname}: {$a->subject}';
$string['fullsubjectfromme'] = 'Můj dotaz {$a->subject} ({$a->fullname})';
$string['fullsubjecttome'] = 'Odpověď na {$a->subject} ({$a->fullname})';
$string['consultationwith'] = 'Dotázat se';
$string['interrupt'] = 'Vstoupit do rozhovoru';
$string['mailnewmessage'] = 'Automatické oznámení z {$a->site}, modul konzultace {$a->consultation}:
Uživatel {$a->from} vznesl nový dotaz {$a->inquiry} {$a->url}.';
$string['mailnewsubject'] = '{$a->course}: nový dotaz "{$a->inquiry}"';
$string['mailpostmessage'] = 'Automatické oznámení z {$a->site}, modul konzultace {$a->consultation}:
Uživatel {$a->from} odpověděl v {$a->inquiry} {$a->url}.';
$string['mailpostsubject'] = '{$a->course}: konzultace "{$a->inquiry}"';
$string['message'] = 'Text';
$string['moddeleteafter'] = 'Odstranit uzavřené konzultace po';
$string['moddeleteafterexplain'] = 'Odstranit uzavřené konzultace po ovedené době.';
$string['modeditdefaults'] = 'Výchozí hodnoty pro nové konzultace';
$string['modeditdefaultsexplain'] = 'Zde nastavené hodnoty budou přednastaveny při vytváření nových konzultací.';
$string['modedittime'] = 'Povolit dodatečné úpravy (minuty)';
$string['modedittimeexplain'] = 'Zvolte zda a případně jak dlouho mohou uživatelé upravovat zprávy.';
$string['modintro'] = 'Úvod';
$string['modname'] = 'Název';
$string['modnotify'] = 'Upozorňovat uživatele';
$string['modnotifyexplain'] = 'Upozorňovat uživatele po vznesení dotazu nebo přidání odpovědi.';
$string['modopenlimit'] = 'Omezit počet dotazů';
$string['modopenlimitexplain'] = 'Uveďte maximální počet dotazů, kterů mohou účastníci vznést.';
$string['modulename'] = 'Konzultace';
$string['modulenameplural'] = 'Konzultace';
$string['noavailablepeople'] = 'Ůčastníci kurzu nenalezeni';
$string['noguests'] = 'Hosté nemohou pokládat dotazy.';
$string['noinquiries'] = 'Žádné dotazy.';
$string['numstartedinquiries'] = '{$a} dotazy';
$string['openconsultation'] = 'Nový dotaz';
$string['openconsultations'] = 'Otevřené dotazy';
$string['pluginname'] = 'Konzultace';
$string['refresh'] = 'Obnovit';
$string['reopeninquiry'] = 'Znovuotevřít';
$string['resetconsultationsall'] = 'Odstranit všechny dotazy';
$string['subject'] = 'Dotaz';
$string['subtabresolvedmy'] = 'Moje ({$a})';
$string['subtabresolvedothers'] = 'Ostatní ({$a})';
$string['subtabviewmy'] = 'Moje ({$a})';
$string['subtabviewothers'] = 'Ostatní ({$a})';
$string['tabopen'] = 'Nové dotazy';
$string['tabview'] = 'Otevřené ';
$string['tabviewany'] = 'Otevřené ({$a})';
$string['tabresolved'] = 'Uzavřené';
$string['tabresolvedany'] = 'Uzavřené ({$a})';
$string['tabunread'] = 'Nepřečteno ({$a})';
$string['timeeditoever'] = 'Tuto zprávu již nemůžete upravovit.';
$string['toomanyinquiries'] = 'Můžete vznést maximálně {$a} dotazů.';
$string['untilwarning'] = '(Do {$a})';
$string['updatedinquiries'] = 'Počet příspěvků v konzultacích';
