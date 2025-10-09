<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleRequest\notificationSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleRequest\triggerConditions;

class CreateDIAlarmRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
     * @var string
     */
    public $name;

    /**
     * @var notificationSettings
     */
    public $notificationSettings;

    /**
     * @var triggerConditions[]
     */
    public $triggerConditions;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'DIJobId' => 'DIJobId',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'metricType' => 'MetricType',
        'name' => 'Name',
        'notificationSettings' => 'NotificationSettings',
        'triggerConditions' => 'TriggerConditions',
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
            $res['NotificationSettings'] = null !== $this->notificationSettings ? $this->notificationSettings->toArray($noStream) : $this->notificationSettings;
        }

        if (null !== $this->triggerConditions) {
            if (\is_array($this->triggerConditions)) {
                $res['TriggerConditions'] = [];
                $n1 = 0;
                foreach ($this->triggerConditions as $item1) {
                    $res['TriggerConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['TriggerConditions'] as $item1) {
                    $model->triggerConditions[$n1] = triggerConditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
