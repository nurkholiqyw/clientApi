<?php
    function http_request_get($url) {
        // persiapkan curl
        $ch = curl_init(); 
 
        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);
 
        // konversi hasil ke string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 
        // eksekusi
        $output = curl_exec($ch); 
 
        // tutup curl 
        curl_close($ch);      
 
        // mengembalikan hasil curl
        return $output;
    }
 
    function http_request_post($url,$data) {
        // persiapkan curl
        $ch = curl_init(); 
 
        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);
 
        // konversi hasil ke string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 
        //untuk metode POST
        curl_setopt($ch, CURLOPT_POST, true);
 
        //untuk data yang dikirim
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 
        // eksekusi
        $output = curl_exec($ch); 
 
        // tutup curl 
        curl_close($ch);      
 
        // mengembalikan hasil curl
        return $output;
    }
?>