<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIAlarmRulesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIAlarmRulesResponseBody\pagingInfo\DIJobAlarmRules\notificationSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIAlarmRulesResponseBody\pagingInfo\DIJobAlarmRules\triggerConditions;
use AlibabaCloud\Tea\Model;

class DIJobAlarmRules extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 72402
     *
     * @deprecated
     *
     * @var int
     */
    public $DIAlarmRuleId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 32594
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The description of the alert rule.
     *
     * @example rule descrition
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the alert rule is enabled. Valid values: True and False.
     *
     * @example True
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The ID of the alert rule.
     *
     * @example 72402
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
     * @example rule_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The alert notification method and recipient settings.
     *
     * @var notificationSettings
     */
    public $notificationSettings;

    /**
     * @description The conditions that are used to trigger the alert rule.
     *
     * @var triggerConditions[]
     */
    public $triggerConditions;
    protected $_name = [
        'DIAlarmRuleId'        => 'DIAlarmRuleId',
        'DIJobId'              => 'DIJobId',
        'description'          => 'Description',
        'enabled'              => 'Enabled',
        'id'                   => 'Id',
        'metricType'           => 'MetricType',
        'name'                 => 'Name',
        'notificationSettings' => 'NotificationSettings',
        'triggerConditions'    => 'TriggerConditions',
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
        if (null !== $this->notificationSettings) {
            $res['NotificationSettings'] = null !== $this->notificationSettings ? $this->notificationSettings->toMap() : null;
        }
        if (null !== $this->triggerConditions) {
            $res['TriggerConditions'] = [];
            if (null !== $this->triggerConditions && \is_array($this->triggerConditions)) {
                $n = 0;
                foreach ($this->triggerConditions as $item) {
                    $res['TriggerConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DIJobAlarmRules
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
            $model->notificationSettings = notificationSettings::fromMap($map['NotificationSettings']);
        }
        if (isset($map['TriggerConditions'])) {
            if (!empty($map['TriggerConditions'])) {
                $model->triggerConditions = [];
                $n                        = 0;
                foreach ($map['TriggerConditions'] as $item) {
                    $model->triggerConditions[$n++] = null !== $item ? triggerConditions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
