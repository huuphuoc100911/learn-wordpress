<?php

if (!function_exists('dd')) {
    function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}

if (!function_exists('wopdpress_redirect')) {
    function wopdpress_redirect($url)
    {
        echo "<script>location.href = '" . $url . "'</script>";
    }
}
