<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id $
 */

use PHPUnit\Framework\Attributes\Group;

/**
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
#[Group('Zend_Db')]
#[Group('Zend_Db_Table')]
#[Group('Zend_Db_Table_Row')]
class Zend_Db_Table_Row_Pdo_IbmTest extends Zend_Db_Table_Row_TestCommon
{
    public function getDriver()
    {
        return 'Pdo_Ibm';
    }

    public function testTableRowSetPrimaryKey()
    {
        $server = $this->_util->getServer();

        if ($server == 'IDS') {
            $this->markTestSkipped('IDS Serial columns cannot be updated');
        } else {
            parent::testTableRowSetPrimaryKey();
        }
    }
}
