
<?php
function handle_lead_form() {
    $api_url = 'https://regression.pabau.me/OAuth2/leads/lead-curl.php';

    $form_data = $_POST['data'];

    $response = wp_remote_post($api_url, [
        'method'    => 'POST',
        'body'      => $form_data,
    ]);

    if (is_wp_error($response)) {
        wp_send_json_error($response->get_error_message());
    } else {
        wp_send_json_success(wp_remote_retrieve_body($response));
    }
}

add_action('wp_ajax_nopriv_handle_lead_form', 'handle_lead_form');
add_action('wp_ajax_handle_lead_form', 'handle_lead_form');

add_theme_support('align-wide');