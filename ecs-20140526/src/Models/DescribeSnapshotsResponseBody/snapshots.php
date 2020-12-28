<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponseBody\snapshots\tags;
use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $instantAccess;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $sourceDiskSize;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $description;

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
    public $progress;

    /**
     * @var int
     */
    public $remainTime;

    /**
     * @var string
     */
    public $sourceDiskType;

    /**
     * @var string
     */
    public $sourceStorageType;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $snapshotType;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $snapshotSN;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'creationTime'               => 'CreationTime',
        'status'                     => 'Status',
        'instantAccess'              => 'InstantAccess',
        'retentionDays'              => 'RetentionDays',
        'sourceDiskSize'             => 'SourceDiskSize',
        'tags'                       => 'Tags',
        'lastModifiedTime'           => 'LastModifiedTime',
        'encrypted'                  => 'Encrypted',
        'sourceDiskId'               => 'SourceDiskId',
        'description'                => 'Description',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'KMSKeyId'                   => 'KMSKeyId',
        'progress'                   => 'Progress',
        'remainTime'                 => 'RemainTime',
        'sourceDiskType'             => 'SourceDiskType',
        'sourceStorageType'          => 'SourceStorageType',
        'usage'                      => 'Usage',
        'snapshotType'               => 'SnapshotType',
        'snapshotName'               => 'SnapshotName',
        'snapshotId'                 => 'SnapshotId',
        'resourceGroupId'            => 'ResourceGroupId',
        'category'                   => 'Category',
        'snapshotSN'                 => 'SnapshotSN',
        'productCode'                => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
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
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instantAccessRetentionDays) {
            $res['InstantAccessRetentionDays'] = $this->instantAccessRetentionDays;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->sourceStorageType) {
            $res['SourceStorageType'] = $this->sourceStorageType;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->snapshotSN) {
            $res['SnapshotSN'] = $this->snapshotSN;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
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
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstantAccessRetentionDays'])) {
            $model->instantAccessRetentionDays = $map['InstantAccessRetentionDays'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['SourceStorageType'])) {
            $model->sourceStorageType = $map['SourceStorageType'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['SnapshotSN'])) {
            $model->snapshotSN = $map['SnapshotSN'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
