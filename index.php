<?php

require_once('./vendor/autoload.php');
$form_id = '53067707061958';
$api_key = '36b43b3f7cbe83ccbd440ca7305350fb';
$jotform = new JotForm($api_key,'json',true);
$submissions = $jotform->getFormSubmissions($form_id, 0, 10, 'created_at');

var_dump($submissions);