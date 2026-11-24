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
#[Group('Zend_Db_Statement')]
class Zend_Db_Statement_Pdo_SqliteTest extends Zend_Db_Statement_Pdo_TestCommon
{
    public function testStatementBindParamByName()
    {
        $this->markTestIncomplete($this->getDriver() . ' is having trouble with binding parameters');
    }

    public function testStatementBindParamByPosition()
    {
        $this->markTestIncomplete($this->getDriver() . ' is having trouble with binding parameters');
    }

    protected $_getColumnMetaKeys = array(
        'native_type', 'sqlite:decl_type', 'flags', 'name', 'len', 'precision', 'pdo_type'
    );

    #[Group('ZF-7706')]
    public function testStatementCanReturnDriverStatement()
    {
        $statement = parent::testStatementCanReturnDriverStatement();
        $this->assertTrue($statement->getDriverStatement() instanceof PDOStatement);
    }

    public function getDriver()
    {
        return 'Pdo_Sqlite';
    }
}
