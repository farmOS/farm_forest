<?php

/**
 * @file
 * Post update hooks for the farm_forest module.
 */

use Drupal\migrate_plus\Entity\Migration;

/**
 * Uninstall v1 migration config.
 */
function farm_forest_post_update_uninstall_v1_migration(&$sandbox) {
  $config = Migration::load('farm_migrate_area_forest');
  if (!empty($config)) {
    $config->delete();
  }
}
