<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $compressStorage;

    /**
     * @example pc-*************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example AsynSync
     *
     * @var string
     */
    public $dataSyncMode;

    /**
     * @example 0
     *
     * @var string
     */
    public $faultSimulateMode;

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
     * @example ON
     *
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
    protected $_name = [
        'compressStorage'      => 'CompressStorage',
        'DBClusterId'          => 'DBClusterId',
        'dataSyncMode'         => 'DataSyncMode',
        'faultSimulateMode'    => 'FaultSimulateMode',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'standbyHAMode'        => 'StandbyHAMode',
        'storageAutoScale'     => 'StorageAutoScale',
        'storageUpperBound'    => 'StorageUpperBound',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressStorage) {
            $res['CompressStorage'] = $this->compressStorage;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->dataSyncMode) {
            $res['DataSyncMode'] = $this->dataSyncMode;
        }
        if (null !== $this->faultSimulateMode) {
            $res['FaultSimulateMode'] = $this->faultSimulateMode;
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
        if (isset($map['CompressStorage'])) {
            $model->compressStorage = $map['CompressStorage'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DataSyncMode'])) {
            $model->dataSyncMode = $map['DataSyncMode'];
        }
        if (isset($map['FaultSimulateMode'])) {
            $model->faultSimulateMode = $map['FaultSimulateMode'];
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

        return $model;
    }
}
