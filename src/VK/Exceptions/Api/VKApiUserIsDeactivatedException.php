<?php
namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

/**
 */
class VKApiUserIsDeactivatedException extends VKApiException {

	/**
	 * VKApiAccessPageException constructor.
	 *
	 * @param VkApiError $error
	 */
	public function __construct(VkApiError $error) {
		parent::__construct(3610, 'User is deactivated', $error);
	}
}
