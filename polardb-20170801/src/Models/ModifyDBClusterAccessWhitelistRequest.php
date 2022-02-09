<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterAccessWhitelistRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $modifyMode;

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
    public $securityGroupIds;

    /**
     * @var string
     */
    public $securityIps;

    /**
     * @var string
     */
    public $whiteListType;
    protected $_name = [
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'DBClusterIPArrayName'      => 'DBClusterIPArrayName',
        'DBClusterId'               => 'DBClusterId',
        'modifyMode'                => 'ModifyMode',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'securityGroupIds'          => 'SecurityGroupIds',
        'securityIps'               => 'SecurityIps',
        'whiteListType'             => 'WhiteListType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterIPArrayAttribute) {
            $res['DBClusterIPArrayAttribute'] = $this->DBClusterIPArrayAttribute;
        }
        if (null !== $this->DBClusterIPArrayName) {
            $res['DBClusterIPArrayName'] = $this->DBClusterIPArrayName;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
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
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }
        if (null !== $this->whiteListType) {
            $res['WhiteListType'] = $this->whiteListType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterAccessWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterIPArrayAttribute'])) {
            $model->DBClusterIPArrayAttribute = $map['DBClusterIPArrayAttribute'];
        }
        if (isset($map['DBClusterIPArrayName'])) {
            $model->DBClusterIPArrayName = $map['DBClusterIPArrayName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
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
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = $map['SecurityGroupIds'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }
        if (isset($map['WhiteListType'])) {
            $model->whiteListType = $map['WhiteListType'];
        }

        return $model;
    }
}
