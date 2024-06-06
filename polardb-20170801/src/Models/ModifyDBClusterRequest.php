<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @description Enable storage compression function. The value of this parameter is ON.
     *
     * @example ON
     *
     * @var string
     */
    public $compressStorage;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example pc-*************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBNodeCrashList;

    /**
     * @description The method used to replicate data across zones. Valid values:
     *
     *   **AsyncSync**: the asynchronous mode.
     *   **SemiSync**: the semi-synchronous mode.
     *
     * @example AsynSync
     *
     * @var string
     */
    public $dataSyncMode;

    /**
     * @var string
     */
    public $faultInjectionType;

    /**
     * @description The fault scenario that you want to simulate for the cluster.
     *
     *   Set the value to **0**. The value 0 indicates the scenario in which the primary zone of the cluster fails.
     *
     * >
     *
     *   This parameter takes effect only when you set the `StandbyHAMode` parameter to 0.
     *
     *   If you set this parameter to 0, all compute nodes deployed in the primary zone are unavailable. In this case, the switchover degrades the cluster performance.
     *
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
     * @description Specifies whether to enable the cross-zone automatic switchover mode. Valid values:
     *
     *   **ON**: Enable the cross-zone automatic switchover mode.
     *   **OFF**: Disable the cross-zone automatic switchover mode.
     *   **0**: Enable the customer drill mode.
     *
     * @example ON
     *
     * @var string
     */
    public $standbyHAMode;

    /**
     * @description Specifies whether to enable automatic storage scaling for the cluster of Standard Edition. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $storageAutoScale;

    /**
     * @description The maximum storage capacity of the cluster of Standard Edition in automatic scaling. Unit: GB.
     *
     * >  The maximum value of this parameter is 32000.
     * @example 800
     *
     * @var int
     */
    public $storageUpperBound;
    protected $_name = [
        'compressStorage'      => 'CompressStorage',
        'DBClusterId'          => 'DBClusterId',
        'DBNodeCrashList'      => 'DBNodeCrashList',
        'dataSyncMode'         => 'DataSyncMode',
        'faultInjectionType'   => 'FaultInjectionType',
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
