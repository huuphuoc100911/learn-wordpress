<?php
$image = get_term_meta($term->term_id, 'image', true);
?>

<tr class="form-field term-slug-wrap">
    <th scope="row"><label for="slug">Image</label></th>
    <td>
        <input name="image" id="image" type="text" value="<?= $image ?>" size="40" aria-describedby="slug-description">
    </td>
</tr>