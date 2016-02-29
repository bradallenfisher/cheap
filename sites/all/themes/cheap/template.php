<?php
  /**
 * Implements hook_preprocess_page().
 */
function cheap_preprocess_page(&$variables) {
  // You can use preprocess hooks to modify the variables before they are passed
  // to the theme function or template file.
  drupal_add_css('//fonts.googleapis.com/css?family=Open+Sans', array('group' => CSS_THEME));
  drupal_add_css('//fonts.googleapis.com/css?family=Josefin+Sans:400,700', array('group' => CSS_THEME));

}


/**
 * Returns HTML for primary and secondary local tasks.
 *
 * @ingroup themeable
 */
function cheap_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<span class="element-invisible">' . t('Primary tabs') . '</span>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary tabs--primary  links--inline">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<span class="element-invisible">' . t('Secondary tabs') . '</span>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary tabs--secondary links--inline">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

//add side-true class when there is content placed in the side region
  function cheap_preprocess_html(&$variables) {

  if (!empty($variables['page']['side'])) {
    $variables['classes_array'][] = 'side-bar';
  }

}