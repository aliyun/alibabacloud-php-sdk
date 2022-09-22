<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ConfigureSecurityGroupPermissionsRequest\authorizePermission;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ConfigureSecurityGroupPermissionsRequest\revokePermission;
use AlibabaCloud\Tea\Model;

class ConfigureSecurityGroupPermissionsRequest extends Model
{
    /**
     * @var authorizePermission[]
     */
    public $authorizePermission;

    /**
     * @var string
     */
    public $clientToken;

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
    public $resourceOwnerId;

    /**
     * @var revokePermission[]
     */
    public $revokePermission;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'authorizePermission'  => 'AuthorizePermission',
        'clientToken'          => 'ClientToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'revokePermission'     => 'RevokePermission',
        'securityGroupId'      => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizePermission) {
            $res['AuthorizePermission'] = [];
            if (null !== $this->authorizePermission && \is_array($this->authorizePermission)) {
                $n = 0;
                foreach ($this->authorizePermission as $item) {
                    $res['AuthorizePermission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->revokePermission) {
            $res['RevokePermission'] = [];
            if (null !== $this->revokePermission && \is_array($this->revokePermission)) {
                $n = 0;
                foreach ($this->revokePermission as $item) {
                    $res['RevokePermission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureSecurityGroupPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizePermission'])) {
            if (!empty($map['AuthorizePermission'])) {
                $model->authorizePermission = [];
                $n                          = 0;
                foreach ($map['AuthorizePermission'] as $item) {
                    $model->authorizePermission[$n++] = null !== $item ? authorizePermission::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RevokePermission'])) {
            if (!empty($map['RevokePermission'])) {
                $model->revokePermission = [];
                $n                       = 0;
                foreach ($map['RevokePermission'] as $item) {
                    $model->revokePermission[$n++] = null !== $item ? revokePermission::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
