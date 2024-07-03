<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteDBInstanceSecurityGroupRuleRequest extends Model
{
    /**
     * @example ETnLKlblzczshOTUbOC******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example rm-bp15i4hn07r******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @example rg-acfmy****
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
     * @description This parameter is required.
     *
     * @example sgr-2ze17u******
     *
     * @var string
     */
    public $securityGroupRuleIds;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityGroupRuleIds' => 'SecurityGroupRuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->securityGroupRuleIds) {
            $res['SecurityGroupRuleIds'] = $this->securityGroupRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDBInstanceSecurityGroupRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['SecurityGroupRuleIds'])) {
            $model->securityGroupRuleIds = $map['SecurityGroupRuleIds'];
        }

        return $model;
    }
}
