<?php

/*
 * This file is part of the dinSettingsPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinSettingsParam model table
 * 
 * @package     dinSettingsPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinSettingsParamTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinSettingsParamTable
     * 
     * @return  PluginDinSettingsParamTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinSettingsParam' );

    } // PluginDinSettingsParamTable::getInstance()

} // PluginDinSettingsParamTable

//EOF