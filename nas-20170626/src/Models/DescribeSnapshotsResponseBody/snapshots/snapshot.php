<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponseBody\snapshots;

use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $sourceFileSystemId;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var int
     */
    public $remainTime;

    /**
     * @var int
     */
    public $sourceFileSystemSize;

    /**
     * @var string
     */
    public $sourceFileSystemVersion;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var int
     */
    public $encryptType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'status'                  => 'Status',
        'progress'                => 'Progress',
        'createTime'              => 'CreateTime',
        'sourceFileSystemId'      => 'SourceFileSystemId',
        'retentionDays'           => 'RetentionDays',
        'remainTime'              => 'RemainTime',
        'sourceFileSystemSize'    => 'SourceFileSystemSize',
        'sourceFileSystemVersion' => 'SourceFileSystemVersion',
        'snapshotName'            => 'SnapshotName',
        'encryptType'             => 'EncryptType',
        'description'             => 'Description',
        'snapshotId'              => 'SnapshotId',
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
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sourceFileSystemId) {
            $res['SourceFileSystemId'] = $this->sourceFileSystemId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->sourceFileSystemSize) {
            $res['SourceFileSystemSize'] = $this->sourceFileSystemSize;
        }
        if (null !== $this->sourceFileSystemVersion) {
            $res['SourceFileSystemVersion'] = $this->sourceFileSystemVersion;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SourceFileSystemId'])) {
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['SourceFileSystemSize'])) {
            $model->sourceFileSystemSize = $map['SourceFileSystemSize'];
        }
        if (isset($map['SourceFileSystemVersion'])) {
            $model->sourceFileSystemVersion = $map['SourceFileSystemVersion'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
