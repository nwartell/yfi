<?php

namespace Nwartell\YFi;

class YFi {

    public static function quote($symbol, $interval, $range) {
        $json = file_get_contents("https://query1.finance.yahoo.com/v8/finance/chart/$symbol?region=US&lang=en-US&includePrePost=false&interval=$interval&useYfid=true&range=$range");
        
        if ($json === true) {
            return json_encode(array('message'=>'Endpoint error'));
        }
        
        $array = json_decode($json, true);

        if ($array === null) {
            return json_encode(array('message'=>'JSON decode error'));
        }

        if (!isset($array['chart']['result'][0])) {
            return json_encode(array('message'=>'Unknown JSON structure. Has the endpoint output changed?'));
        }

        return json_encode($array['chart']['result'][0]);
    }

}

?>