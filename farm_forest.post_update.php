<?php

/**
 * @file
 * Post update hooks for the farm_forest module.
 */

/**
 * Implements hook_removed_post_updates().
 */
function farm_forest_removed_post_updates() {
  return [
    'farm_forest_post_update_uninstall_v1_migration' => '3.x',
  ];
}
