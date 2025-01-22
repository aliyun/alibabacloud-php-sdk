<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateDIAlarmRuleShrinkRequest extends Model
{
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
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $metricType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $notificationSettingsShrink;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
