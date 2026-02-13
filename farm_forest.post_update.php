<?php

/**
 * @file
 * Post update hooks for the farm_forest module.
 */

function farm_forest_removed_post_updates() {
  return [
    'farm_forest_post_update_uninstall_v1_migration' => '3.x',
  ];
}
