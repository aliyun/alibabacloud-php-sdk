<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @description Specifies whether to enable storage compression. Set the value to **ON**.
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
     * @description The list of nodes for the drill.
     *
     * >  You can specify only one node for a node-level disaster recovery drill. For a primary zone-level disaster recovery drill, you can either choose not to specify this parameter or specify all nodes.
     * @example pi-rwxxx
     *
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
     * @description The fault injection method. Valid values:
     *
     *   CrashSQLInjection: `Crash SQL`-based fault injection.
     *
     * @example 0
     *
     * @var string
     */
    public $faultInjectionType;

    /**
     * @description The level of the disaster recovery drill. Valid values:
     *
     *   `0` or `FaultInjection`: The primary zone level.
     *   `1`: The node level.
     *
     * >
     *
     *   In **primary zone-level disaster recovery drill** scenarios, all compute nodes in the primary zone are unavailable. Data loss occurs during failovers in the scenarios.
     *
     *   In **node-level disaster recovery drill** scenarios, you can specify only one compute node for the disaster recovery drill. You can use the `DBNodeCrashList` parameter to specify the name of the compute node that you want to use for the drill.
     *
     * @example 0
     *
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
     * @description Specifies whether to enable cross-zone automatic switchover. Valid values:
     *
     *   **ON**: enables cross-zone automatic switchover.
     *   **OFF**: disables cross-zone automatic switchover.
     *
     * @example ON
     *
     * @var string
     */
    public $standbyHAMode;

    /**
     * @description Specifies whether to enable automatic storage scaling. This parameter is available only for Standard Edition clusters. Valid values:
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
        'imciAutoIndex'        => 'ImciAutoIndex',
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
        if (null !== $this->imciAutoIndex) {
            $res['ImciAutoIndex'] = $this->imciAutoIndex;
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
        if (isset($map['ImciAutoIndex'])) {
            $model->imciAutoIndex = $map['ImciAutoIndex'];
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
