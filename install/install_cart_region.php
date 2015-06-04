<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008 Harvey Kane <code@ragepank.com>
 * Copyright 2008 Michael Holt <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

/* Ensure we have New Zealand regions in there */
$regions = array(
                array('newzealand_nth', 'New Zealand - North Island'),
                array('newzealand_sth', 'New Zealand - South Island'),
                );
foreach ($regions as $region) {
    if (!Jojo::selectRow("SELECT * FROM {cart_region} where regioncode = ?", $region[0])) {
        Jojo::insertQuery("INSERT INTO {cart_region} SET regioncode=?, name=?", $region);
    }
}

