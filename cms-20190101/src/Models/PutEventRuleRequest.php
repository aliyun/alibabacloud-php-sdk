<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest\eventPattern;
use AlibabaCloud\Tea\Model;

class PutEventRuleRequest extends Model
{
    /**
     * @description The description of the event-triggered alert rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var eventPattern[]
     */
    public $eventPattern;

    /**
     * @description The type of the event-triggered alert rule. Valid values:
     *
     *   SYSTEM: system event-triggered alert rule
     *   CUSTOM: custom event-triggered alert rule
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the application group to which the event-triggered alert rule belongs.
     *
     * @example 7378****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the event-triggered alert rule.
     *
     * This parameter is required.
     * @example myRuleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The status of the event-triggered alert rule. Valid values:
     *
     *   ENABLED: enabled
     *   DISABLED: disabled
     *
     * @example ENABLED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'description'  => 'Description',
        'eventPattern' => 'EventPattern',
        'eventType'    => 'EventType',
        'groupId'      => 'GroupId',
        'regionId'     => 'RegionId',
        'ruleName'     => 'RuleName',
        'silenceTime'  => 'SilenceTime',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = [];
            if (null !== $this->eventPattern && \is_array($this->eventPattern)) {
                $n = 0;
                foreach ($this->eventPattern as $item) {
                    $res['EventPattern'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEventRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventPattern'])) {
            if (!empty($map['EventPattern'])) {
                $model->eventPattern = [];
                $n                   = 0;
                foreach ($map['EventPattern'] as $item) {
                    $model->eventPattern[$n++] = null !== $item ? eventPattern::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
