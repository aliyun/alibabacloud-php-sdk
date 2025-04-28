<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class DescribeRdsAnalysisResourceQuotasRequest extends Model
{
    /**
     * @var string
     */
    public $clusterCategory;

    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $nodeClass;

    /**
     * @var int
     */
    public $nodeCount;

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
    public $rdsInstanceId;

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
    public $storageType;
    protected $_name = [
        'clusterCategory' => 'ClusterCategory',
        'clusterMode' => 'ClusterMode',
        'nodeClass' => 'NodeClass',
        'nodeCount' => 'NodeCount',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'rdsInstanceId' => 'RdsInstanceId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }

        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }

        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
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

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }

        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }

        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
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

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
