<?php
/************************************************************
 * FileName : Accurate.php
 * Author   : ylnwqm
 * Version  : 1.0
 * Date     : 2022/5/12 17:06
 * Desc   : 简单精确计算
 * Main Function :
 * <author>    <time>    <version >    <desc>
 * ylnwqm   2022/5/12   1.0          init
 ***********************************************************/

namespace Ylnwqm\Accurate;
class Accurate
{
    //第一个要计算的数值
    public $number = 0;
    //精度计算时保留的小数点位数
    public $scale = 2;
    //计算结果
    public $result = 0;

    /**
     * AccuracyCal constructor.
     * @param int $scale 精确计算是保留的小数位数
     */
    public function __construct(int $scale = 2)
    {
        $this->scale = $scale;
    }

    /**
     * 第一个参与运算的数值，如果调用，需在最前面调用
     * @param $number  第一个要计算的数字
     */
    public function number(float $number)
    {
        $this->result = $this->number = $number;
        return $this;
    }

    /**
     * 精确计算：加
     * @param $number
     * @return $this
     */
    public function add(float $number)
    {
        $this->result = bcadd($this->result, $number, $this->scale);
        return $this;
    }

    /**
     * 精确计算：减
     * @param $number
     * @return $this
     */
    public function sub(float $number)
    {
        $this->result = bcsub($this->result, $number, $this->scale);
        return $this;
    }

    /**
     * 精确计算：乘
     * @param $number
     * @return $this
     */
    public function mul(float $number)
    {
        $this->result = bcmul($this->result, $number, $this->scale);
        return $this;
    }

    /**
     * 精确计算：除
     * @param $number
     * @return $this
     */
    public function div(float $number)
    {
        $this->result = bcdiv($this->result, $number, $this->scale);
        return $this;
    }

    /**
     * 获取计算结果
     * @return float
     */
    public function getResult(): float
    {
        return floatval($this->result);
    }
}


