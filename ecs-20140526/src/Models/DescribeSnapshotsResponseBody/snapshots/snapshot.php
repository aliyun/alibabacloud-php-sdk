<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponseBody\snapshots;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponseBody\snapshots\snapshot\tags;

class snapshot extends Model
{
    /**
     * @var bool
     */
    public $available;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var bool
     */
    public $instantAccess;

    /**
     * @var int
     */
    public $instantAccessRetentionDays;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $remainTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotLinkId;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $snapshotSN;

    /**
     * @var string
     */
    public $snapshotType;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $sourceDiskSize;

    /**
     * @var string
     */
    public $sourceDiskType;

    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @var string
     */
    public $sourceStorageType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'available' => 'Available',
        'category' => 'Category',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'encrypted' => 'Encrypted',
        'instantAccess' => 'InstantAccess',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'KMSKeyId' => 'KMSKeyId',
        'lastModifiedTime' => 'LastModifiedTime',
        'productCode' => 'ProductCode',
        'progress' => 'Progress',
        'regionId' => 'RegionId',
        'remainTime' => 'RemainTime',
        'resourceGroupId' => 'ResourceGroupId',
        'retentionDays' => 'RetentionDays',
        'snapshotId' => 'SnapshotId',
        'snapshotLinkId' => 'SnapshotLinkId',
        'snapshotName' => 'SnapshotName',
        'snapshotSN' => 'SnapshotSN',
        'snapshotType' => 'SnapshotType',
        'sourceDiskId' => 'SourceDiskId',
        'sourceDiskSize' => 'SourceDiskSize',
        'sourceDiskType' => 'SourceDiskType',
        'sourceRegionId' => 'SourceRegionId',
        'sourceSnapshotId' => 'SourceSnapshotId',
        'sourceStorageType' => 'SourceStorageType',
        'status' => 'Status',
        'tags' => 'Tags',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
