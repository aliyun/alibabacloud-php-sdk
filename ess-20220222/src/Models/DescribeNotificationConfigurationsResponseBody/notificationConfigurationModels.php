<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsResponseBody;

use AlibabaCloud\Dara\Model;

class notificationConfigurationModels extends Model
{
    /**
     * @var string
     */
    public $notificationArn;

    /**
     * @var string[]
     */
    public $notificationTypes;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'notificationArn' => 'NotificationArn',
        'notificationTypes' => 'NotificationTypes',
        'scalingGroupId' => 'ScalingGroupId',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
        if (\is_array($this->notificationTypes)) {
            Model::validateArray($this->notificationTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationArn) {
            $res['NotificationArn'] = $this->notificationArn;
        }

        if (null !== $this->notificationTypes) {
            if (\is_array($this->notificationTypes)) {
                $res['NotificationTypes'] = [];
                $n1 = 0;
                foreach ($this->notificationTypes as $item1) {
                    $res['NotificationTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
        }

        if (isset($map['NotificationTypes'])) {
            if (!empty($map['NotificationTypes'])) {
                $model->notificationTypes = [];
                $n1 = 0;
                foreach ($map['NotificationTypes'] as $item1) {
                    $model->notificationTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
