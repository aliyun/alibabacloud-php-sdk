<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBClusterRequest extends Model
{
    /**
     * @description The ID of the backup set that you want to use to restore data.
     *
     * >  You can call the [DescribeBackups](https://help.aliyun.com/document_detail/612318.html) operation to query the backup sets of the cluster.
     * @example 1880808684
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The amount of reserved computing resources. Unit: ACUs. Valid values: 0 to 4096. The value must be in increments of 16 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * >  This parameter must be specified with a unit.
     * @example 16ACU
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The description of the cluster.
     *
     *   The description cannot start with `http://` or `https://`.
     *   The description must be 2 to 256 characters in length
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The network type of the cluster. Only **VPC** is supported.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The version of the cluster. Set the value to **5.0**.
     *
     * This parameter is required.
     * @example 5.0
     *
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @var bool
     */
    public $diskEncryption;

    /**
     * @description Specifies whether to allocate all reserved computing resources to the user_default resource group. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableDefaultResourcePool;

    /**
     * @var string
     */
    public $kmsId;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * This parameter is required.
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription type of the subscription cluster. Valid values:
     *
     *   **Year**: subscription on a yearly basis.
     *   **Month**: subscription on a monthly basis.
     *
     * >  This parameter must be specified when PayType is set to Prepaid.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @example LegacyForm
     *
     * @var string
     */
    public $productForm;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $reservedNodeCount;

    /**
     * @var string
     */
    public $reservedNodeSize;

    /**
     * @description The resource group ID.
     *
     * @example rg-4690g37929****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The point in time to which you want to restore data from the backup set.
     *
     * @example 2023-09-20T03:13:56Z
     *
     * @var string
     */
    public $restoreToTime;

    /**
     * @description The method that you want to use to restore data. Valid values:
     *
     *   **backup**: restores data from a backup set. You must also specify the **BackupSetId** and **SourceDBClusterId** parameters.
     *   **timepoint**: restores data to a point in time. You must also specify the **RestoreToTime** and **SourceDBClusterId** parameters.
     *
     * @example backup
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The ID of the source AnalyticDB for MySQL Data Warehouse Edition cluster. If you want to restore a Data Lakehouse Edition cluster from a Data Warehouse Edition cluster, you must specify this parameter.
     *
     * @example amv-bp1r053byu48p****
     *
     * @var string
     */
    public $sourceDbClusterId;

    /**
     * @description The amount of reserved storage resources. Unit: AnalyticDB compute units (ACUs). Valid values: 0 to 2064. The value must be in increments of 24 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * >  This parameter must be specified with a unit.
     * @example 24ACU
     *
     * @var string
     */
    public $storageResource;

    /**
     * @description The tags to add to the cluster.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The subscription duration of the subscription cluster.
     *
     *   Valid values when **Period** is set to Year: 1 to 3 (integer).
     *   Valid values when **Period** is set to Month: 1 to 9 (integer).
     *
     * >  This parameter must be specified when PayType is set to **Prepaid**.
     * @example 3
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The virtual private cloud (VPC) ID of the cluster.
     *
     * This parameter is required.
     * @example vpc-bp1at5ze0t5u3xtqn****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * This parameter is required.
     * @example vsw-bp1aadw9k19x6cis9****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID.
     *
     * This parameter is required.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupSetId'               => 'BackupSetId',
        'computeResource'           => 'ComputeResource',
        'DBClusterDescription'      => 'DBClusterDescription',
        'DBClusterNetworkType'      => 'DBClusterNetworkType',
        'DBClusterVersion'          => 'DBClusterVersion',
        'diskEncryption'            => 'DiskEncryption',
        'enableDefaultResourcePool' => 'EnableDefaultResourcePool',
        'kmsId'                     => 'KmsId',
        'payType'                   => 'PayType',
        'period'                    => 'Period',
        'productForm'               => 'ProductForm',
        'regionId'                  => 'RegionId',
        'reservedNodeCount'         => 'ReservedNodeCount',
        'reservedNodeSize'          => 'ReservedNodeSize',
        'resourceGroupId'           => 'ResourceGroupId',
        'restoreToTime'             => 'RestoreToTime',
        'restoreType'               => 'RestoreType',
        'sourceDbClusterId'         => 'SourceDbClusterId',
        'storageResource'           => 'StorageResource',
        'tag'                       => 'Tag',
        'usedTime'                  => 'UsedTime',
        'VPCId'                     => 'VPCId',
        'vSwitchId'                 => 'VSwitchId',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterVersion) {
            $res['DBClusterVersion'] = $this->DBClusterVersion;
        }
        if (null !== $this->diskEncryption) {
            $res['DiskEncryption'] = $this->diskEncryption;
        }
        if (null !== $this->enableDefaultResourcePool) {
            $res['EnableDefaultResourcePool'] = $this->enableDefaultResourcePool;
        }
        if (null !== $this->kmsId) {
            $res['KmsId'] = $this->kmsId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->productForm) {
            $res['ProductForm'] = $this->productForm;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedNodeCount) {
            $res['ReservedNodeCount'] = $this->reservedNodeCount;
        }
        if (null !== $this->reservedNodeSize) {
            $res['ReservedNodeSize'] = $this->reservedNodeSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->restoreToTime) {
            $res['RestoreToTime'] = $this->restoreToTime;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->sourceDbClusterId) {
            $res['SourceDbClusterId'] = $this->sourceDbClusterId;
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterVersion'])) {
            $model->DBClusterVersion = $map['DBClusterVersion'];
        }
        if (isset($map['DiskEncryption'])) {
            $model->diskEncryption = $map['DiskEncryption'];
        }
        if (isset($map['EnableDefaultResourcePool'])) {
            $model->enableDefaultResourcePool = $map['EnableDefaultResourcePool'];
        }
        if (isset($map['KmsId'])) {
            $model->kmsId = $map['KmsId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ProductForm'])) {
            $model->productForm = $map['ProductForm'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedNodeCount'])) {
            $model->reservedNodeCount = $map['ReservedNodeCount'];
        }
        if (isset($map['ReservedNodeSize'])) {
            $model->reservedNodeSize = $map['ReservedNodeSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RestoreToTime'])) {
            $model->restoreToTime = $map['RestoreToTime'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['SourceDbClusterId'])) {
            $model->sourceDbClusterId = $map['SourceDbClusterId'];
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
