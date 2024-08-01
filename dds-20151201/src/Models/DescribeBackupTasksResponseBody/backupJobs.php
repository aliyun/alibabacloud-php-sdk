<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupTasksResponseBody;

use AlibabaCloud\Tea\Model;

class backupJobs extends Model
{
    /**
     * @description The backup task status. Valid values:
     *
     *   **Scheduled**: The backup task is in planning. Regular backup tasks that have not started are also in this state.
     *   **Checking**: The instance is being checked before the backup.
     *   **Backuping**: The backup task is in progress.
     *   **Finished**: The backup task is completed.
     *
     * @example Scheduled
     *
     * @var string
     */
    public $backupSetStatus;

    /**
     * @description The start time of the backup task.
     *
     * @example 2024-01-16T11:04:56Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The ID of the backup task.
     *
     * @example 170034
     *
     * @var string
     */
    public $backupjobId;

    /**
     * @description The backup mode. Valid values:
     *
     *   **Automated**: automatic backup
     *   **Manual**: manual backup
     *
     * @example Manual
     *
     * @var string
     */
    public $jobMode;

    /**
     * @description The progress of the backup task. Unit: %. The progress is returned only for running backup tasks.
     *
     * @example 18%
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'backupSetStatus' => 'BackupSetStatus',
        'backupStartTime' => 'BackupStartTime',
        'backupjobId'     => 'BackupjobId',
        'jobMode'         => 'JobMode',
        'progress'        => 'Progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetStatus) {
            $res['BackupSetStatus'] = $this->backupSetStatus;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupjobId) {
            $res['BackupjobId'] = $this->backupjobId;
        }
        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetStatus'])) {
            $model->backupSetStatus = $map['BackupSetStatus'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupjobId'])) {
            $model->backupjobId = $map['BackupjobId'];
        }
        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
