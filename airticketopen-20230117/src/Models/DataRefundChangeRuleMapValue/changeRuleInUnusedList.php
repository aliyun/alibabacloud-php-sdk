<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataRefundChangeRuleMapValue;

use AlibabaCloud\Tea\Model;

class changeRuleInUnusedList extends Model
{
    /**
     * @description type: 2 - outbound segment unused; 3 - inbound segment unused
     *
     * @example 2
     *
     * @var int
     */
    public $type;

    /**
     * @description time unit: day/hour
     *
     * @example hour
     *
     * @var string
     */
    public $timeUnit;

    /**
     * @description applicable change rule start time, time unit (day/hour)
     *
     * @example 36
     *
     * @var int
     */
    public $ruleStartTime;

    /**
     * @description applicable change rule end time, time unit (day/hour)
     *
     * @example 12
     *
     * @var int
     */
    public $ruleEndTime;

    /**
     * @description whether changeable X-Y hour(day) before departure
     *
     * @example true
     *
     * @var bool
     */
    public $canChange;

    /**
     * @description change fee X-Y hour(day) before departure
     *
     * @example 100
     *
     * @var float
     */
    public $changeFee;
    protected $_name = [
        'type'          => 'type',
        'timeUnit'      => 'time_unit',
        'ruleStartTime' => 'rule_start_time',
        'ruleEndTime'   => 'rule_end_time',
        'canChange'     => 'can_change',
        'changeFee'     => 'change_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->timeUnit) {
            $res['time_unit'] = $this->timeUnit;
        }
        if (null !== $this->ruleStartTime) {
            $res['rule_start_time'] = $this->ruleStartTime;
        }
        if (null !== $this->ruleEndTime) {
            $res['rule_end_time'] = $this->ruleEndTime;
        }
        if (null !== $this->canChange) {
            $res['can_change'] = $this->canChange;
        }
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeRuleInUnusedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['time_unit'])) {
            $model->timeUnit = $map['time_unit'];
        }
        if (isset($map['rule_start_time'])) {
            $model->ruleStartTime = $map['rule_start_time'];
        }
        if (isset($map['rule_end_time'])) {
            $model->ruleEndTime = $map['rule_end_time'];
        }
        if (isset($map['can_change'])) {
            $model->canChange = $map['can_change'];
        }
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }

        return $model;
    }
}
