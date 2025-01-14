<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDIAlarmRuleShrinkRequest extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 34982
     *
     * @deprecated
     *
     * @var int
     */
    public $DIAlarmRuleId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 1
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
     * @example 34982
     *
     * @var int
     */
    public $id;

    /**
     * @description The metric type in the alert rule. Valid values:
     *
     *   Heartbeat
     *   FailoverCount
     *   Delay
     *   DdlReport
     *   ResourceUtilization
     *
     * @example Heartbeat
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The name of the alert rule.
     *
     * @example alarm_rule_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The alert notification settings.
     *
     * @var string
     */
    public $notificationSettingsShrink;

    /**
     * @description The conditions that can trigger the alert rule.
     *
     * @var string
     */
    public $triggerConditionsShrink;
    protected $_name = [
        'DIAlarmRuleId'              => 'DIAlarmRuleId',
        'DIJobId'                    => 'DIJobId',
        'description'                => 'Description',
        'enabled'                    => 'Enabled',
        'id'                         => 'Id',
        'metricType'                 => 'MetricType',
        'name'                       => 'Name',
        'notificationSettingsShrink' => 'NotificationSettings',
        'triggerConditionsShrink'    => 'TriggerConditions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIAlarmRuleId) {
            $res['DIAlarmRuleId'] = $this->DIAlarmRuleId;
        }
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return UpdateDIAlarmRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIAlarmRuleId'])) {
            $model->DIAlarmRuleId = $map['DIAlarmRuleId'];
        }
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
