<?php get_header(); ?>
<div class="container">
<h1><?php the_title();?></h1>
<?php get_template_part('/includes/section', 'content');?>
<?php get_template_part('/includes/section', 'form');?>
</div>
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
          email: $("#email").val(),
          telephone: $('#telephone').val(),
          address: $('#address').val(),
          post_code: $('#postal_code').val(),
          dob: $('#dob').val(),
          lead_source: $('#lead_source').val(),
          city: $('#city').val(),
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
                    $('#form').addClass('hidden');
                    $('#success').removeClass('hidden');
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
<?php get_footer();?>


