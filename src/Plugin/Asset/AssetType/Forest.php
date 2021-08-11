<?php

namespace Drupal\farm_forest\Plugin\Asset\AssetType;

use Drupal\farm_entity\Plugin\Asset\AssetType\FarmAssetType;

/**
 * Provides the forest asset type.
 *
 * @AssetType(
 *   id = "forest",
 *   label = @Translation("Forest"),
 * )
 */
class Forest extends FarmAssetType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = parent::buildFieldDefinitions();

    // Forest type field.
    $options = [
      'type' => 'list_string',
      'label' => t('Forest type'),
      'allowed_values' => static::allowedValues(),
      'multiple' => TRUE,
      'required' => TRUE,
      'weight' => [
        'form' => -50,
        'view' => -50,
      ],
    ];
    $fields['forest_type'] = $this->farmFieldFactory->bundleFieldDefinition($options);
    // @todo: Define this via an options provider once
    // https://www.drupal.org/node/2329937 is completed.
    $fields['forest_type']->addPropertyConstraints('value', [
      'AllowedValues' => ['callback' => __CLASS__ . '::allowedValues'],
    ]);

    return $fields;
  }

  /**
   * Allowed values for the field.
   *
   * @return array
   *  Array of allowed values.
   */
  public static function allowedValues() {
    return [
      'natural' => t('Natural stand'),
      'plantation' => t('Plantation'),
    ];
  }

}
