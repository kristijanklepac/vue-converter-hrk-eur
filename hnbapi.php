<?php header('Content-type:application/json;charset=utf-8');

function hnbapi() {



            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.hnb.hr/tecajn?valuta=EUR",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              return $err;
            } else {
              return json_encode(['hnb' => $response]);
            }

    }

    echo hnbapi();

?>