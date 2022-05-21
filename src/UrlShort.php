<?php

namespace Kozhinhikkodan\UrlShort;

class UrlShort
{
    public function short_url(String $url)
    {
        $url = urlencode($url);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://cleanuri.com/api/v1/shorten");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "url=".$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = json_decode(curl_exec($ch));
        curl_close ($ch);
        if(isset($server_output->result_url)){
            return $server_output->result_url;
        }else{
            return 'INVALID URL';
        }
    }
}