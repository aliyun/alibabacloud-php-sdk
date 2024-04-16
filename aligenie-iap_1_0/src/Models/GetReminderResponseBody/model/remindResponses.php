<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody\model;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody\model\remindResponses\recurrenceRule;
use AlibabaCloud\Tea\Model;

class remindResponses extends Model
{
    /**
     * @example 宝宝快去刷牙
     *
     * @var string
     */
    public $actionTopic;

    /**
     * @example 每天
     *
     * @var string
     */
    public $dayDesc;

    /**
     * @var recurrenceRule
     */
    public $recurrenceRule;

    /**
     * @example 20*****1
     *
     * @var int
     */
    public $remindId;

    /**
     * @example 1629850800000
     *
     * @var string
     */
    public $remindTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $repeatCount;

    /**
     * @example 周三
     *
     * @var string
     */
    public $week;
    protected $_name = [
        'actionTopic'    => 'ActionTopic',
        'dayDesc'        => 'DayDesc',
        'recurrenceRule' => 'RecurrenceRule',
        'remindId'       => 'RemindId',
        'remindTime'     => 'RemindTime',
        'repeatCount'    => 'RepeatCount',
        'week'           => 'Week',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionTopic) {
            $res['ActionTopic'] = $this->actionTopic;
        }
        if (null !== $this->dayDesc) {
            $res['DayDesc'] = $this->dayDesc;
        }
        if (null !== $this->recurrenceRule) {
            $res['RecurrenceRule'] = null !== $this->recurrenceRule ? $this->recurrenceRule->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return remindResponses
     */
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
