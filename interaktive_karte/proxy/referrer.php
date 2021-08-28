<?php

//Schutz vor Aufruf durch Dritte:
//Um den Schutz zu aktivieren
// a) $schutz_aktiv = true setzen
// b) in $valids die gültigen Domänen reinschreiben (etwas dirty, bei Bedarf gerne schöner machen)
function valid_Referrer() {
    $schutz_aktiv = false;
    if (!$schutz_aktiv) {
        return true;
    } else {
        $referrer = @$_SERVER["HTTP_REFERER"];
        $valids = ["://dr-dsgvo.de/", "://www.dr-dsgvo.de"];
        foreach ($valids as $valid) {
            if (strpos($referrer, $valid) >= 1) {
                return true;
            }
        }
        return false;
    }
}
