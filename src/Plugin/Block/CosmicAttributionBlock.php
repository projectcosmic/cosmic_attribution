<?php

namespace Drupal\cosmic_attribution\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

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
    $url = Url::fromUserInput('https://www.cosmic.org.uk')->setOption('attributes', [
      'target' => '_blank',
      'rel' => ['nofollow', 'noreferrer'],
    ]);

    return [
      '#type' => 'link',
      '#url' => $url,
      '#title' => ['#theme' => 'cosmic_logo'],
    ];
  }

}
