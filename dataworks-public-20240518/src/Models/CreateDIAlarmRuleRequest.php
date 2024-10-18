<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleRequest\notificationSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleRequest\triggerConditions;
use AlibabaCloud\Tea\Model;

class CreateDIAlarmRuleRequest extends Model
{
    /**
     * @example ABFUOEUOTRTRJKE
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 任务ID，是告警规则关联的任务ID。
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description 描述。
     *
     * @var string
     */
    public $description;

    /**
     * @description 告警规则是否启用，默认不开启。
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description 告警指标类型，可选的枚举值：
     * This parameter is required.
     * @example Heartbeat
     *
     * @var string
     */
    public $metricType;

    /**
     * @description This parameter is required.
     *
     * @example alartRule
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var notificationSettings
     */
    public $notificationSettings;

    /**
     * @description This parameter is required.
     *
     * @var triggerConditions[]
     */
    public $triggerConditions;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DIJobId'              => 'DIJobId',
        'description'          => 'Description',
        'enabled'              => 'Enabled',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
     * @return CreateDIAlarmRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
