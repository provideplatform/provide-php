<?php

require 'api_client.php';

class Goldmine {
    
    function __construct($scheme, $host, $token) {
        $this->api_client = new APIClient($scheme, $host, $token);
    }

    function fetch_contracts($params = null) {
        return $this->api_client->get('contracts');
    }

}