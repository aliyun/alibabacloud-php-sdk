<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @example standard
     *
     * @var string
     */
    public $category;

    /**
     * @example 1609330367000
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example 1609330367000
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @example 38
     *
     * @var int
     */
    public $remainTime;

    /**
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @example user
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @example dbfs-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceFsId;

    /**
     * @example 20
     *
     * @var int
     */
    public $sourceFsSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $sourceFsStripeWidth;

    /**
     * @example accomplished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'category'            => 'Category',
        'creationTime'        => 'CreationTime',
        'description'         => 'Description',
        'lastModifiedTime'    => 'LastModifiedTime',
        'progress'            => 'Progress',
        'remainTime'          => 'RemainTime',
        'retentionDays'       => 'RetentionDays',
        'snapshotId'          => 'SnapshotId',
        'snapshotName'        => 'SnapshotName',
        'snapshotType'        => 'SnapshotType',
        'sourceFsId'          => 'SourceFsId',
        'sourceFsSize'        => 'SourceFsSize',
        'sourceFsStripeWidth' => 'SourceFsStripeWidth',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->sourceFsId) {
            $res['SourceFsId'] = $this->sourceFsId;
        }
        if (null !== $this->sourceFsSize) {
            $res['SourceFsSize'] = $this->sourceFsSize;
        }
        if (null !== $this->sourceFsStripeWidth) {
            $res['SourceFsStripeWidth'] = $this->sourceFsStripeWidth;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SourceFsId'])) {
            $model->sourceFsId = $map['SourceFsId'];
        }
        if (isset($map['SourceFsSize'])) {
            $model->sourceFsSize = $map['SourceFsSize'];
        }
        if (isset($map['SourceFsStripeWidth'])) {
            $model->sourceFsStripeWidth = $map['SourceFsStripeWidth'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
