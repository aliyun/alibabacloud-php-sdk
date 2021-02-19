<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class RecordLifecycleActionHeartbeatRequest extends Model
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
    public $lifecycleActionToken;

    /**
     * @var int
     */
    public $heartbeatTimeout;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount'         => 'OwnerAccount',
        'lifecycleHookId'      => 'lifecycleHookId',
        'lifecycleActionToken' => 'lifecycleActionToken',
        'heartbeatTimeout'     => 'heartbeatTimeout',
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
            $res['lifecycleHookId'] = $this->lifecycleHookId;
        }
        if (null !== $this->lifecycleActionToken) {
            $res['lifecycleActionToken'] = $this->lifecycleActionToken;
        }
        if (null !== $this->heartbeatTimeout) {
            $res['heartbeatTimeout'] = $this->heartbeatTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecordLifecycleActionHeartbeatRequest
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
        if (isset($map['lifecycleHookId'])) {
            $model->lifecycleHookId = $map['lifecycleHookId'];
        }
        if (isset($map['lifecycleActionToken'])) {
            $model->lifecycleActionToken = $map['lifecycleActionToken'];
        }
        if (isset($map['heartbeatTimeout'])) {
            $model->heartbeatTimeout = $map['heartbeatTimeout'];
        }

        return $model;
    }
}
