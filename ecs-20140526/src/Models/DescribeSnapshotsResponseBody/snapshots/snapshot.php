<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponseBody\snapshots;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponseBody\snapshots\snapshot\tags;
use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @description Indicates whether the snapshot can be used to create or roll back a disk. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $available;

    /**
     * @description The category of the snapshot.
     *
     * >  This parameter will be removed in the future. To ensure future compatibility, we recommend that you use `InstantAccess`.
     * @example standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the snapshot was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-08-20T14:52:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the snapshot.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the snapshot is encrypted.
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description Indicates whether the instant access feature is enabled. Valid values:
     *
     *   true: The instant access feature is enabled. By default, the instant access feature is enabled for Enterprise SSDs (ESSDs).
     *   false: The instant access feature is disabled. The snapshot is a normal snapshot for which the instant access feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description Indicates the validity period of the instant access feature. When the specified period expires, the instant access feature is automatically disabled.
     *
     * >  This parameter is deprecated. The normal snapshots of ESSDs are upgraded to support the instant access feature by default. No additional configurations are required to enable the feature and you are not charged for the feature. For more information, see [Use the instant access feature](https://help.aliyun.com/document_detail/193667.html).
     * @example 30
     *
     * @var int
     */
    public $instantAccessRetentionDays;

    /**
     * @description The ID of the KMS key used for the data disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The time when the snapshot was last changed. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-08-25T14:18:09Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description The product code of the Alibaba Cloud Marketplace image.
     *
     * @example jxsc000****
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The progress of the snapshot creation task. Unit: percent (%).
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The region ID of the snapshot.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The amount of remaining time required to create the snapshot. Unit: seconds.
     *
     * @example 38
     *
     * @var int
     */
    public $remainTime;

    /**
     * @description The ID of the resource group to which the snapshot belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The retention period of the automatic snapshot. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotLinkId;

    /**
     * @description The name of the snapshot. This parameter is returned only if a snapshot name was specified when the snapshot was created.
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The serial number of the snapshot.
     *
     * @example 64472-116742336-61976****
     *
     * @var string
     */
    public $snapshotSN;

    /**
     * @description The type of the snapshot. Valid values:
     *
     *   auto or timer: automatic snapshot
     *   user: manual snapshot
     *   all: all snapshot types
     *
     * @example all
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The ID of the source disk. This parameter is retained even after the source disk is released.
     *
     * @example d-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description The capacity of the source disk. Unit: GiB.
     *
     * @example 40
     *
     * @var string
     */
    public $sourceDiskSize;

    /**
     * @description The type of the source disk. Valid values:
     *
     *   system
     *   data
     *
     * @example system
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The region ID of the source snapshot.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description The ID of the source snapshot.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @description The category of the source disk.
     *
     * >  This parameter will be removed in the future. To ensure future compatibility, we recommend that you use other parameters.
     * @example disk
     *
     * @var string
     */
    public $sourceStorageType;

    /**
     * @description The state of the snapshot. Valid values:
     *
     *   progressing
     *   accomplished
     *   failed
     *
     * @example accomplished
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the snapshot.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether the snapshot has been used to create images or disks. Valid values:
     *
     *   image
     *   disk
     *   image_disk
     *   none
     *
     * @example image
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'available'                  => 'Available',
        'category'                   => 'Category',
        'creationTime'               => 'CreationTime',
        'description'                => 'Description',
        'encrypted'                  => 'Encrypted',
        'instantAccess'              => 'InstantAccess',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'KMSKeyId'                   => 'KMSKeyId',
        'lastModifiedTime'           => 'LastModifiedTime',
        'productCode'                => 'ProductCode',
        'progress'                   => 'Progress',
        'regionId'                   => 'RegionId',
        'remainTime'                 => 'RemainTime',
        'resourceGroupId'            => 'ResourceGroupId',
        'retentionDays'              => 'RetentionDays',
        'snapshotId'                 => 'SnapshotId',
        'snapshotLinkId'             => 'SnapshotLinkId',
        'snapshotName'               => 'SnapshotName',
        'snapshotSN'                 => 'SnapshotSN',
        'snapshotType'               => 'SnapshotType',
        'sourceDiskId'               => 'SourceDiskId',
        'sourceDiskSize'             => 'SourceDiskSize',
        'sourceDiskType'             => 'SourceDiskType',
        'sourceRegionId'             => 'SourceRegionId',
        'sourceSnapshotId'           => 'SourceSnapshotId',
        'sourceStorageType'          => 'SourceStorageType',
        'status'                     => 'Status',
        'tags'                       => 'Tags',
        'usage'                      => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
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
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->instantAccessRetentionDays) {
            $res['InstantAccessRetentionDays'] = $this->instantAccessRetentionDays;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotLinkId) {
            $res['SnapshotLinkId'] = $this->snapshotLinkId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotSN) {
            $res['SnapshotSN'] = $this->snapshotSN;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }
        if (null !== $this->sourceSnapshotId) {
            $res['SourceSnapshotId'] = $this->sourceSnapshotId;
        }
        if (null !== $this->sourceStorageType) {
            $res['SourceStorageType'] = $this->sourceStorageType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
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
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['InstantAccessRetentionDays'])) {
            $model->instantAccessRetentionDays = $map['InstantAccessRetentionDays'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotLinkId'])) {
            $model->snapshotLinkId = $map['SnapshotLinkId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotSN'])) {
            $model->snapshotSN = $map['SnapshotSN'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }
        if (isset($map['SourceSnapshotId'])) {
            $model->sourceSnapshotId = $map['SourceSnapshotId'];
        }
        if (isset($map['SourceStorageType'])) {
            $model->sourceStorageType = $map['SourceStorageType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
