<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetAutomaticFrequencyControlConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $punishTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $threshold;
    protected $_name = [
        'actionType' => 'ActionType',
        'enable' => 'Enable',
        'interval' => 'Interval',
        'level' => 'Level',
        'punishTime' => 'PunishTime',
        'requestId' => 'RequestId',
        'ruleId' => 'RuleId',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->punishTime) {
            $res['PunishTime'] = $this->punishTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['PunishTime'])) {
            $model->punishTime = $map['PunishTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
