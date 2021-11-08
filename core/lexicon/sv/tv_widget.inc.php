<?php
/**
 * TV Widget English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['attributes'] = 'Attribut';
$_lang['attr_attr_desc'] = 'Ett eller flera attribut separerade med mellanslag att lägga till i detta elements tagg (till exempel <span class="example-input">rel="externt" type="application/pdf"</span>).';
$_lang['attr_class_desc'] = 'Ett eller flera CSS-klassnamn separerade med mellanslag.';
$_lang['attr_style_desc'] = 'CSS-definitioner (till exempel <span class="example-input">color:#f36f99; text-decoration:none;</span>).';
$_lang['attr_target_blank'] = 'Blank';
$_lang['attr_target_parent'] = 'Parent';
$_lang['attr_target_self'] = 'Self';
$_lang['attr_target_top'] = 'Top';
$_lang['attr_target_desc'] = 'Anger i vilket fönster, flik eller ram den länkade webbadressen ska öppnas. Om du vill peka ut en specifik ram så anger du dess namn i stället för ett av de angivna alternativen.';
$_lang['capitalize'] = 'Kapitalisera';
$_lang['checkbox'] = 'Kryssruta';
$_lang['checkbox_columns'] = 'Kolumner';
$_lang['checkbox_columns_desc'] = 'Antalet kolumner som kryssrutor ska visas i.';
$_lang['class'] = 'Klass';
$_lang['classes'] = 'Klass(er)';
$_lang['combo_allowaddnewdata'] = 'Tillåt nya poster';
$_lang['combo_allowaddnewdata_desc'] = 'Om denna sätts till "Ja" kan nya poster, som inte redan finns i listan, läggas till. Standard är "Nej".';
$_lang['combo_forceselection'] = 'Kräv matchning';
$_lang['combo_forceselection_desc'] = 'Spara endast det skrivna alternativet när det matchar ett som redan är definierat i listan.';
$_lang['combo_forceselection_multi_desc'] = 'Om denna är satt till "Ja", är endast objekt som redan finns i listan tillåtna. Om den sätts till "Nej" kan nya värden också anges.';
$_lang['combo_listempty_text'] = 'Meddelande när alternativ inte kan hittas';
$_lang['combo_listempty_text_desc'] = 'Meddelande som ska visas när den skrivna texten inte matchar de befintliga alternativen.';
$_lang['combo_listheight'] = 'Listhöjd';
$_lang['combo_listheight_desc'] = 'Höjden (i % eller px) på själva rullgardinsmenyn. Standard är höjden på comboboxen.';
$_lang['combo_listwidth'] = 'Listbredd';
$_lang['combo_listwidth_desc'] = 'Bredden (i % eller px) på själva rullgardinsmenyn. Standard är bredden på comboboxen.';
$_lang['combo_maxheight'] = 'Maximal höjd';
$_lang['combo_maxheight_desc'] = 'Den maximala höjden (i pixlar) på rullgardinsmenyn innan rullningslister visas. Standard är 300.';
$_lang['combo_stackitems'] = 'Stapla markerade poster';
$_lang['combo_stackitems_desc'] = 'Om denna sätts till "Ja" kommer posterna att staplas en per rad. Standard är "Nej", vilket betyder att de visas på samma rad.';
$_lang['combo_title'] = 'Listrubrik';
$_lang['combo_title_desc'] = 'Om en rubrik anges här kommer ett rubrikelement med denna rubrik att skapas och läggas till i toppen på rullgardinsmenyn.';
$_lang['combo_typeahead'] = 'Aktivera ifyllning';
$_lang['combo_typeahead_desc'] = 'Populera och välj automatiskt alternativ efter en konfigurerbar fördröjning som matchar när du skriver. (Standard: Nej)';
$_lang['combo_typeahead_delay'] = 'Fördröjning';
$_lang['combo_typeahead_delay_desc'] = 'Millisekunder innan ett matchat alternativ visas. (Standard: 250)';
$_lang['date'] = 'Datum';
$_lang['date_format'] = 'Datumformat';
$_lang['date_format_desc'] = 'Ange ett format med <a href="https://www.php.net/strftime" target="_blank">php:s syntax för strftime</a>.
    <div class="example-list">Några vanliga exempel:
        <ul>
            <li><span class="example-input">[[+example_1a]]</span> ([[+example_1b]]) (standardformat)</li>
            <li><span class="example-input">[[+example_2a]]</span> ([[+example_2b]])</li>
            <li><span class="example-input">[[+example_3a]]</span> ([[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> ([[+example_4b]])</li>
            <li><span class="example-input">[[+example_5a]]</span> ([[+example_5b]])</li>
            <li><span class="example-input">[[+example_6a]]</span> ([[+example_6b]])</li>
            <li><span class="example-input">[[+example_7a]]</span> ([[+example_7b]])</li>
        </ul>
    </div>
';
$_lang['date_use_current'] = 'Använd aktuellt datum som fallback';
$_lang['date_use_current_desc'] = 'När ett värde för den här mallvariabeln inte krävs (Tillåt tomt = "Ja") och ett standarddatum inte anges, så visa aktuellt datum om detta alternativ är satt till “Ja”.';
$_lang['default'] = 'Standard';
$_lang['default_date_now'] = 'Idag med nuvarande tid';
$_lang['default_date_today'] = 'Idag (midnatt)';
$_lang['default_date_yesterday'] = 'Igår (midnatt)';
$_lang['default_date_tomorrow'] = 'Imorgon (midnatt)';
$_lang['default_date_custom'] = 'Anpassad (se beskrivning nedan)';
$_lang['delim'] = 'Avgränsare';
$_lang['delimiter'] = 'Avgränsare';
$_lang['delimiter_desc'] = 'Ett eller flera tecken som används för att separera värden (gäller för mallvariabler som stöder flera valbara alternativ).';
$_lang['disabled_dates'] = 'Inaktiverade datum';
$_lang['disabled_dates_desc'] = 'A comma-separated, javascript <abbr title="regular expression">regex</abbr>-compatible list (minus delimiters) of dates in the manager’s date format (currently “[[+format_current]]”).
    <p>Examples using the default format (“[[+format_default]]”) include:</p>
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (selects individual dates)</li>
            <li><span class="example-input">[[+example_2a]]</span> (selects [[+example_2b]] and [[+example_2c]] of every year)</li>
            <li><span class="example-input">[[+example_3a]]</span> (“^” to match beginning of string; this selects all of [[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> (selects every day in [[+example_4b]])</li>
            <li><span class="example-input">[[+example_5]]</span> (“$” to match end of string; this selects every day in March of every year)</li>
        </ul>
        Note: If your date format uses dot separators they will need to be escaped (e.g., “[[+example_6a]]” should be entered above as “[[+example_6b]]”).
    </div>
';
$_lang['disabled_days'] = 'Inaktiverade dagar';
$_lang['disabled_days_desc'] = '';
$_lang['dropdown'] = 'Rullgardinsmeny';
$_lang['earliest_date'] = 'Tidigaste datum';
$_lang['earliest_date_desc'] = 'Det tidigaste datumet som kan väljas.';
$_lang['earliest_time'] = 'Tidigaste klockslag';
$_lang['earliest_time_desc'] = 'Det tidigaste klockslag som kan väljas.';
$_lang['email'] = 'E-post';
$_lang['file'] = 'Fil';
$_lang['height'] = 'Höjd';
$_lang['hidden'] = 'Dold';
$_lang['hide_time'] = 'Dölj tidsalternativ';
$_lang['hide_time_desc'] = 'Tar bort möjligheten att välja en tid från den här mallvariabelns datumväljare.';
$_lang['htmlarea'] = 'HTML-area';
$_lang['htmltag'] = 'HTML-tagg';
$_lang['image'] = 'Bild';
$_lang['image_alt'] = 'Alternativtext';
$_lang['latest_date'] = 'Senaste datum';
$_lang['latest_date_desc'] = 'Det senaste datum som kan väljas.';
$_lang['latest_time'] = 'Senaste klockslag';
$_lang['latest_time_desc'] = 'Det senaste klockslag som kan väljas.';
$_lang['listbox'] = 'Listbox (enkelval)';
$_lang['listbox-multiple'] = 'Listbox (flerval)';
$_lang['lower_case'] = 'Gemener';
$_lang['max_length'] = 'Maximal längd';
$_lang['min_length'] = 'Minimal längd';
$_lang['regex_text'] = 'Fel i reguljärt uttryck';
$_lang['regex_text_desc'] = 'Meddelandet som ska visas om användaren skriver in text som är ogiltig enligt <abbr title="regular expression">regex</abbr>-validatorn.';
$_lang['regex'] = 'Validator för reguljära uttryck';
$_lang['regex_desc'] = 'A javascript <abbr title="regular expression">regex</abbr>-compatible string (minus delimiters) to restrict the content of this TV. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (pattern for U.S. zip codes)</li>
            <li><span class="example-input">[[+example_2]]</span> (allow only letters)</li>
            <li><span class="example-input">[[+example_3]]</span> (allow all characters except numbers)</li>
            <li><span class="example-input">[[+example_4]]</span> (must end with the string “-XP”)</li>
        </ul>
    </div>
';
$_lang['name'] = 'Namn';
$_lang['number'] = 'Nummer';
$_lang['number_allowdecimals'] = 'Tillåt decimaler';
$_lang['number_allownegative'] = 'Tillåt negativa';
$_lang['number_decimalprecision'] = 'Precision';
$_lang['number_decimalprecision_desc'] = 'Det maximala antalet siffror som tillåts efter decimalavgränsaren. (Standard: 2)';
$_lang['number_decimalprecision_strict'] = 'Strict Decimal Precision';
$_lang['number_decimalprecision_strict_desc'] = 'When set to “Yes,” preserves trailing zeros in decimal numbers (defaults to “No”).';
/* See note in number inputproperties config re separators */
$_lang['number_decimalseparator'] = 'Avgränsare';
$_lang['number_decimalseparator_desc'] = 'Tecknet som används som decimalavgränsare. (Standard: ”.”)';
$_lang['number_maxvalue'] = 'Maximalt värde';
$_lang['number_minvalue'] = 'Minimalt värde';
$_lang['option'] = 'Radioval';
$_lang['parent_resources'] = 'Föräldraresurser';
$_lang['radio_columns'] = 'Kolumner';
$_lang['radio_columns_desc'] = 'Antalet kolumner som radioknapparna visas i.';
$_lang['rawtext'] = 'Rå text (föråldrad)';
$_lang['rawtextarea'] = 'Rå textarea (föråldrad)';
$_lang['required'] = 'Tillåt tom';
$_lang['required_desc'] = 'Välj ”Nej” för att göra den här mallvariabeln till ett obligatoriskt fält i de resurser den tilldelats till. (Standard: ”Ja”)';
$_lang['resourcelist'] = 'Resurslista';
$_lang['resourcelist_depth'] = 'Djup';
$_lang['resourcelist_depth_desc'] = 'Antalet undermappsnivåer som denna listas sökfråga letar sig ner i. (Standard: 10)';
$_lang['resourcelist_forceselection_desc'] = 'Inaktiverad; endast listmatchningar är giltiga.';
$_lang['resourcelist_includeparent'] = 'Inkludera föräldrar';
$_lang['resourcelist_includeparent_desc'] = 'Välj ”Ja” för att inkludera de resurser som anges i listans föräldrafält.';
$_lang['resourcelist_limitrelatedcontext'] = 'Begränsa till relaterad kontext';
$_lang['resourcelist_limitrelatedcontext_desc'] = 'Välj ”Ja” för att endast inkludera resurser relaterade till den aktuella resursens kontext.';
$_lang['resourcelist_limit'] = 'Begränsning';
$_lang['resourcelist_limit_desc'] = 'Det maximala antalet resurser som visas i denna mallvariabellista. (Standard: 0, det vill säga obegränsat)';
$_lang['resourcelist_listempty_text_desc'] = 'Inaktiverat; val kommer alltid att matcha listan.';
$_lang['resourcelist_parents'] = 'Föräldrar';
$_lang['resourcelist_parents_desc'] = 'Om värde anges här kommer denna mallvariabels lista endast att innehålla underordnade resurser från denna kommaseparerade lista med resurs-ID:n (behållare).';
$_lang['resourcelist_where'] = 'Where-uttryck';
$_lang['resourcelist_where_desc'] = '
    <p>A JSON object of one or more Resource fields to filter this TV’s listing of Resources.</p>
    <div class="example-list">Some examples:
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (only include Resources with template 4 applied)</li>
            <li><span class="example-input">[[+example_2]]</span> (include all Resources, except for those named “Home”)</li>
            <li><span class="example-input">[[+example_3]]</span> (include only Resources whose Resource Type is Weblink or Symlink)</li>
            <li><span class="example-input">[[+example_4]]</span> (include only Resources that are published and are not containers)</li>
        </ul>
    </div>
    <p>Note: Filtering by TV values is not supported.</p>
