<?php
declare(strict_types=1);


/**
 * Push - Nextcloud Push Service
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018, Maxence Lange <maxence@artificial-owl.com>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCP\Push;


use OCP\Push\Exceptions\PushInstallException;
use OCP\Push\Helper\IPushHelper;
use OCP\Push\Service\IPushService;


/**
 * Interface IPushManager
 *
 * @since 18.0.0
 *
 * @package OCP\Push
 */
interface IPushManager {


	/**
	 * Register a IPushService.
	 *
	 * @param IPushService $pushService
	 * @param IPushHelper $pushHelper
	 *
	 * @since 18.0.0
	 */
	public function registerPushApp(IPushService $pushService, IPushHelper $pushHelper);


	/**
	 * @return bool
	 */
	public function isAvailable(): bool;


	/**
	 * @return IPushService
	 * @throws PushInstallException
	 */
	public function getPushService(): IPushService;


	/**
	 * @return IPushHelper
	 * @throws PushInstallException
	 */
	public function getPushHelper(): IPushHelper;

}
