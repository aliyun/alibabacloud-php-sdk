<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDIAlarmRuleShrinkRequest extends Model
{
    /**
     * @description The ID of the task with which the alert rule is associated.
     *
     * This parameter is required.
     * @example 11265
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The description of the alert rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the alert rule. By default, the alert rule is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The metric type in the alert rule. Valid values:
     *
     *   Heartbeat
     *   FailoverCount
     *   Delay
     *
     * This parameter is required.
     * @example Heartbeat
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The alert notification settings.
     *
     * This parameter is required.
     * @var string
     */
    public $notificationSettingsShrink;

    /**
     * @description The conditions that can trigger the alert rule.
     *
     * This parameter is required.
     * @var string
     */
    public $triggerConditionsShrink;
    protected $_name = [
        'DIJobId'                    => 'DIJobId',
        'description'                => 'Description',
        'enabled'                    => 'Enabled',
        'metricType'                 => 'MetricType',
        'notificationSettingsShrink' => 'NotificationSettings',
        'triggerConditionsShrink'    => 'TriggerConditions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->notificationSettingsShrink) {
            $res['NotificationSettings'] = $this->notificationSettingsShrink;
        }
        if (null !== $this->triggerConditionsShrink) {
            $res['TriggerConditions'] = $this->triggerConditionsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDIAlarmRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['NotificationSettings'])) {
            $model->notificationSettingsShrink = $map['NotificationSettings'];
        }
        if (isset($map['TriggerConditions'])) {
            $model->triggerConditionsShrink = $map['TriggerConditions'];
        }

        return $model;
    }
}
