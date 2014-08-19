<?php

/**
 * @file
 * Contains RestfulRateLimitRequest.
 */

namespace Drupal\restful\Plugin\RateLimit;

use Drupal\restful\Base\RestfulRateLimitInterface;
use Drupal\Core\Plugin\PluginBase;

/**
 * @RateLimit(
 *  id = "request-1.0",
 *  label = @Translation("Any request"),
 *  description = @Translation("The basic rate limit plugin. Every call to a resource is counted."),
 *  name = "request"
 * )
 */
class RestfulRateLimitRequest extends PluginBase implements RestfulRateLimitInterface {

  /**
   * {@inheritdoc}
   */
  public function isRequestedEvent(array $request = array()) {
    return TRUE;
  }
}

