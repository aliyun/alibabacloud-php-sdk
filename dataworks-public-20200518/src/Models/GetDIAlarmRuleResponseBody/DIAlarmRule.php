<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody\DIAlarmRule\notificationSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody\DIAlarmRule\triggerConditions;

class DIAlarmRule extends Model
{
    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $createdUid;

    /**
     * @var int
     */
    public $DIAlarmRuleId;

    /**
     * @var int
     */
    public $DIJobId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var notificationSettings
     */
    public $notificationSettings;

    /**
     * @var triggerConditions[]
     */
    public $triggerConditions;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $updatedUid;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'createdUid' => 'CreatedUid',
        'DIAlarmRuleId' => 'DIAlarmRuleId',
        'DIJobId' => 'DIJobId',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'metricType' => 'MetricType',
        'notificationSettings' => 'NotificationSettings',
        'triggerConditions' => 'TriggerConditions',
        'updatedTime' => 'UpdatedTime',
        'updatedUid' => 'UpdatedUid',
    ];

    public function validate()
    {
        if (null !== $this->notificationSettings) {
            $this->notificationSettings->validate();
        }
        if (\is_array($this->triggerConditions)) {
            Model::validateArray($this->triggerConditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['NotificationSettings'] = null !== $this->notificationSettings ? $this->notificationSettings->toArray($noStream) : $this->notificationSettings;
        }

        if (null !== $this->triggerConditions) {
            if (\is_array($this->triggerConditions)) {
                $res['TriggerConditions'] = [];
                $n1 = 0;
                foreach ($this->triggerConditions as $item1) {
                    $res['TriggerConditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TriggerConditions'] as $item1) {
                    $model->triggerConditions[$n1++] = triggerConditions::fromMap($item1);
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
