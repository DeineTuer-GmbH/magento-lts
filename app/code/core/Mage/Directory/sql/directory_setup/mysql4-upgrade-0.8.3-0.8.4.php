<?php

/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   Mage
 * @package    Mage_Directory
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @copyright  Copyright (c) 2020-2024 The OpenMage Contributors (https://www.openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$installer->run("
INSERT INTO `{$installer->getTable('directory_country')}` (`country_id`, `iso2_code`, `iso3_code`) VALUES
('GG', 'GG', 'GGY'),('IM', 'IM', 'IMN'),('JE', 'JE', 'JEY'),('ME', 'ME', 'MNE'),
('BL', 'BL', 'BLM'),('MF', 'MF', 'MAF'),('RS', 'RS', 'SRB'),('TL', 'TL', 'TLS');
");

$installer->endSetup();
