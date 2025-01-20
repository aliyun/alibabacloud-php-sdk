<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponseBody\snapshots;

use AlibabaCloud\Dara\Model;

class snapshot extends Model
{
    /**
     * @var string
     */
    public $completedTime;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $encryptType;
    /**
     * @var string
     */
    public $fileSystemType;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var int
     */
    public $remainTime;
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
    public $snapshotName;
    /**
     * @var string
     */
    public $snapshotType;
    /**
     * @var string
     */
    public $sourceFileSystemId;
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
    public $status;
    protected $_name = [
        'completedTime'           => 'CompletedTime',
        'createTime'              => 'CreateTime',
        'description'             => 'Description',
        'encryptType'             => 'EncryptType',
        'fileSystemType'          => 'FileSystemType',
        'progress'                => 'Progress',
        'remainTime'              => 'RemainTime',
        'retentionDays'           => 'RetentionDays',
        'snapshotId'              => 'SnapshotId',
        'snapshotName'            => 'SnapshotName',
        'snapshotType'            => 'SnapshotType',
        'sourceFileSystemId'      => 'SourceFileSystemId',
        'sourceFileSystemSize'    => 'SourceFileSystemSize',
        'sourceFileSystemVersion' => 'SourceFileSystemVersion',
        'status'                  => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }

        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
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

        if (null !== $this->sourceFileSystemId) {
            $res['SourceFileSystemId'] = $this->sourceFileSystemId;
        }

        if (null !== $this->sourceFileSystemSize) {
            $res['SourceFileSystemSize'] = $this->sourceFileSystemSize;
        }

        if (null !== $this->sourceFileSystemVersion) {
            $res['SourceFileSystemVersion'] = $this->sourceFileSystemVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }

        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
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

        if (isset($map['SourceFileSystemId'])) {
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }

        if (isset($map['SourceFileSystemSize'])) {
            $model->sourceFileSystemSize = $map['SourceFileSystemSize'];
        }

        if (isset($map['SourceFileSystemVersion'])) {
            $model->sourceFileSystemVersion = $map['SourceFileSystemVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
