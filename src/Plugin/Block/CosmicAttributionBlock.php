<?php

namespace Drupal\cosmic_attribution\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CosmicAttributionBlock' block.
 *
 * @Block(
 *  id = "cosmic_attribution_block",
 *  admin_label = @Translation("Cosmic attribution block"),
 * )
 */
class CosmicAttributionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return ['#theme' => 'cosmic_logo'];
  }

}
