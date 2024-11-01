<?php if (! defined('ABSPATH')) {
    exit;
} ?>

<div class="wpx-cron-manager-light wrap">
  <h2>Crons</h2>

  <div>

    <div class="notice notice-success">
      <?php
      $time_format    = 'Y-m-d H:i:s';
$tzstring       = get_option('timezone_string');
$current_offset = get_option('gmt_offset');

if ($current_offset >= 0) {
    $current_offset = '+' . $current_offset;
}

if ('' === $tzstring) {
    $tz = sprintf('UTC%s', $current_offset);
} else {
    $tz = sprintf('%s (UTC%s)', str_replace('_', ' ', $tzstring), $current_offset);
}
?>
      <p>
        <?php printf(esc_html__('Local timezone is %s', WPXCRONMANAGERLIGHT_TEXTDOMAIN), '<code>' . esc_html($tz) . '</code>'); ?>
        <span id="utc-time"><?php printf(esc_html__('UTC time is %s', WPXCRONMANAGERLIGHT_TEXTDOMAIN), '<code>' . esc_html(date_i18n($time_format, false, true)) . '</code>'); ?></span>
        <span id="local-time"><?php printf(esc_html__('Local time is %s', WPXCRONMANAGERLIGHT_TEXTDOMAIN), '<code>' . esc_html(date_i18n($time_format)) . '</code>'); ?></span>
      </p>
    </div>

    <form method="post">
      <?php
$table->prepare_items();
$table->display(); ?>
    </form>
  </div>
</div>