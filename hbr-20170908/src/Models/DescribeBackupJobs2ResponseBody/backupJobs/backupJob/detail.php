<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\detail\diskNativeSnapshotIdList;
use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The information about the remote replication failure.
     *
     * @example ECS.CreatingSnapshot
     *
     * @var string
     */
    public $destinationNativeSnapshotErrorMessage;

    /**
     * @description The ID of the remote replication snapshot.
     *
     * @example s-******************
     *
     * @var string
     */
    public $destinationNativeSnapshotId;

    /**
     * @description The progress of the remote replication.
     *
     * @example 85
     *
     * @var int
     */
    public $destinationNativeSnapshotProgress;

    /**
     * @description The state of the remote replication.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $destinationNativeSnapshotStatus;

    /**
     * @description The retention period of the remote replication backup.
     *
     * @example 30
     *
     * @var int
     */
    public $destinationRetention;

    /**
     * @description The ID of the remote replication backup.
     *
     * @example s-******************
     *
     * @var string
     */
    public $destinationSnapshotId;

    /**
     * @description The mapping between snapshots and disks.
     *
     * @var diskNativeSnapshotIdList
     */
    public $diskNativeSnapshotIdList;

    /**
     * @description Indicates whether remote replication is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $doCopy;

    /**
     * @description The ID of the backup snapshot.
     *
     * @example s-******************
     *
     * @var string
     */
    public $nativeSnapshotId;
    protected $_name = [
        'destinationNativeSnapshotErrorMessage' => 'DestinationNativeSnapshotErrorMessage',
        'destinationNativeSnapshotId'           => 'DestinationNativeSnapshotId',
        'destinationNativeSnapshotProgress'     => 'DestinationNativeSnapshotProgress',
        'destinationNativeSnapshotStatus'       => 'DestinationNativeSnapshotStatus',
        'destinationRetention'                  => 'DestinationRetention',
        'destinationSnapshotId'                 => 'DestinationSnapshotId',
        'diskNativeSnapshotIdList'              => 'DiskNativeSnapshotIdList',
        'doCopy'                                => 'DoCopy',
        'nativeSnapshotId'                      => 'NativeSnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationNativeSnapshotErrorMessage) {
            $res['DestinationNativeSnapshotErrorMessage'] = $this->destinationNativeSnapshotErrorMessage;
        }
        if (null !== $this->destinationNativeSnapshotId) {
            $res['DestinationNativeSnapshotId'] = $this->destinationNativeSnapshotId;
        }
        if (null !== $this->destinationNativeSnapshotProgress) {
            $res['DestinationNativeSnapshotProgress'] = $this->destinationNativeSnapshotProgress;
        }
        if (null !== $this->destinationNativeSnapshotStatus) {
            $res['DestinationNativeSnapshotStatus'] = $this->destinationNativeSnapshotStatus;
        }
        if (null !== $this->destinationRetention) {
            $res['DestinationRetention'] = $this->destinationRetention;
        }
        if (null !== $this->destinationSnapshotId) {
            $res['DestinationSnapshotId'] = $this->destinationSnapshotId;
        }
        if (null !== $this->diskNativeSnapshotIdList) {
            $res['DiskNativeSnapshotIdList'] = null !== $this->diskNativeSnapshotIdList ? $this->diskNativeSnapshotIdList->toMap() : null;
        }
        if (null !== $this->doCopy) {
            $res['DoCopy'] = $this->doCopy;
        }
        if (null !== $this->nativeSnapshotId) {
            $res['NativeSnapshotId'] = $this->nativeSnapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationNativeSnapshotErrorMessage'])) {
            $model->destinationNativeSnapshotErrorMessage = $map['DestinationNativeSnapshotErrorMessage'];
        }
        if (isset($map['DestinationNativeSnapshotId'])) {
            $model->destinationNativeSnapshotId = $map['DestinationNativeSnapshotId'];
        }
        if (isset($map['DestinationNativeSnapshotProgress'])) {
            $model->destinationNativeSnapshotProgress = $map['DestinationNativeSnapshotProgress'];
        }
        if (isset($map['DestinationNativeSnapshotStatus'])) {
            $model->destinationNativeSnapshotStatus = $map['DestinationNativeSnapshotStatus'];
        }
        if (isset($map['DestinationRetention'])) {
            $model->destinationRetention = $map['DestinationRetention'];
        }
        if (isset($map['DestinationSnapshotId'])) {
            $model->destinationSnapshotId = $map['DestinationSnapshotId'];
        }
        if (isset($map['DiskNativeSnapshotIdList'])) {
            $model->diskNativeSnapshotIdList = diskNativeSnapshotIdList::fromMap($map['DiskNativeSnapshotIdList']);
        }
        if (isset($map['DoCopy'])) {
            $model->doCopy = $map['DoCopy'];
        }
        if (isset($map['NativeSnapshotId'])) {
            $model->nativeSnapshotId = $map['NativeSnapshotId'];
        }

        return $model;
    }
}
