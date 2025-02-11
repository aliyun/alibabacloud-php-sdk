<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBClusterRequest\tag;

class CreateDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $backupSetId;
    /**
     * @var string
     */
    public $cloneSourceRegionId;
    /**
     * @var string
     */
    public $computeResource;
    /**
     * @var string
     */
    public $DBClusterDescription;
    /**
     * @var string
     */
    public $DBClusterNetworkType;
    /**
     * @var string
     */
    public $DBClusterVersion;
    /**
     * @var bool
     */
    public $diskEncryption;
    /**
     * @var bool
     */
    public $enableDefaultResourcePool;
    /**
     * @var string
     */
    public $kmsId;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var string
     */
    public $period;
    /**
     * @var string
     */
    public $productForm;
    /**
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
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $restoreToTime;
    /**
     * @var string
     */
    public $restoreType;
    /**
     * @var string
     */
    public $sourceDbClusterId;
    /**
     * @var string
     */
    public $storageResource;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $usedTime;
    /**
     * @var string
     */
    public $VPCId;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupSetId'               => 'BackupSetId',
        'cloneSourceRegionId'       => 'CloneSourceRegionId',
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
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        if (null !== $this->cloneSourceRegionId) {
            $res['CloneSourceRegionId'] = $this->cloneSourceRegionId;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        if (isset($map['CloneSourceRegionId'])) {
            $model->cloneSourceRegionId = $map['CloneSourceRegionId'];
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
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
