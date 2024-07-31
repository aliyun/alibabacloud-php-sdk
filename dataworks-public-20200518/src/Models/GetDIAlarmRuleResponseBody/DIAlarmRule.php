<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody\DIAlarmRule\notificationSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody\DIAlarmRule\triggerConditions;
use AlibabaCloud\Tea\Model;

class DIAlarmRule extends Model
{
    /**
     * @description The timestamp when the alert rule was created. Unit: seconds.
     *
     * @example 1663573162
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The ID of the user who creates the alert rule.
     *
     * @example 10000001
     *
     * @var string
     */
    public $createdUid;

    /**
     * @description The alert rule ID.
     *
     * @example 34988
     *
     * @var int
     */
    public $DIAlarmRuleId;

    /**
     * @description The ID of the task with which the alert rule is associated.
     *
     * @example 11170
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
     * @description Indicates whether the alert rule is enabled.
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
     * @example Heartbeat
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The alert notification settings.
     *
     * @var notificationSettings
     */
    public $notificationSettings;

    /**
     * @description The conditions that can trigger the alert rule.
     *
     * @var triggerConditions[]
     */
    public $triggerConditions;

    /**
     * @description The timestamp when the alert rule was last updated. Unit: seconds.
     *
     * @example 1663573163
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The ID of the user who last updates the alert rule.
     *
     * @example 10000001
     *
     * @var string
     */
    public $updatedUid;
    protected $_name = [
        'createdTime'          => 'CreatedTime',
        'createdUid'           => 'CreatedUid',
        'DIAlarmRuleId'        => 'DIAlarmRuleId',
        'DIJobId'              => 'DIJobId',
        'description'          => 'Description',
        'enabled'              => 'Enabled',
        'metricType'           => 'MetricType',
        'notificationSettings' => 'NotificationSettings',
        'triggerConditions'    => 'TriggerConditions',
        'updatedTime'          => 'UpdatedTime',
        'updatedUid'           => 'UpdatedUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->createdUid) {
            $res['CreatedUid'] = $this->createdUid;
        }
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
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
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
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->updatedUid) {
            $res['UpdatedUid'] = $this->updatedUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DIAlarmRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatedUid'])) {
            $model->createdUid = $map['CreatedUid'];
        }
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
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
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
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['UpdatedUid'])) {
            $model->updatedUid = $map['UpdatedUid'];
        }

        return $model;
    }
}
