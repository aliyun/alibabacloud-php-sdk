<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class RecordLifecycleActionHeartbeatRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

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
     * @var int
     */
    public $heartbeatTimeout;

    /**
     * @var string
     */
    public $lifecycleActionToken;

    /**
     * @var string
     */
    public $lifecycleHookId;
    protected $_name = [
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'heartbeatTimeout' => 'heartbeatTimeout',
        'lifecycleActionToken' => 'lifecycleActionToken',
        'lifecycleHookId' => 'lifecycleHookId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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

        if (null !== $this->heartbeatTimeout) {
            $res['heartbeatTimeout'] = $this->heartbeatTimeout;
        }

        if (null !== $this->lifecycleActionToken) {
            $res['lifecycleActionToken'] = $this->lifecycleActionToken;
        }

        if (null !== $this->lifecycleHookId) {
            $res['lifecycleHookId'] = $this->lifecycleHookId;
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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

        if (isset($map['heartbeatTimeout'])) {
            $model->heartbeatTimeout = $map['heartbeatTimeout'];
        }

        if (isset($map['lifecycleActionToken'])) {
            $model->lifecycleActionToken = $map['lifecycleActionToken'];
        }

        if (isset($map['lifecycleHookId'])) {
            $model->lifecycleHookId = $map['lifecycleHookId'];
        }

        return $model;
    }
}
