<?php
if (isset($_POST['sorgula'])) {

    if ($_POST['tckn'] == NULL) {

        echo 'TC Kimlik Numarası boş olamaz.';

    } elseif ($_POST['ad'] == NULL) {

        echo 'Ad boş olamaz';

    } elseif ($_POST['soyad'] == NULL) {

        echo 'Soyad boş olamaz';

    } elseif ($_POST['dy'] == NULL) {

        echo 'Doğum Yılı boş olamaz';

    } else {

        $url = 'https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL';
        $client = new SoapClient($url);

        $result = $client->TCKimlikNoDogrula([
            'TCKimlikNo' => $_POST['tckn'],
            'Ad' => mb_strtoupper($_POST['ad'], "UTF-8"),
            'Soyad' => mb_strtoupper($_POST['soyad'], "UTF-8"),
            'DogumYili' => $_POST['dy']
        ]);

        if ($result->TCKimlikNoDogrulaResult) {

            header("Location: http://www.hakanalkilinc.com.tr");
            //echo 'TC Kimlik Numarası doğrulandı.';

        } else {

            echo 'TC Kimlik Numarası doğrulanamadı.';

        }

    }

}
?>

