<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class CompleteLifecycleActionRequest extends Model
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
     * @var string
     */
    public $lifecycleActionResult;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'ownerAccount'          => 'OwnerAccount',
        'lifecycleHookId'       => 'LifecycleHookId',
        'lifecycleActionToken'  => 'LifecycleActionToken',
        'lifecycleActionResult' => 'LifecycleActionResult',
        'clientToken'           => 'ClientToken',
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
        if (null !== $this->lifecycleActionToken) {
            $res['LifecycleActionToken'] = $this->lifecycleActionToken;
        }
        if (null !== $this->lifecycleActionResult) {
            $res['LifecycleActionResult'] = $this->lifecycleActionResult;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteLifecycleActionRequest
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
        if (isset($map['LifecycleActionToken'])) {
            $model->lifecycleActionToken = $map['LifecycleActionToken'];
        }
        if (isset($map['LifecycleActionResult'])) {
            $model->lifecycleActionResult = $map['LifecycleActionResult'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
