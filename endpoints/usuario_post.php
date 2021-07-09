<?php

function api_ticket_post($request) {

  $response = array(
    'nome' => 'Andre',
    'email' => 'andre@origamid.com'
  );
  return rest_ensure_response($response);
}

function registrar_api_ticket_post() {
  register_rest_route('v1/api', '/ticket', array(
    array(
      'methods' => WP_REST_Server::READABLE,
      'callback' => 'api_ticket_post',
    ),
  ));
}

add_action('rest_api_init', 'registrar_api_ticket_post');


?>
