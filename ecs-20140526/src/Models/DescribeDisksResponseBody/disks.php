<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\mountInstances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\tags;
use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var operationLocks[]
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $bdfId;

    /**
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @var string
     */
    public $storageSetId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var mountInstances[]
     */
    public $mountInstances;

    /**
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var int
     */
    public $IOPSRead;

    /**
     * @var int
     */
    public $mountInstanceNum;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var bool
     */
    public $portable;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $detachedTime;

    /**
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var bool
     */
    public $enableAutomatedSnapshotPolicy;

    /**
     * @var int
     */
    public $IOPSWrite;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $IOPS;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $diskChargeType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $attachedTime;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'serialNumber'                  => 'SerialNumber',
        'creationTime'                  => 'CreationTime',
        'status'                        => 'Status',
        'type'                          => 'Type',
        'performanceLevel'              => 'PerformanceLevel',
        'operationLocks'                => 'OperationLocks',
        'bdfId'                         => 'BdfId',
        'enableAutoSnapshot'            => 'EnableAutoSnapshot',
        'storageSetId'                  => 'StorageSetId',
        'tags'                          => 'Tags',
        'storageSetPartitionNumber'     => 'StorageSetPartitionNumber',
        'diskId'                        => 'DiskId',
        'mountInstances'                => 'MountInstances',
        'deleteAutoSnapshot'            => 'DeleteAutoSnapshot',
        'encrypted'                     => 'Encrypted',
        'IOPSRead'                      => 'IOPSRead',
        'mountInstanceNum'              => 'MountInstanceNum',
        'description'                   => 'Description',
        'device'                        => 'Device',
        'diskName'                      => 'DiskName',
        'portable'                      => 'Portable',
        'imageId'                       => 'ImageId',
        'deleteWithInstance'            => 'DeleteWithInstance',
        'KMSKeyId'                      => 'KMSKeyId',
        'detachedTime'                  => 'DetachedTime',
        'sourceSnapshotId'              => 'SourceSnapshotId',
        'autoSnapshotPolicyId'          => 'AutoSnapshotPolicyId',
        'enableAutomatedSnapshotPolicy' => 'EnableAutomatedSnapshotPolicy',
        'IOPSWrite'                     => 'IOPSWrite',
        'instanceId'                    => 'InstanceId',
        'IOPS'                          => 'IOPS',
        'regionId'                      => 'RegionId',
        'expiredTime'                   => 'ExpiredTime',
        'size'                          => 'Size',
        'resourceGroupId'               => 'ResourceGroupId',
        'diskChargeType'                => 'DiskChargeType',
        'zoneId'                        => 'ZoneId',
        'attachedTime'                  => 'AttachedTime',
        'category'                      => 'Category',
        'productCode'                   => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = [];
            if (null !== $this->operationLocks && \is_array($this->operationLocks)) {
                $n = 0;
                foreach ($this->operationLocks as $item) {
                    $res['OperationLocks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bdfId) {
            $res['BdfId'] = $this->bdfId;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->mountInstances) {
            $res['MountInstances'] = [];
            if (null !== $this->mountInstances && \is_array($this->mountInstances)) {
                $n = 0;
                foreach ($this->mountInstances as $item) {
                    $res['MountInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->mountInstanceNum) {
            $res['MountInstanceNum'] = $this->mountInstanceNum;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->detachedTime) {
            $res['DetachedTime'] = $this->detachedTime;
        }
        if (null !== $this->sourceSnapshotId) {
            $res['SourceSnapshotId'] = $this->sourceSnapshotId;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->enableAutomatedSnapshotPolicy) {
            $res['EnableAutomatedSnapshotPolicy'] = $this->enableAutomatedSnapshotPolicy;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->IOPS) {
            $res['IOPS'] = $this->IOPS;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['OperationLocks'])) {
            if (!empty($map['OperationLocks'])) {
                $model->operationLocks = [];
                $n                     = 0;
                foreach ($map['OperationLocks'] as $item) {
                    $model->operationLocks[$n++] = null !== $item ? operationLocks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BdfId'])) {
            $model->bdfId = $map['BdfId'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['MountInstances'])) {
            if (!empty($map['MountInstances'])) {
                $model->mountInstances = [];
                $n                     = 0;
                foreach ($map['MountInstances'] as $item) {
                    $model->mountInstances[$n++] = null !== $item ? mountInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['MountInstanceNum'])) {
            $model->mountInstanceNum = $map['MountInstanceNum'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['DetachedTime'])) {
            $model->detachedTime = $map['DetachedTime'];
        }
        if (isset($map['SourceSnapshotId'])) {
            $model->sourceSnapshotId = $map['SourceSnapshotId'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['EnableAutomatedSnapshotPolicy'])) {
            $model->enableAutomatedSnapshotPolicy = $map['EnableAutomatedSnapshotPolicy'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IOPS'])) {
            $model->IOPS = $map['IOPS'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
