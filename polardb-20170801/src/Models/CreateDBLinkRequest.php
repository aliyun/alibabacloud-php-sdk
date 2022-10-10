<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBLinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBLinkName;

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
    public $sourceDBName;

    /**
     * @var string
     */
    public $targetDBAccount;

    /**
     * @var string
     */
    public $targetDBInstanceName;

    /**
     * @var string
     */
    public $targetDBName;

    /**
     * @var string
     */
    public $targetDBPasswd;

    /**
     * @var string
     */
    public $targetIp;

    /**
     * @var string
     */
    public $targetPort;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBClusterId'          => 'DBClusterId',
        'DBLinkName'           => 'DBLinkName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceDBName'         => 'SourceDBName',
        'targetDBAccount'      => 'TargetDBAccount',
        'targetDBInstanceName' => 'TargetDBInstanceName',
        'targetDBName'         => 'TargetDBName',
        'targetDBPasswd'       => 'TargetDBPasswd',
        'targetIp'             => 'TargetIp',
        'targetPort'           => 'TargetPort',
        'vpcId'                => 'VpcId',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBLinkName) {
            $res['DBLinkName'] = $this->DBLinkName;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceDBName) {
            $res['SourceDBName'] = $this->sourceDBName;
        }
        if (null !== $this->targetDBAccount) {
            $res['TargetDBAccount'] = $this->targetDBAccount;
        }
        if (null !== $this->targetDBInstanceName) {
            $res['TargetDBInstanceName'] = $this->targetDBInstanceName;
        }
        if (null !== $this->targetDBName) {
            $res['TargetDBName'] = $this->targetDBName;
        }
        if (null !== $this->targetDBPasswd) {
            $res['TargetDBPasswd'] = $this->targetDBPasswd;
        }
        if (null !== $this->targetIp) {
            $res['TargetIp'] = $this->targetIp;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBLinkName'])) {
            $model->DBLinkName = $map['DBLinkName'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceDBName'])) {
            $model->sourceDBName = $map['SourceDBName'];
        }
        if (isset($map['TargetDBAccount'])) {
            $model->targetDBAccount = $map['TargetDBAccount'];
        }
        if (isset($map['TargetDBInstanceName'])) {
            $model->targetDBInstanceName = $map['TargetDBInstanceName'];
        }
        if (isset($map['TargetDBName'])) {
            $model->targetDBName = $map['TargetDBName'];
        }
        if (isset($map['TargetDBPasswd'])) {
            $model->targetDBPasswd = $map['TargetDBPasswd'];
        }
        if (isset($map['TargetIp'])) {
            $model->targetIp = $map['TargetIp'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
