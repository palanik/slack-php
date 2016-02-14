<?php

namespace wrapi\slack;

class slack extends \wrapi\wrapi {
    public function __construct($token) {

        $opts = array(
            "headers" => array(
                "User-Agent" => "slack-wrapi"
            ),
            "query" => array(
                "token" => $token
            )
        );

        $json = file_get_contents(__DIR__. '/api/slack.json');
        $endpoints = json_decode($json, true);
        parent::__construct('https://slack.com/api/',
            $endpoints,
            $opts);
    }

}

?>
