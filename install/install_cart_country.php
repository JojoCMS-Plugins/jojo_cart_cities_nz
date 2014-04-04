<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008 Harvey Kane <code@ragepank.com>
 * Copyright 2008 Jojo CMS
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

/* Make sure we have New Zealand in these */
$countries = array(
                array('NZ', 'New Zealand', 'newzealand_nth', 'newzealand_nth', 'yes', 'yes', 'no')
                );
foreach ($countries as $country) {
    Jojo::updateQuery('REPLACE INTO {cart_country} SET countrycode=?, name=?, region=?, defaultregion=?, special = ?, applytax = ?, hasstates = ?', $country);
}