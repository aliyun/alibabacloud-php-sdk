<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $computeResource;

    /**
     * @var string
     */
    public $DBClusterCategory;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $DBNodeGroupCount;

    /**
     * @var string
     */
    public $DBNodeStorage;

    /**
     * @var int
     */
    public $elasticIOResource;

    /**
     * @var string
     */
    public $executorCount;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $modifyType;

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
     * @var string
     */
    public $storageResource;
    protected $_name = [
        'computeResource'      => 'ComputeResource',
        'DBClusterCategory'    => 'DBClusterCategory',
        'DBClusterId'          => 'DBClusterId',
        'DBNodeClass'          => 'DBNodeClass',
        'DBNodeGroupCount'     => 'DBNodeGroupCount',
        'DBNodeStorage'        => 'DBNodeStorage',
        'elasticIOResource'    => 'ElasticIOResource',
        'executorCount'        => 'ExecutorCount',
        'mode'                 => 'Mode',
        'modifyType'           => 'ModifyType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'storageResource'      => 'StorageResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->DBClusterCategory) {
            $res['DBClusterCategory'] = $this->DBClusterCategory;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeGroupCount) {
            $res['DBNodeGroupCount'] = $this->DBNodeGroupCount;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->elasticIOResource) {
            $res['ElasticIOResource'] = $this->elasticIOResource;
        }
        if (null !== $this->executorCount) {
            $res['ExecutorCount'] = $this->executorCount;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
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
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['DBClusterCategory'])) {
            $model->DBClusterCategory = $map['DBClusterCategory'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeGroupCount'])) {
            $model->DBNodeGroupCount = $map['DBNodeGroupCount'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['ElasticIOResource'])) {
            $model->elasticIOResource = $map['ElasticIOResource'];
        }
        if (isset($map['ExecutorCount'])) {
            $model->executorCount = $map['ExecutorCount'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
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
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        return $model;
    }
}
