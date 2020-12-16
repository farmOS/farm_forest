<?php

namespace Drupal\farm_forest\Plugin\Plan\PlanType;

use Drupal\farm_entity\Plugin\Plan\PlanType\FarmPlanType;

/**
 * Provides the forest plan type.
 *
 * @PlanType(
 *   id = "forest",
 *   label = @Translation("Forest"),
 * )
 */
class Forest extends FarmPlanType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = parent::buildFieldDefinitions();

    // Assets in the plan.
    $options = [
      'type' => 'entity_reference',
      'label' => $this->t('Assets'),
      'target_type' => 'asset',
      'multiple' => TRUE,
      'hidden' => FALSE,
      'required' => TRUE,
    ];
    $fields['asset'] = $this->farmFieldFactory->bundleFieldDefinition($options);

    return $fields;
  }

}
