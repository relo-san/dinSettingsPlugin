<?php

/*
 * This file is part of the dinSettingsPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinSettingsSet model table
 * 
 * @package     dinSettingsPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinSettingsSetTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinSettingsSetTable
     * 
     * @return  PluginDinSettingsSetTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinSettingsSet' );

    } // PluginDinSettingsSetTable::getInstance()

} // PluginDinSettingsSetTable

//EOF