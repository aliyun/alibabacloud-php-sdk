<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIAlarmRuleRequest\notificationSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIAlarmRuleRequest\triggerConditions;

class CreateDIAlarmRuleRequest extends Model
{
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
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'metricType' => 'MetricType',
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
