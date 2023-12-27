<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ReleaseInstancePublicConnectionRequest extends Model
{
    /**
     * @description The public endpoint to be released.
     *
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $currentConnectionString;

    /**
     * @description The ID of the instance for which you want to release a public endpoint.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'currentConnectionString' => 'CurrentConnectionString',
        'instanceId'              => 'InstanceId',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'securityToken'           => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentConnectionString) {
            $res['CurrentConnectionString'] = $this->currentConnectionString;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseInstancePublicConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentConnectionString'])) {
            $model->currentConnectionString = $map['CurrentConnectionString'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
