<?php
/*
 * Copyright 2017-2022 Provide Technologies Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class APIClient {

    const DEFAULT_SCHEME = 'https';
    const DEFAULT_VERSION = 'v1';

    function __construct($scheme, $host, $token) {
        $this->base_url = $scheme."://".$host."/api/v1/";
        $this->token = $token;

        $headers = [
            'authorization' => 'bearer '.$this->token,
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];

        $this->client = new GuzzleHttp\Client(['headers'=>$headers]);
    }

    function get($uri, $params=null) {
        $res = $this->client->request('GET', $this->base_url.$uri);
        $response = json_decode($res->getBody());
        
        return $response;
    }

    function post($uri, $params) {
	    $res = $this->client->post($this->base_url.$uri, [
			GuzzleHttp\RequestOptions::JSON => $params
		]);
        $response = json_decode($res->getBody());
        
        return $response;
    }

    function put($uri, $params) {
        
    }

    function delete($uri) {

    }

}