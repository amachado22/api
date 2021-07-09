<?php 
function api_ingressos_get($request){

    $response = array(
        'nome' => 'Adailton',
        'email' => 'amachado22@live.com'
    );
    return rest_ensure_response($response);
}


function register_api_ingressos_get(){
    register_rest_route('v1/api', '/ingressos',array(
        array(
            'methods' => WP_REST_Server::READABLE,
            'callback' => 'api_ingressos_get',
            
        ),
    ));
}

add_action('rest_api_init', 'register_api_ingressos_get');


?>