<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupJob extends Model
{
    /**
     * @description The ID of the backup task.
     *
     * @example 11111111
     *
     * @var string
     */
    public $backupJobId;

    /**
     * @description The state of the backup task. Valid values:
     *
     *   **NoStart**
     *   **Preparing**
     *   **Waiting**
     *   **Uploading**
     *   **Checking**
     *   **Finished**
     *
     * @example NoStart
     *
     * @var string
     */
    public $backupProgressStatus;

    /**
     * @description The backup mode. Valid values:
     *
     *   **Automated**
     *   **Manual**
     *
     * @example Automated
     *
     * @var string
     */
    public $jobMode;

    /**
     * @description The progress of the backup task in percentage.
     *
     * @example 0
     *
     * @var string
     */
    public $process;

    /**
     * @description The time when the backup task started. The time follows the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-08-08T07:24:01Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the backup task. Valid values:
     *
     *   **TempBackupTask**: The backup task is an adhoc backup task.
     *   **NormalBackupTask**: The backup task is a common backup task.
     *
     * @example NormalBackupTask
     *
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'backupJobId'          => 'BackupJobId',
        'backupProgressStatus' => 'BackupProgressStatus',
        'jobMode'              => 'JobMode',
        'process'              => 'Process',
        'startTime'            => 'StartTime',
        'taskAction'           => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }
        if (null !== $this->backupProgressStatus) {
            $res['BackupProgressStatus'] = $this->backupProgressStatus;
        }
        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }
        if (isset($map['BackupProgressStatus'])) {
            $model->backupProgressStatus = $map['BackupProgressStatus'];
        }
        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
