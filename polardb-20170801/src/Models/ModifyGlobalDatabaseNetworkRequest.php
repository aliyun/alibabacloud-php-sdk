<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyGlobalDatabaseNetworkRequest extends Model
{
    /**
     * @description The description of the GDN. The description must meet the following requirements:
     *
     *   It cannot start with `http://` or `https://`.
     *   It must start with a letter.
     *   It can contain letters, digits, underscores (_), and hyphens (-).
     *   It must be 2 to 126 characters in length.
     *
     * This parameter is required.
     * @example GDN-fortest
     *
     * @var string
     */
    public $GDNDescription;

    /**
     * @description The ID of the GDN.
     *
     * This parameter is required.
     * @example gdn-bp1fttxsrmv*****
     *
     * @var string
     */
    public $GDNId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;

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
        'GDNDescription'       => 'GDNDescription',
        'GDNId'                => 'GDNId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GDNDescription) {
            $res['GDNDescription'] = $this->GDNDescription;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return ModifyGlobalDatabaseNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GDNDescription'])) {
            $model->GDNDescription = $map['GDNDescription'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