';
$_lang['richtext'] = 'Richtext';
$_lang['sentence_case'] = 'Inledande versal';
$_lang['start_day'] = 'Startdag';
$_lang['start_day_desc'] = 'Dag som visas som början av veckan i denna mallvariabels datumväljare. (Standard: “Söndag”)';
$_lang['string'] = 'Sträng';
$_lang['string_format'] = 'Strängformat';
$_lang['style'] = 'Stil';
$_lang['tag_name'] = 'Tagg-namn';
$_lang['target'] = 'Mål';
$_lang['text'] = 'Text';
$_lang['textarea'] = 'Textruta';
$_lang['textareamini'] = 'Textruta (liten)';
$_lang['textbox'] = 'Textbox';
$_lang['time_increment'] = 'Tidsintervall';
$_lang['time_increment_desc'] = 'Antalet minuter mellan varje tidsvärde i listan. (Standard: 15)';
$_lang['title'] = 'Titel';
$_lang['tv_default'] = 'Standardvärde';
$_lang['tv_default_desc'] = 'Innehållet som den här mallvariabeln visar om användaren inte anger något annat innehåll.';
$_lang['tv_default_checkbox_desc'] = 'A double-pipe-separated set of option(s) selected for this TV if the user does not check one or more. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One, or “1||3” for Option One and Option Three)';
$_lang['tv_default_date'] = 'Förvalt datum och tid';
$_lang['tv_default_date_desc'] = 'Det datum som visas om användaren inte anger ett. Välj ett relativt datum från listan ovan eller ange ett annat datum med hjälp av något av följande mönster:
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (antal timmar sedan)</li>
            <li><span class="example-input">[[+example_2]]</span> (antal timmar i framtiden)</li>
            <li><span class="example-input">[[+example_3]]</span> (ett specifikt datum [och tid om så önskas] med det visade formatet)</li>
        </ul>
        Obs: Användningen av “+” och “-” ovan är kontraintuitiv, men korrekt ("+" representerar bakåt i tiden).
    </div>';
