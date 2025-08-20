<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ListRemindersResponseBody\model;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ListRemindersResponseBody\model\remindResponses\recurrenceRule;

class remindResponses extends Model
{
    /**
     * @var string
     */
    public $actionTopic;

    /**
     * @var string
     */
    public $dayDesc;

    /**
     * @var recurrenceRule
     */
    public $recurrenceRule;

    /**
     * @var int
     */
    public $remindId;

    /**
     * @var string
     */
    public $remindTime;

    /**
     * @var int
     */
    public $repeatCount;

    /**
     * @var string
     */
    public $week;
    protected $_name = [
        'actionTopic' => 'ActionTopic',
        'dayDesc' => 'DayDesc',
        'recurrenceRule' => 'RecurrenceRule',
        'remindId' => 'RemindId',
        'remindTime' => 'RemindTime',
        'repeatCount' => 'RepeatCount',
        'week' => 'Week',
    ];

    public function validate()
    {
        if (null !== $this->recurrenceRule) {
            $this->recurrenceRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionTopic) {
            $res['ActionTopic'] = $this->actionTopic;
        }

        if (null !== $this->dayDesc) {
            $res['DayDesc'] = $this->dayDesc;
        }

        if (null !== $this->recurrenceRule) {
            $res['RecurrenceRule'] = null !== $this->recurrenceRule ? $this->recurrenceRule->toArray($noStream) : $this->recurrenceRule;
        }

        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }

        if (null !== $this->remindTime) {
            $res['RemindTime'] = $this->remindTime;
        }

        if (null !== $this->repeatCount) {
            $res['RepeatCount'] = $this->repeatCount;
        }

        if (null !== $this->week) {
            $res['Week'] = $this->week;
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
        if (isset($map['ActionTopic'])) {
            $model->actionTopic = $map['ActionTopic'];
        }

        if (isset($map['DayDesc'])) {
            $model->dayDesc = $map['DayDesc'];
        }

        if (isset($map['RecurrenceRule'])) {
            $model->recurrenceRule = recurrenceRule::fromMap($map['RecurrenceRule']);
        }

        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }

        if (isset($map['RemindTime'])) {
            $model->remindTime = $map['RemindTime'];
        }

        if (isset($map['RepeatCount'])) {
            $model->repeatCount = $map['RepeatCount'];
        }

        if (isset($map['Week'])) {
            $model->week = $map['Week'];
        }

        return $model;
    }
}
