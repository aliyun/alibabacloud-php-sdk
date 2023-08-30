<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody;

use AlibabaCloud\Tea\Model;

class backupJobs extends Model
{
    /**
     * @description The ID of the backup task.
     *
     * @example 8491111
     *
     * @var int
     */
    public $backupJobID;

    /**
     * @description The state of the backup task. Valid values:
     *
     *   **NoStart**: The backup task is not started.
     *   **Preparing**: The backup task is being prepared.
     *   **Waiting**: The backup task is pending.
     *   **Uploading**: The system is uploading the backup file.
     *   **Checking**: The system is checking the uploaded backup file.
     *   **Finished**: The backup task is completed.
     *
     * @example Automated
     *
     * @var string
     */
    public $backupProgressStatus;

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
     * @description The ID of the data node.
     *
     * @example ****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The progress of the backup task in percentage.
     *
     * @example 0
     *
     * @var string
     */
    public $process;

    /**
     * @description The start time of the backup task. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-01-05T19:24:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the backup task. Valid values:
     *
     *   **TempBackupTask**: The backup task was manually performed.
     *   **NormalBackupTask**: The backup task was automatically performed.
     *
     * @example NormalBackupTask
     *
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'backupJobID'          => 'BackupJobID',
        'backupProgressStatus' => 'BackupProgressStatus',
        'jobMode'              => 'JobMode',
        'nodeId'               => 'NodeId',
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
        if (null !== $this->backupJobID) {
            $res['BackupJobID'] = $this->backupJobID;
        }
        if (null !== $this->backupProgressStatus) {
            $res['BackupProgressStatus'] = $this->backupProgressStatus;
        }
        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
     * @return backupJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobID'])) {
            $model->backupJobID = $map['BackupJobID'];
        }
        if (isset($map['BackupProgressStatus'])) {
            $model->backupProgressStatus = $map['BackupProgressStatus'];
        }
        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
