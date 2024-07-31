<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
jQuery(document).ready(function($) {
    $('#lead-form').on('submit', function(e) {
        e.preventDefault();
        let formData = {
          api_key: $('#api_key').val(),
          redirect_link: $('#redirect_link').val(),
          Fname: $('#first_name').val(),
          Lname: $('#last_name').val(),
        }

        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'handle_lead_form',
                data: formData
            },
            success: function(response) {
                if (response.success) {
                    alert('Lead created successfully!');
                } else {
                    alert('Error creating lead: ' + response.data);
                }
            },
            error: function(xhr, status, error) {
                alert('Error creating lead: ' + xhr.responseText);
            }
        });
    });
});
</script>
</body>
</html>