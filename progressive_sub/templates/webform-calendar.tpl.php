<?php
$idKey = str_replace('_', '-', $component['form_key']);
?>

<input type="text" id="edit-submitted-<?php print $idKey ?>" class="form-control form-text <?php print implode(' ', $calendar_classes); ?>" alt="<?php print t('Open popup calendar'); ?>" title="<?php print t('Open popup calendar'); ?>" />