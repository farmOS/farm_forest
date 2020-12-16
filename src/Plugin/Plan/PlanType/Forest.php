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
      'label' => $this->t('Forests'),
      'description' => $this->t('Select the forests that this plan pertains to.'),
      'target_type' => 'asset',
      'target_bundle' => 'forest',
      'multiple' => TRUE,
      'required' => TRUE,
      'weight' => [
        'form' => -50,
        'view' => -10,
      ],
    ];
    $fields['asset'] = $this->farmFieldFactory->bundleFieldDefinition($options);

    return $fields;
  }

}
