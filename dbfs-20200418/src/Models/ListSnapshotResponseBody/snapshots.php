<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $sourceFsSize;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var int
     */
    public $remainTime;

    /**
     * @var string
     */
    public $lastModifiedTime;

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
    public $description;

    /**
     * @var string
     */
    public $sourceFsId;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'status'           => 'Status',
        'creationTime'     => 'CreationTime',
        'progress'         => 'Progress',
        'sourceFsSize'     => 'SourceFsSize',
        'retentionDays'    => 'RetentionDays',
        'remainTime'       => 'RemainTime',
        'lastModifiedTime' => 'LastModifiedTime',
        'snapshotType'     => 'SnapshotType',
        'snapshotName'     => 'SnapshotName',
        'description'      => 'Description',
        'sourceFsId'       => 'SourceFsId',
        'snapshotId'       => 'SnapshotId',
        'category'         => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->sourceFsSize) {
            $res['SourceFsSize'] = $this->sourceFsSize;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sourceFsId) {
            $res['SourceFsId'] = $this->sourceFsId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SourceFsSize'])) {
            $model->sourceFsSize = $map['SourceFsSize'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SourceFsId'])) {
            $model->sourceFsId = $map['SourceFsId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
