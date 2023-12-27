<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @description The computing resources of the cluster. You can call the [DescribeAvailableResource](~~190632~~) operation to query the computing resources that are available within a region.
     *
     * > This parameter must be specified when Mode is set to Flexible.
     * @example 32Core128GBNEW
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The edition of the cluster. Valid values:
     *
     *   **Cluster**: reserved mode for Cluster Edition.
     *   **MixedStorage**: elastic mode for Cluster Edition.
     *
     * > If you set DBClusterCategory to Cluster, you must set Mode to Reserver. If you set DBClusterCategory to MixedStorage, you must set Mode to Flexible. Otherwise, you fail to change the specifications of the cluster.
     * @example MixedStorage
     *
     * @var string
     */
    public $DBClusterCategory;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @example am-bp1u8c0mgfg58****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The node specifications of the cluster. Valid values:
     *
     *   **C8**
     *   **C32**
     *
     * > This parameter must be specified when Mode is set to Reserver.
     * @example C32
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The number of node groups. Valid values: 1 to 200.
     *
     * > This parameter must be specified when Mode is set to Reserver.
     * @example 2
     *
     * @var string
     */
    public $DBNodeGroupCount;

    /**
     * @description The storage capacity per node. Unit: GB.
     *
     *   Valid values when DBClusterClass is set to C8: 100 to 2000.
     *   Valid values when DBClusterClass is set to C32: 100 to 8000.
     *
     * >
     *
     *   This parameter must be specified when Mode is set to Reserver.
     *
     *   The storage capacity less than 1,000 GB increases in 100 GB increments. The storage capacity greater than 1,000 GB increases in 1,000 GB increments.
     *
     * @example 200
     *
     * @var string
     */
    public $DBNodeStorage;

    /**
     * @description The enhanced SSD (ESSD) performance level of the cluster. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * @example PL1
     *
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @description The number of EIUs. The number of EIUs that you can purchase varies based on the single-node EIU specifications.
     *
     *   If the single-node EIU specifications are 8 cores and 64 GB, you can purchase up to 32 EIUs.
     *   If the single-node EIU specifications are 12 cores and 96 GB, you can purchase up to 16 EIUs.
     *
     * @example 2
     *
     * @var int
     */
    public $elasticIOResource;

    /**
     * @description The single-node specifications of an elastic I/O unit (EIU). Valid values:
     *
     *   **8Core64GB**: If you set the parameter to **8Core64GB**, the specifications of an EIU are 24 cores and 192 GB memory.
     *   **12Core96GB**: If you set the parameter to **12Core96GB**, the specifications of an EIU are 36 cores and 288 GB memory.
     *
     * >  This parameter takes effect only when your cluster meets the following requirements:
     *
     *   The cluster is in elastic mode.
     *
     *   If the cluster resides in the China (Guangzhou), China (Shenzhen), China (Hangzhou), China (Shanghai), China (Qingdao), China (Beijing), or China (Zhangjiakou) region, the cluster has 16 cores and 64 GB memory or higher specifications.
     *
     *   If the cluster resides in another region, the cluster has 32 cores and 128 GB memory or higher specifications.
     *
     * @example 8Core64GB
     *
     * @var string
     */
    public $elasticIOResourceSize;

    /**
     * @description N/A
     *
     * @example None
     *
     * @var string
     */
    public $executorCount;

    /**
     * @description The mode of the cluster. Valid values:
     *
     *   **Reserver**: the reserved mode.
     *   **Flexible**: the elastic mode.
     *
     * @example Flexible
     *
     * @var string
     */
    public $mode;

    /**
     * @description The change type. Valid values:
     *
     *   **Upgrade**
     *   **Downgrade**
     *
     * @example Upgrade
     *
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
     * @description The region ID of the cluster. You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
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
     * @description N/A
     *
     * @example None
     *
     * @var string
     */
    public $storageResource;
    protected $_name = [
        'computeResource'       => 'ComputeResource',
        'DBClusterCategory'     => 'DBClusterCategory',
        'DBClusterId'           => 'DBClusterId',
        'DBNodeClass'           => 'DBNodeClass',
        'DBNodeGroupCount'      => 'DBNodeGroupCount',
        'DBNodeStorage'         => 'DBNodeStorage',
        'diskPerformanceLevel'  => 'DiskPerformanceLevel',
        'elasticIOResource'     => 'ElasticIOResource',
        'elasticIOResourceSize' => 'ElasticIOResourceSize',
        'executorCount'         => 'ExecutorCount',
        'mode'                  => 'Mode',
        'modifyType'            => 'ModifyType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'storageResource'       => 'StorageResource',
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
        if (null !== $this->diskPerformanceLevel) {
            $res['DiskPerformanceLevel'] = $this->diskPerformanceLevel;
        }
        if (null !== $this->elasticIOResource) {
            $res['ElasticIOResource'] = $this->elasticIOResource;
        }
        if (null !== $this->elasticIOResourceSize) {
            $res['ElasticIOResourceSize'] = $this->elasticIOResourceSize;
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
        if (isset($map['DiskPerformanceLevel'])) {
            $model->diskPerformanceLevel = $map['DiskPerformanceLevel'];
        }
        if (isset($map['ElasticIOResource'])) {
            $model->elasticIOResource = $map['ElasticIOResource'];
        }
        if (isset($map['ElasticIOResourceSize'])) {
            $model->elasticIOResourceSize = $map['ElasticIOResourceSize'];
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
