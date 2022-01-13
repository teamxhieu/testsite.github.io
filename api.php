<?php
function test(){
    $dataPost = array(
        'app_id' => 100067,
        'login_id' => '2341241241414',
    );
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://napthe.vn/api/auth/player_id_login',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($dataPost),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36',
        'X-Requested-With: XMLHttpRequest',
        'X-DataDome: protected',
        'x-datadome-clientid: PT.f.i1FUn1deDztIsOcuqUoHHI.8u8X40Q8Dongudv5qGppxj8Ep0ISRiNNFVtLGAyKwYaeL~Tu_z4zQyCzpllrbil8NXzM2lRNKnpQM~3GaHDihQD-~HadIMTljKy'
    ),
    //CURLOPT_PROXY => '14.160.23.139:4145',
    ));
    if (curl_errno($curl)) {
        echo 'Error:' . curl_error($curl);
    }
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}
print(test());
?>
