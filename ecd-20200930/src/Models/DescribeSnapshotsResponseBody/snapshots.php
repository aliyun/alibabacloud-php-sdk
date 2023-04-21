<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @description The time when the snapshot was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-20T14:52:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The user that creates the snapshot.
     *
     * @example Administrator
     *
     * @var string
     */
    public $creator;

    /**
     * @description The time when the snapshot was deleted. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-mm-ddthh:mm:ssz format. The time is displayed in UTC.
     *
     * @example 2020-12-20T14:52:28Z
     *
     * @var string
     */
    public $deletionTime;

    /**
     * @description The description of the snapshot.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the cloud desktop to which the snapshot belongs.
     *
     * @example ecd-g03l3tlm8djoj****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example test
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The state of the cloud desktop. Valid values:
     *
     *   Pending: The cloud desktop is pending.
     *   Starting: The cloud desktop is being started.
     *   Running: The cloud desktop is running.
     *   Stopping: The cloud desktop is being stopped.
     *   Rebuilding: The cloud desktop is being recreated.
     *   Stopped: The cloud desktop is stopped.
     *   Expired: The cloud desktop expired.
     *   Deleted: The cloud desktop is deleted.
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The progress of the snapshot creation. Unit: percentage (%).
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   ASP
     *   HDX
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The remaining time required to create the snapshot. Unit: seconds.
     *
     * > If the value of the `Status` parameter is `PROGRESSING` and the value of the `RemainTime` parameter is `-1`, the system is calculating the remaining time required to create the snapshot.
     * @example 30
     *
     * @var int
     */
    public $remainTime;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-2zeipxmnhej803x7****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The name of the snapshot.
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The type of snapshot. Valid values:
     *
     *   AUTO: auto snapshot
     *   USER: manual snapshot
     *
     * @example USER
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The size of the source disk. Unit: GiB.
     *
     * @example 150
     *
     * @var string
     */
    public $sourceDiskSize;

    /**
     * @description The type of the source disk. Valid values:
     *
     *   SYSTEM: system disk
     *   DATA: data disk
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The state of the snapshot. Valid values:
     *
     *   PROGRESSING: The snapshot is being created.
     *   FAILED: The snapshot failed to be created.
     *   ACCOMPLISHED: The snapshot is created.
     *
     * @example ACCOMPLISHED
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used when disk encryption is enabled. You can call the [ListKeys](~~28951~~) operation to obtain a list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'creationTime'            => 'CreationTime',
        'creator'                 => 'Creator',
        'deletionTime'            => 'DeletionTime',
        'description'             => 'Description',
        'desktopId'               => 'DesktopId',
        'desktopName'             => 'DesktopName',
        'desktopStatus'           => 'DesktopStatus',
        'progress'                => 'Progress',
        'protocolType'            => 'ProtocolType',
        'remainTime'              => 'RemainTime',
        'snapshotId'              => 'SnapshotId',
        'snapshotName'            => 'SnapshotName',
        'snapshotType'            => 'SnapshotType',
        'sourceDiskSize'          => 'SourceDiskSize',
        'sourceDiskType'          => 'SourceDiskType',
        'status'                  => 'Status',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deletionTime) {
            $res['DeletionTime'] = $this->deletionTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
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
        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DeletionTime'])) {
            $model->deletionTime = $map['DeletionTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
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
        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
