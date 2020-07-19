<?php

/**
 * @file
 * Farm Area hooks implemented by the Farm Forest module.
 */

/**
 * Implements hook_farm_area_type_info().
 */
function farm_forest_farm_area_type_info() {
  return array(
    'stand' => array(
      'label' => t('Natural Stand'),
      'style' => 'darkgreen',
      'weight' => 90,
      'dashboard_metric' => TRUE,

    ),
    'plantation' => array(
      'label' => t('Plantation'),
      'style' => 'green',
      'weight' => 80,
      'dashboard_metric' => TRUE,
    ),
  );
}
