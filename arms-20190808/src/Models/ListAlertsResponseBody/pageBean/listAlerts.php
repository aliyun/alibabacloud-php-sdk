<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts\activities;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts\alertEvents;
use AlibabaCloud\Tea\Model;

class listAlerts extends Model
{
    /**
     * @description The list of activities.
     *
     * @var activities[]
     */
    public $activities;

    /**
     * @description The list of events.
     *
     * @var alertEvents[]
     */
    public $alertEvents;

    /**
     * @description The alert ID.
     *
     * @example 2279
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The name of the alert rule.
     *
     * @example Test alert
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The time when the alert was created.
     *
     * @example 2022-01-18 00:21:35
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the notification policy.
     *
     * @example 12345
     *
     * @var float
     */
    public $dispatchRuleId;

    /**
     * @description The name of the notification policy.
     *
     * @example DingTalk Notification
     *
     * @var string
     */
    public $dispatchRuleName;

    /**
     * @description The severity level of the alert. Valid values: P6, P5, P4, P3, P2, and P1. The preceding values are listed in ascending order of severity.
     *
     * @example P6
     *
     * @var string
     */
    public $severity;

    /**
     * @description The Alert solution.
     *
     * @var string
     */
    public $solution;

    /**
     * @description The status of the alert. Valid values:
     *
     *   0: The alert is pending.
     *   1: The alert is being handled.
     *   2: The alert is handled.
     *
     * @example 0
     *
     * @var int
     */
    public $state;
    protected $_name = [
        'activities'       => 'Activities',
        'alertEvents'      => 'AlertEvents',
        'alertId'          => 'AlertId',
        'alertName'        => 'AlertName',
        'createTime'       => 'CreateTime',
        'dispatchRuleId'   => 'DispatchRuleId',
        'dispatchRuleName' => 'DispatchRuleName',
        'severity'         => 'Severity',
        'solution'         => 'Solution',
        'state'            => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activities) {
            $res['Activities'] = [];
            if (null !== $this->activities && \is_array($this->activities)) {
                $n = 0;
                foreach ($this->activities as $item) {
                    $res['Activities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertEvents) {
            $res['AlertEvents'] = [];
            if (null !== $this->alertEvents && \is_array($this->alertEvents)) {
                $n = 0;
                foreach ($this->alertEvents as $item) {
                    $res['AlertEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dispatchRuleId) {
            $res['DispatchRuleId'] = $this->dispatchRuleId;
        }
        if (null !== $this->dispatchRuleName) {
            $res['DispatchRuleName'] = $this->dispatchRuleName;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listAlerts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Activities'])) {
            if (!empty($map['Activities'])) {
                $model->activities = [];
                $n                 = 0;
                foreach ($map['Activities'] as $item) {
                    $model->activities[$n++] = null !== $item ? activities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertEvents'])) {
            if (!empty($map['AlertEvents'])) {
                $model->alertEvents = [];
                $n                  = 0;
                foreach ($map['AlertEvents'] as $item) {
                    $model->alertEvents[$n++] = null !== $item ? alertEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DispatchRuleId'])) {
            $model->dispatchRuleId = $map['DispatchRuleId'];
        }
        if (isset($map['DispatchRuleName'])) {
            $model->dispatchRuleName = $map['DispatchRuleName'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
