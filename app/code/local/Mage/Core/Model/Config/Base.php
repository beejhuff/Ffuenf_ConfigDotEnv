<?php
/**
 * Ffuenf_ConfigDotEnv extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Mage_Core_Model_Config_Base extends Varien_Simplexml_Config
{
    /**
     * Constructor
     *
     */
    public function __construct($sourceData=null)
    {
        $this->_elementClass = 'Ffuenf_ConfigDotEnv_Model_Config_Element';
        parent::__construct($sourceData);
    }
}
