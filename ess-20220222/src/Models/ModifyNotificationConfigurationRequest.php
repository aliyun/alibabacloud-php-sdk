<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class ModifyNotificationConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $messageEncoding;

    /**
     * @var string
     */
    public $notificationArn;

    /**
     * @var string[]
     */
    public $notificationTypes;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'messageEncoding' => 'MessageEncoding',
        'notificationArn' => 'NotificationArn',
        'notificationTypes' => 'NotificationTypes',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
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
        if (null !== $this->messageEncoding) {
            $res['MessageEncoding'] = $this->messageEncoding;
        }

        if (null !== $this->notificationArn) {
            $res['NotificationArn'] = $this->notificationArn;
        }

        if (null !== $this->notificationTypes) {
            if (\is_array($this->notificationTypes)) {
                $res['NotificationTypes'] = [];
                $n1 = 0;
                foreach ($this->notificationTypes as $item1) {
                    $res['NotificationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
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
        if (isset($map['MessageEncoding'])) {
            $model->messageEncoding = $map['MessageEncoding'];
        }

        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
        }

        if (isset($map['NotificationTypes'])) {
            if (!empty($map['NotificationTypes'])) {
                $model->notificationTypes = [];
                $n1 = 0;
                foreach ($map['NotificationTypes'] as $item1) {
                    $model->notificationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
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
