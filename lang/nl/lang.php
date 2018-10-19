<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'Redirects',
        'description' => 'Eenvoudig beheren van redirects',
    ],
    'permission' => [
        'access_redirects' => [
            'label' => 'Redirects',
            'tab' => 'Redirects',
        ],
    ],
    'navigation' => [
        'menu_label' => 'Redirects',
        'menu_description' => 'Beheer redirects',
    ],
    'settings' => [
        'menu_label' => 'Redirects',
        'menu_description' => 'Beheer instellingen voor redirects.',
        'logging_enabled_label' => 'Log redirect gebeurtenissen',
        'logging_enabled_comment' => 'Sla redirect gebeurtenissen op in de database.',
        'statistics_enabled_label' => 'Verzamel statistieken',
        'statistics_enabled_comment' => 'Verzamel statistieken redirectsverzoeken om meer inzicht te krijgen.',
        'test_lab_enabled_label' => 'TestLab (beta)',
        'test_lab_enabled_comment' => 'TestLab maakt het mogelijk om op grote schaal redirects te testen.',
        'caching_enabled_label' => 'Caching van redirects (geavanceerd)',
        'caching_enabled_comment' => 'Verbetert het redirect mechanisme als er veel redirects zijn. '
            . 'LET OP: Cache driver `file` en `database` zijn NIET ondersteund. '
            . 'Aanbevolen driver is `memcached` of een vergelijkbare "in-memory" caching driver.',
    ],
    'redirect' => [
        'redirect' => 'Redirect',
        'from_url' => 'Bronpad',
        'from_url_placeholder' => '/bron/pad',
        'from_url_comment' => 'Het bronpad welke overeenkomt.',
        'from_scheme' => 'Bron protocol',
        'from_scheme_comment' => 'Forceer overeenkomst met protocol. Als HTTP geselecteerd is zal <u>http://domeinnaam.com/pad</u> '
            . 'overeenkomen en <u>https://domeinnaam.com/pad</u> zal niet overeenkomen.',
        'to_url' => 'Doelpad of URL',
        'to_url_placeholder' => '/absoluut/pad, relatief/pad of http://doel.url', // changed since 2.0.6
        'to_url_comment' => 'Het doelpad of de URL om naar te verwijzen.',
        'to_url_required_if' => 'Het doelpad of de URL is verplicht',
        'to_scheme' => 'Doel protocol',
        'to_scheme_comment' => 'Doel protocol zal geforceerd worden naar HTTP of HTTPS '
            . 'of kies Automatisch om het standaard protocol van de website te gebruiken.',
        'scheme_auto' => 'Automatisch',
        'cms_page_required_if' => 'Voer een CMS Pagina om naar te verwijzen in',
        'static_page_required_if' => 'Voer een Statische Pagina om naar te verwijzen in',
        'match_type' => 'Type van overeenkomst',
        'exact' => 'Exact',
        'placeholders' => 'Placeholders',
        'target_type' => 'Doel Type',
        'target_type_none' => 'Niet van toepassing',
        'target_type_path_or_url' => 'Pad of URL',
        'target_type_cms_page' => 'CMS Pagina',
        'target_type_static_page' => 'Statische Pagina',
        'status_code' => 'HTTP Status Code',
        'sort_order' => 'Sorteer volgorde',
        'requirements' => 'Vereisten',
        'requirements_comment' => 'Geef de vereisten op voor elke placeholder.',
        'placeholder' => 'Placeholder',
        'placeholder_comment' => 'De naam van de Placeholder (inclusief accolades) ingegeven in het  \'Doelpad\' veld. '
            . 'Bijvoorbeeld {category} of {id}',
        'requirement' => 'Vereiste',
        'requirement_comment' => 'Voer de vereisten \'Regular Expression\' in bijvoorbeeld [0-9]+ of [a-zA-Z]+.',
        'requirements_prompt' => 'Voeg nieuwe vereisten toe',
        'replacement' => 'Vervanging',
        'replacement_comment' => 'Voer een optionele vervangingswaard voor deze Placeholder in. '
            . 'De overeenkomstige placeholder zal vervangen worden met deze waarde in de doel URL.',
        'permanent' => '301 - Permanent (Permanent)',
        'temporary' => '302 - Temporary (Tijdelijk)',
        'see_other' => '303 - See Other (Zie andere)',
        'not_found' => '404 - Not Found (Niet gevonden)',
        'gone' => '410 - Gone (Verwijderd)',
        'enabled' => 'Aangezet',
        'none' => 'geen',
        'enabled_comment' => 'Vink aan om deze redirect aan te zetten.',
        'priority' => 'Prioriteit',
        'hits' => 'Treffers',
        'return_to_redirects' => 'Ga terug naar de redirects lijst.',
        'return_to_categories' => 'Ga terug naar de categorieën lijst',
        'delete_confirm' => 'Weet je het zeker?',
        'created_at' => 'Gemaakt op',
        'modified_at' => 'Bewerkt op',
        'system_tip' => 'Een redirect gegenereerd door het systeem',
        'user_tip' => 'Een door de gebruiker gegenereerde redirect',
        'type' => 'Type',
        'last_used_at' => 'Voor het laatste gebruikt op',
        'and_delete_log_item' => 'En verwijder geseletecteerd log items', // since 2.0.3,
        'category' => 'Categorie',
        'categories' => 'Categorieën',
        'name' => 'Naam',
        'date_time' => 'Datum & Tijd',
        'date' => 'Datum',
        'truncate_confirm' => 'Weet je het zeker dat je ALLE items wilt verwijderen?',
        'truncating' => 'Aan het verwijderen...',
        'warning' => 'Waarschuwing',
        'cache_warning' => 'Je hebt caching ingeschakeld maar de cache driver wordt niet ondersteund. '
            . 'Redirects zullen niet worden gecached.',
        'general_confirm' => 'Weet je het zeker?',
        'sparkline_30d' => 'Treffers (30d)',
        'has_hits' => 'Heeft treffers',
        'minimum_hits' => 'Minimum treffers',
    ],
    'list' => [
        'no_records' => 'Er zijn geen redirects in dit beeld.',
        'switch_is_enabled' => 'Aangezet',
        'switch_system' => 'Systeem redirects',
    ],
    'scheduling' => [
        'from_date' => 'Beschikbaar van',
        'from_date_comment' => 'De datum wanneer deze redirect actief wordt mag weggelaten worden.',
        'to_date' => 'Beschikbaar tot',
        'to_date_comment' => 'De datum tot wanneer deze redirect actief is mag weggelaten worden.',
        'scheduling_comment' => 'Hier kan een periode ingegeven worden wanneer de redirect beschikbaar is. '
            . 'Alle combinatie data zijn mogelijk.',
        'not_active_warning' => 'Redirect is not available anymore, please check \'Scheduling\' tab.',
    ],
    'test' => [
        'test_comment' => 'Test uw redirect voordat u deze opslaat.',
        'input_path' => 'Invoer pad',
        'input_path_comment' => 'Het invoerpad om te testen. Bijvoorbeeld  /oude-blog/category/123',
        'input_path_placeholder' => '/invoer/pad',
        'input_scheme' => 'Invoer schema',
        'test_date' => 'Testdatum',
        'test_date_comment' => 'Wanneer deze redirect ingepland wordt kan deze op een bepaalde datum gestest worden.',
        'testing' => 'Aan het testen...',
        'run_test' => 'Draai test',
        'no_match_label' => 'Sorry, geen overeenkomst!',
        'no_match' => 'Geen overeenkomst gevonden!',
        'match_success_label' => 'We hebben een overeenkomst!',
    ],
    'test_lab' => [
        'section_test_lab_comment' => 'Het TestLab maakt het mogelijk om redirects op grote schaal te testen.',
        'test_lab_label' => 'In het TestLab insluiten',
        'test_lab_enable' => 'Schuif deze schakelaar om deze redirect in het TestLab te testen.',
        'test_lab_path_label' => 'Test pad',
        'test_lab_path_comment' => 'Dit pad zal gebruikt worden wanneer test worden uitgevoerd. '
            . 'Vervang placeholders met echt waardes.',
        'start_tests' => 'Start testen',
        'start_tests_description' => 'Klik de \'Start Testen\' button om te beginnen.',
        'edit' => 'Bewerk',
        'exclude' => 'Sluit uit',
        'exclude_confirm' => 'Weet u zeker dat u deze redirect wilt uitsluiten in het TestLab?',
        'exclude_indicator' => 'Redirect uitsluiten in het TestLab',
        're_run' => 'Opnieuw',
        're_run_indicator' => 'Testen aan het uitvoeren, wacht uw even...',
        'loop' => 'Lus',
        'match' => 'Overeenkomst',
        'response_http_code' => 'Response HTTP code',
        'response_http_code_should_be' => 'Response HTTP code zou een van de volgende moeten zijn:',
        'redirect_count' => 'Redirect aantal',
        'final_destination' => 'Uiteindelijke bestemming',
        'no_redirects' => 'Er zijn geen redirects gemarkeerd met met TestLab aan.'
            . 'Zet de optie \'Voeg aan TestLab toe\' aan wanneer een redirect bewerkt wordt.',
        'test_error' => 'Er ontstond een probleem bij het testen van deze redirect.',
        'flash_test_executed' => 'De test is uitgevoerd.',
        'flash_redirect_excluded' => 'De redirect is van het TestLab uitgesloten en zal niet verschijnen wanneer de volgende test uitgevoerd wordt.',
        'result_request_failed' => 'Kan de aanvraag niet uitvoeren..',
        'redirects_followed' => 'Het aantal gevolgde redirects: :count (gelimiteerd tot :limit)',
        'not_determinate_destination_url' => 'Kan de finale bestemmings URL niet vaststellen..',
        'no_destination_url' => 'Geen bestemmings URL.',
        'final_destination_is' => 'Bestemming is: :destination',
        'possible_loop' => 'Mogelijke redirects lus!',
        'no_loop' => 'Geen redirect lus gedetecteerd.',
        'not_match_redirect' => 'Komt niet overeen met een redirect.',
        'matched' => 'Overeenkomstig',
        'redirect' => 'verwijs',
        'matched_not_http_code' => 'Redirect komt overeen maar de HTTP response code komt niet overeen! '
            . 'Verwachte :expected maar ontving :received.',
        'matched_http_code' => 'Overeenkomstige redirect, response HTTP code :code.',
        'executing_tests' => 'Uitvoeren tests...',
    ],
    'statistics' => [
        'hits_per_day' => 'Redirects treffers per dag',
        'click_on_chart' => 'Klik op de grafiek om inzoomen en slepen aan te zetten.',
        'requests_redirected' => 'Aanvragen doorverwezen',
        'all_time' => 'vanaf het begin',
        'active_redirects' => 'Actieve redirects',
        'redirects_this_month' => 'Redirects deze maand',
        'previous_month' => 'vorige maand',
        'latest_redirected_requests' => 'Laatst doorverwezen aanvraag',
        'redirects_per_month' => 'Redirects per maand',
        'no_data' => 'Geen data',
        'top_crawlers_this_month' => 'Hoogste :top crawlers deze maand',
        'top_redirects_this_month' => 'Hoogste :top redirects deze maand',
    ],
    'title' => [
        'import' => 'Invoer',
        'export' => 'Uitvoer',
        'redirects' => 'Beheer redirects',
        'create_redirect' => 'Maak redirect',
        'edit_redirect' => 'Bewerk redirect',
        'categories' => 'Beheer categorieën',
        'create_category' => 'Maak category',
        'edit_category' => 'Bewerk category',
        'view_redirect_log' => 'Toon redirect log',
        'statistics' => 'Statistieken',
        'test_lab' => 'TestLab (beta)',
    ],
    'buttons' => [
        'add' => 'Toevoegen', // since 2.0.3
        'from_request_log' => 'Van aanvraag log', // since 2.0.3
        'new_redirect' => 'Nieuwe redirect', // changed since 2.0.3
        'create_redirects' => 'Maak redirects', // since 2.0.3
        'create_redirect' => 'Maak redirect',
        'create_and_new' => 'Maken en nieuw',
        'delete' => 'Verwijderen',
        'enable' => 'Inschakelen',
        'disable' => 'Uitschakelen',
        'reorder_redirects' => 'Rangschikken',
        'export' => 'Uitvoer',
        'import' => 'Invoer',
        'settings' => 'Instellingen',
        'categories' => 'Categorieën',
        'new_category' => 'Nieuwe category',
        'reset_statistics' => 'Herstel statistieken',
        'logs' => 'Redirect log',
        'empty_redirect_log' => 'Leeg redirect log',
        'clear_cache' => 'Leeg cache',
        'stop' => 'Stop',
        'reset_all' => 'Alle statistische informatie wissen',
        'all_redirects' => 'van alle redirects',
        'bulk_actions' => 'Bulk acties',
    ],
    'tab' => [
        'tab_general' => 'Algemeen',
        'tab_requirements' => 'Voorwaarden',
        'tab_test' => 'Test',
        'tab_scheduling' => 'Tijdschema',
        'tab_test_lab' => 'TestLab',
        'tab_advanced' => 'Geavanceerd',
    ],
    'flash' => [
        'success_created_redirects' => 'Er zijn :count redirect(s) gecreëerd', // since 2.0.3
        'static_page_redirect_not_supported' => 'Deze redirect kan niet bewerkt worden. RainLab.Pages Plugin is vereist.',
        'truncate_success' => 'Alle items zijn succesvol verwijderd.',
        'delete_selected_success' => 'De geselecteerde items zijn succesvol verwijderd.',
        'cache_cleared_success' => 'Cache met redirects succesvol geleegd.',
        'statistics_reset_success' => 'Alle statistische informatie is gewist',
        'enabled_all_redirects_success' => 'Alle redirects zijn ingeschakeld',
        'disabled_all_redirects_success' => 'Alle redirects zijn uitgeschakeld',
        'deleted_all_redirects_success' => 'Alle redirects zijn verwijderd',
    ],
    'import_export' => [
        'match_type' => 'Match Type [match_type] (Toegestane waarden: exact, placeholders)',
        'category_id' => 'Category [category_id]',
        'target_type' => 'Target Type [target_type] (Toegestane waarden: path_or_url, cms_page, static_page, none)',
        'from_url' => 'Source path [from_url]',
        'from_scheme' => 'Source scheme [from_scheme] (Toegestane waarden: http, https, auto [default])',
        'to_url' => 'Target path [to_url]',
        'to_scheme' => 'Target scheme [to_scheme] (Toegestane waarden: http, https, auto [default])',
        'test_url' => 'Test URL [test_url]',
        'cms_page' => 'CMS Page [cms_page] (Bestandsnaam zonder .htm extensie)',
        'static_page' => 'Static Page [static_page] (Bestandsnaam zonder .htm extensie)',
        'requirements' => 'Placeholder requirements [requirements]',
        'status_code' => 'HTTP status code [status_code] (Toegestane waarden: 301, 302, 303, 404, 410)',
        'hits' => 'Redirect Hits [hits]',
        'from_date' => 'Scheduled date from [from_date] (YYYY-MM-DD of leeg)',
        'to_date' => 'Scheduled date to [to_date] (YYYY-MM-DD of leeg)',
        'sort_order' => 'Priority [sort_order]',
        'is_enabled' => 'Enabled [is_enabled] (1 = enable redirect, 0 = disable redirect [standaard])',
        'test_lab' => 'Test Lab [test_lab] (1 = enable Test Lab, 0 = disable TestLab [standaard])',
        'test_lab_path' => 'Test Lab path [test_lab_path] (verplicht als match_type = placeholders)',
        'system' => 'System [system] (1 = system generated redirect, 0 = user generated redirect [standaard])',
        'last_used_at' => 'Last Used At [last_used_at] (YYYY-MM-DD HH:MM:SS of leeg)',
        'created_at' => 'Created At [created_at] (YYYY-MM-DD HH:MM:SS of leeg)',
        'updated_at' => 'Updated At [updated_at] (YYYY-MM-DD HH:MM:SS of leeg)',
    ],
];
