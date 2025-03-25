<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $compressStorage;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBNodeCrashList;

    /**
     * @var string
     */
    public $dataSyncMode;

    /**
     * @var string
     */
    public $faultInjectionType;

    /**
     * @var string
     */
    public $faultSimulateMode;

    /**
     * @var string
     */
    public $imciAutoIndex;

    /**
     * @var string
     */
    public $modifyRowCompression;

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
    public $standbyHAMode;

    /**
     * @var string
     */
    public $storageAutoScale;

    /**
     * @var int
     */
    public $storageUpperBound;

    /**
     * @var string
     */
    public $tableMeta;
    protected $_name = [
        'compressStorage' => 'CompressStorage',
        'DBClusterId' => 'DBClusterId',
        'DBNodeCrashList' => 'DBNodeCrashList',
        'dataSyncMode' => 'DataSyncMode',
        'faultInjectionType' => 'FaultInjectionType',
        'faultSimulateMode' => 'FaultSimulateMode',
        'imciAutoIndex' => 'ImciAutoIndex',
        'modifyRowCompression' => 'ModifyRowCompression',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'standbyHAMode' => 'StandbyHAMode',
        'storageAutoScale' => 'StorageAutoScale',
        'storageUpperBound' => 'StorageUpperBound',
        'tableMeta' => 'TableMeta',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compressStorage) {
            $res['CompressStorage'] = $this->compressStorage;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodeCrashList) {
            $res['DBNodeCrashList'] = $this->DBNodeCrashList;
        }

        if (null !== $this->dataSyncMode) {
            $res['DataSyncMode'] = $this->dataSyncMode;
        }

        if (null !== $this->faultInjectionType) {
            $res['FaultInjectionType'] = $this->faultInjectionType;
        }

        if (null !== $this->faultSimulateMode) {
            $res['FaultSimulateMode'] = $this->faultSimulateMode;
        }

        if (null !== $this->imciAutoIndex) {
            $res['ImciAutoIndex'] = $this->imciAutoIndex;
        }

        if (null !== $this->modifyRowCompression) {
            $res['ModifyRowCompression'] = $this->modifyRowCompression;
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

        if (null !== $this->standbyHAMode) {
            $res['StandbyHAMode'] = $this->standbyHAMode;
        }

        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }

        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }

        if (null !== $this->tableMeta) {
            $res['TableMeta'] = $this->tableMeta;
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
        if (isset($map['CompressStorage'])) {
            $model->compressStorage = $map['CompressStorage'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodeCrashList'])) {
            $model->DBNodeCrashList = $map['DBNodeCrashList'];
        }

        if (isset($map['DataSyncMode'])) {
            $model->dataSyncMode = $map['DataSyncMode'];
        }

        if (isset($map['FaultInjectionType'])) {
            $model->faultInjectionType = $map['FaultInjectionType'];
        }

        if (isset($map['FaultSimulateMode'])) {
            $model->faultSimulateMode = $map['FaultSimulateMode'];
        }

        if (isset($map['ImciAutoIndex'])) {
            $model->imciAutoIndex = $map['ImciAutoIndex'];
        }

        if (isset($map['ModifyRowCompression'])) {
            $model->modifyRowCompression = $map['ModifyRowCompression'];
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

        if (isset($map['StandbyHAMode'])) {
            $model->standbyHAMode = $map['StandbyHAMode'];
        }

        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }

        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }

        if (isset($map['TableMeta'])) {
            $model->tableMeta = $map['TableMeta'];
        }

        return $model;
    }
}
