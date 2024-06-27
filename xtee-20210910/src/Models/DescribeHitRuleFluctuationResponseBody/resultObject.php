<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleFluctuationResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $todayNum;

    /**
     * @var string
     */
    public $withinSevenDayNum;

    /**
     * @var string
     */
    public $withinThirtyDayNum;

    /**
     * @var string
     */
    public $withinThreeDayNum;

    /**
     * @var int
     */
    public $yesterdayNum;
    protected $_name = [
        'ruleId'             => 'ruleId',
        'ruleName'           => 'ruleName',
        'todayNum'           => 'todayNum',
        'withinSevenDayNum'  => 'withinSevenDayNum',
        'withinThirtyDayNum' => 'withinThirtyDayNum',
        'withinThreeDayNum'  => 'withinThreeDayNum',
        'yesterdayNum'       => 'yesterdayNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->todayNum) {
            $res['todayNum'] = $this->todayNum;
        }
        if (null !== $this->withinSevenDayNum) {
            $res['withinSevenDayNum'] = $this->withinSevenDayNum;
        }
        if (null !== $this->withinThirtyDayNum) {
            $res['withinThirtyDayNum'] = $this->withinThirtyDayNum;
        }
        if (null !== $this->withinThreeDayNum) {
            $res['withinThreeDayNum'] = $this->withinThreeDayNum;
        }
        if (null !== $this->yesterdayNum) {
            $res['yesterdayNum'] = $this->yesterdayNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['todayNum'])) {
            $model->todayNum = $map['todayNum'];
        }
        if (isset($map['withinSevenDayNum'])) {
            $model->withinSevenDayNum = $map['withinSevenDayNum'];
        }
        if (isset($map['withinThirtyDayNum'])) {
            $model->withinThirtyDayNum = $map['withinThirtyDayNum'];
        }
        if (isset($map['withinThreeDayNum'])) {
            $model->withinThreeDayNum = $map['withinThreeDayNum'];
        }
        if (isset($map['yesterdayNum'])) {
            $model->yesterdayNum = $map['yesterdayNum'];
        }

        return $model;
    }
}