$_lang['tv_default_email'] = 'Förvald e-postadress';
$_lang['tv_default_email_desc'] = 'Den e-postadress som mallvariabeln visar om användaren inte anger en.';
$_lang['tv_default_file'] = 'Förvald fil';
$_lang['tv_default_file_desc'] = 'Filsökvägen som den här mallvariabeln visar om användaren inte anger en.';
$_lang['tv_default_image'] = 'Standardbild';
$_lang['tv_default_image_desc'] = 'Den bildsökväg som mallvariabeln kommer att visa om användaren inte anger en.';
$_lang['tv_default_option'] = 'Standardalternativ';
$_lang['tv_default_option_desc'] = 'Det alternativ som väljs för den här mallvariabeln om användaren inte väljer ett. Om dina alternativ innehåller etiketter (till exempel "Alternativ ett==1||Alternativ två==2||Alternativ tre==3"), så behöver du ange värdet (dvs. "1" för "Alternativ ett")';
$_lang['tv_default_options'] = 'Standardalternativ';
$_lang['tv_default_options_desc'] = 'A double-pipe-separated set of option(s) selected for this TV if the user does not choose one or more. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One, or “1||3” for Option One and Option Three)';
$_lang['tv_default_radio_desc'] = $_lang['tv_default_option_desc'];
$_lang['tv_default_listbox_desc'] = $_lang['tv_default_option_desc'];
$_lang['tv_default_listbox-multiple_desc'] = $_lang['tv_default_options_desc'];
$_lang['tv_default_number'] = 'Förvalt nummer';
$_lang['tv_default_number_desc'] = 'Numret som denna mallvariabel kommer att visa om användaren inte anger ett.';
$_lang['tv_default_resource'] = 'Standardresurs (ID)';
$_lang['tv_default_resourcelist_desc'] = 'Den resurs som mallvariabeln visar om användaren inte väljer en.';
$_lang['tv_default_tag'] = 'Standardtagg(ar)';
$_lang['tv_default_tag_desc'] = 'A comma-separated set of option(s) selected for this TV if the user does not choose one or more. If your options include labels (e.g., Tag One==1||Tag Two==2||Tag Three==3), be sure to enter the value (i.e., “1” for Tag One, or “1,3” for Tag One and Tag Three)';
$_lang['tv_default_text'] = 'Standardtext';
$_lang['tv_default_text_desc'] = 'Det textinnehåll som denna mallvariabel kommer att visa om användaren inte anger något.';
$_lang['tv_default_url'] = 'Standard-URL';
$_lang['tv_default_url_desc'] = 'Den URL som mallvariabeln visar om användaren inte anger en.';
$_lang['tv_elements'] = 'Inmatningsvärden';
$_lang['tv_elements_checkbox'] = 'Kryssrutealternativ';
$_lang['tv_elements_listbox'] = 'Dropdown List Options';
$_lang['tv_elements_radio'] = 'Radio Button Options';
$_lang['tv_elements_tag'] = 'Tag Options';
$_lang['tv_elements_desc'] = 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ';
$_lang['tv_elements_checkbox_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_elements_listbox_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_elements_listbox-multiple_desc'] = $_lang['tv_elements_listbox_desc'];
$_lang['tv_elements_radio_desc'] = $_lang['tv_elements_option_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_elements_tag_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_daterange_elements_desc'] = 'Test options desc for daterange with example ph: [[+ex1]]';
$_lang['tv_daterange_default_text_desc'] = 'Test default text desc for daterange with example ph: [[+ex1]]';
$_lang['tv_type'] = 'Input Type';
$_lang['upper_case'] = 'Versaler';
$_lang['url'] = 'URL';
$_lang['url_display_text'] = 'Visningstext';
$_lang['width'] = 'Bredd';

// Temporarily match old keys to new ones to ensure compatibility
$_lang['tv_default_datetime'] = $_lang['tv_default_date'];
