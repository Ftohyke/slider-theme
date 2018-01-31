<?php

function bartik_preprocess_html(&$variables) {
  drupal_add_css(path_to_theme() . '/css/bgs.css', array('group' => CSS_THEME, 'browsers' => array('IE' => TRUE, '!IE' => TRUE), 'preprocess' => FALSE));
}
