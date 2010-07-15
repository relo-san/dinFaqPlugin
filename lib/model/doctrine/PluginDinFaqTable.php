<?php

/*
 * This file is part of the dinFaqPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinFaq model table
 * 
 * @package     dinFaqPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinFaqTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinFaqTable
     * 
     * @return  PluginDinFaqTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinFaq' );

    } // PluginDinFaqTable::getInstance()

} // PluginDinFaqTable

//EOF