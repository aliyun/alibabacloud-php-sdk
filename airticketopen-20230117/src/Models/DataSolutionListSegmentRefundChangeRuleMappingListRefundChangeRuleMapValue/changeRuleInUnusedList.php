<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionListSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue;

use AlibabaCloud\Dara\Model;

class changeRuleInUnusedList extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var int
     */
    public $ruleStartTime;

    /**
     * @var int
     */
    public $ruleEndTime;

    /**
     * @var bool
     */
    public $canChange;

    /**
     * @var float
     */
    public $changeFee;
    protected $_name = [
        'type' => 'type',
        'timeUnit' => 'time_unit',
        'ruleStartTime' => 'rule_start_time',
        'ruleEndTime' => 'rule_end_time',
        'canChange' => 'can_change',
        'changeFee' => 'change_fee',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
