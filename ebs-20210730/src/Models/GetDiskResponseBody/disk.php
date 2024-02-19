<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk\accessAuthorization;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk\attachments;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk\tags;
use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @description The access authorization information of the disk.
     *
     * @var accessAuthorization[]
     */
    public $accessAuthorization;

    /**
     * @description The time when the disk was attached.
     *
     * @example 2021-11-18T19:30:16+08:00
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @description The attachment information of the disk.
     *
     * @var attachments[]
     */
    public $attachments;

    /**
     * @description Specifies whether to enable the performance burst feature for the disk. Valid values:
     *
     * true: enable the performance burst feature.
     * false: disable the performance burst feature.
     *
     * @example true
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The category of the disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the disk was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. For more information, see [ISO 8601](~~25696~~).
     *
     * @example 2021-11-18T19:30:16+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the disk.
     *
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the disk was detached.
     *
     * @example 2021-11-18T19:30:16+08:00
     *
     * @var string
     */
    public $detachedTime;

    /**
     * @description The maximum number of read and write operations per second. Unit: operations/s.
     *
     * @example 4cd************
     *
     * @var string
     */
    public $deviceNguid;

    /**
     * @description The ID of the disk.
     *
     * @example d-bp19c*********
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the disk.
     *
     * @example diskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to encrypt the disk. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description IOPS。
     *
     * @example 46800
     *
     * @var int
     */
    public $iops;

    /**
     * @description The maximum number of read operations per second. Unit: operations/s.
     *
     * @example 500
     *
     * @var int
     */
    public $iopsRead;

    /**
     * @description The maximum number of write operations per second. Unit: operations/s.
     *
     * @example 500
     *
     * @var int
     */
    public $iopsWrite;

    /**
     * @description The ID of the KMS key.
     *
     * @example key-hz**************
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The time when the disk was modfied.
     *
     * @example 2021-11-18T19:30:16+08:00
     *
     * @var string
     */
    public $modifyAt;

    /**
     * @description The performance level of the ESSD. Valid values:
     *
     * PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     * PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     * PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     * PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}
     *
     * >  This parameter is available only if the DiskCategory parameter is set to cloud_auto. For more information, see [ESSD AutoPL disks](~~368372~~) and [Modify the performance configurations of an ESSD AutoPL disk](~~413275~~).
     * @example 5000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The region ID of the disk. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the disk belongs.
     *
     * @example rg-aek*************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The size of the disk. Unit: GB.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The states of disk. Valid values:
     *
     * In_use
     * Available
     * Attaching
     * Detaching
     * Creating
     * ReIniting
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The details of the tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The throughput of the disk.
     *
     * Unit: MB/s.
     * @example 600
     *
     * @var int
     */
    public $throughput;

    /**
     * @description The ID of the zone where the disk resides.
     *
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessAuthorization' => 'AccessAuthorization',
        'attachedTime'        => 'AttachedTime',
        'attachments'         => 'Attachments',
        'burstingEnabled'     => 'BurstingEnabled',
        'category'            => 'Category',
        'creationTime'        => 'CreationTime',
        'description'         => 'Description',
        'detachedTime'        => 'DetachedTime',
        'deviceNguid'         => 'DeviceNguid',
        'diskId'              => 'DiskId',
        'diskName'            => 'DiskName',
        'encrypted'           => 'Encrypted',
        'iops'                => 'Iops',
        'iopsRead'            => 'IopsRead',
        'iopsWrite'           => 'IopsWrite',
        'kmsKeyId'            => 'KmsKeyId',
        'modifyAt'            => 'ModifyAt',
        'performanceLevel'    => 'PerformanceLevel',
        'provisionedIops'     => 'ProvisionedIops',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'size'                => 'Size',
        'status'              => 'Status',
        'tags'                => 'Tags',
        'throughput'          => 'Throughput',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessAuthorization) {
            $res['AccessAuthorization'] = [];
            if (null !== $this->accessAuthorization && \is_array($this->accessAuthorization)) {
                $n = 0;
                foreach ($this->accessAuthorization as $item) {
                    $res['AccessAuthorization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }
        if (null !== $this->attachments) {
            $res['Attachments'] = [];
            if (null !== $this->attachments && \is_array($this->attachments)) {
                $n = 0;
                foreach ($this->attachments as $item) {
                    $res['Attachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detachedTime) {
            $res['DetachedTime'] = $this->detachedTime;
        }
        if (null !== $this->deviceNguid) {
            $res['DeviceNguid'] = $this->deviceNguid;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
        }
        if (null !== $this->iopsRead) {
            $res['IopsRead'] = $this->iopsRead;
        }
        if (null !== $this->iopsWrite) {
            $res['IopsWrite'] = $this->iopsWrite;
        }
        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }
        if (null !== $this->modifyAt) {
            $res['ModifyAt'] = $this->modifyAt;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessAuthorization'])) {
            if (!empty($map['AccessAuthorization'])) {
                $model->accessAuthorization = [];
                $n                          = 0;
                foreach ($map['AccessAuthorization'] as $item) {
                    $model->accessAuthorization[$n++] = null !== $item ? accessAuthorization::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }
        if (isset($map['Attachments'])) {
            if (!empty($map['Attachments'])) {
                $model->attachments = [];
                $n                  = 0;
                foreach ($map['Attachments'] as $item) {
                    $model->attachments[$n++] = null !== $item ? attachments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DetachedTime'])) {
            $model->detachedTime = $map['DetachedTime'];
        }
        if (isset($map['DeviceNguid'])) {
            $model->deviceNguid = $map['DeviceNguid'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
        }
        if (isset($map['IopsRead'])) {
            $model->iopsRead = $map['IopsRead'];
        }
        if (isset($map['IopsWrite'])) {
            $model->iopsWrite = $map['IopsWrite'];
        }
        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }
        if (isset($map['ModifyAt'])) {
            $model->modifyAt = $map['ModifyAt'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
