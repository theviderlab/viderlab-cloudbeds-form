<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://viderlab.com
 * @since      1.0.0
 *
 * @package    ViderLab_Cloudbeds_Form
 * @subpackage ViderLab_Cloudbeds_Form/public/partials
 */
?>

<div class="viderlab-cloudbeds-form">
    <form method="post" id="viderlab-cloudbeds-form" action="<?php echo esc_html_e( 'https://hotels.cloudbeds.com/reservation/', 'viderlab-cloudbeds-form' ).$settings['viderlab-cloudbeds-form-settings_url']; ?>">
        <input type="hidden" name="date_format" value="d/m/Y" />
        <div class="viderlab-search-room-form">
            <div class="viderlab-dates">
                <div class="viderlab-date">
                    <div class="viderlab-title">
                        <label><?php _e('Check-in', 'viderlab-cloudbeds-form'); ?></label>
                    </div>
                    <div class="viderlab-datepicker">
                        <input type="date" class="date_picker" name="viderlab-checkin" id="viderlab-checkin" value="24/08/2023" />
                    </div>
                </div>
                <div class="viderlab-date">
                    <div class="viderlab-title">
                        <label><?php _e('Check-out', 'viderlab-cloudbeds-form'); ?></label>
                    </div>
                    <div class="viderlab-datepicker">
                        <input type="date" class="date_picker" name="viderlab-checkout" id="viderlab-checkout" value="25/08/2023" />
                    </div>
                </div>
            </div>
            <div class="viderlab-submit">
                <input type="submit" name="viderlab-search-room" id="viderlab-search-room" value="<?php _e('Search', 'viderlab-cloudbeds-form'); ?>" />
            </div>
        </div>
    </form>
</div>
