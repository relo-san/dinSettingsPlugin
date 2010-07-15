<?php

/*
 * This file is part of the dinSettingsPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinSettingsTree model table
 * 
 * @package     dinSettingsPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinSettingsTreeTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinSettingsTreeTable
     * 
     * @return  PluginDinSettingsTreeTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinSettingsTree' );

    } // PluginDinSettingsTreeTable::getInstance()

} // PluginDinSettingsTreeTable

//EOF