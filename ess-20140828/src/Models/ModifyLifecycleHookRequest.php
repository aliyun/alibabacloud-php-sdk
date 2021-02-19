<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class ModifyLifecycleHookRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $lifecycleHookId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $lifecycleHookName;

    /**
     * @var string
     */
    public $defaultResult;

    /**
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @var string
     */
    public $lifecycleTransition;

    /**
     * @var string
     */
    public $notificationMetadata;

    /**
     * @var string
     */
    public $notificationArn;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount'         => 'OwnerAccount',
        'lifecycleHookId'      => 'LifecycleHookId',
        'scalingGroupId'       => 'ScalingGroupId',
        'lifecycleHookName'    => 'LifecycleHookName',
        'defaultResult'        => 'DefaultResult',
        'heartbeatTimeout'     => 'HeartbeatTimeout',
        'lifecycleTransition'  => 'LifecycleTransition',
        'notificationMetadata' => 'NotificationMetadata',
        'notificationArn'      => 'NotificationArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->lifecycleHookId) {
            $res['LifecycleHookId'] = $this->lifecycleHookId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->lifecycleHookName) {
            $res['LifecycleHookName'] = $this->lifecycleHookName;
        }
        if (null !== $this->defaultResult) {
            $res['DefaultResult'] = $this->defaultResult;
        }
        if (null !== $this->heartbeatTimeout) {
            $res['HeartbeatTimeout'] = $this->heartbeatTimeout;
        }
        if (null !== $this->lifecycleTransition) {
            $res['LifecycleTransition'] = $this->lifecycleTransition;
        }
        if (null !== $this->notificationMetadata) {
            $res['NotificationMetadata'] = $this->notificationMetadata;
        }
        if (null !== $this->notificationArn) {
            $res['NotificationArn'] = $this->notificationArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLifecycleHookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['LifecycleHookId'])) {
            $model->lifecycleHookId = $map['LifecycleHookId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['LifecycleHookName'])) {
            $model->lifecycleHookName = $map['LifecycleHookName'];
        }
        if (isset($map['DefaultResult'])) {
            $model->defaultResult = $map['DefaultResult'];
        }
        if (isset($map['HeartbeatTimeout'])) {
            $model->heartbeatTimeout = $map['HeartbeatTimeout'];
        }
        if (isset($map['LifecycleTransition'])) {
            $model->lifecycleTransition = $map['LifecycleTransition'];
        }
        if (isset($map['NotificationMetadata'])) {
            $model->notificationMetadata = $map['NotificationMetadata'];
        }
        if (isset($map['NotificationArn'])) {
            $model->notificationArn = $map['NotificationArn'];
        }

        return $model;
    }
}
