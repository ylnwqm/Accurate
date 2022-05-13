<?php
/************************************************************
 * FileName : AccurateTest.php
 * Author   : ylnwqm
 * Version  : 1.0
 * Date     : 2022/5/12 17:09
 * Desc   :
 * Main Function :
 * History  :
 * <author>    <time>    <version >    <desc>
 * ylnwqm   2022/5/12   1.0          init
 ***********************************************************/

use PHPUnit\Framework\TestCase;
use Ylnwqm\Accurate\Accurate;

class AccurateTest extends TestCase
{

    public function testAccurate()
    {
        $new = new Accurate();
        //断言默认初始化对象
        $result = $new->number(1)->add(0.2)->getResult();
        $this->assertIsFloat($result);
        $this->objectEquals($new);
    }

}
