<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody;

use AlibabaCloud\Tea\Model;

class backupJobs extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $jobMode;

    /**
     * @var int
     */
    public $backupJobID;

    /**
     * @var string
     */
    public $backupProgressStatus;

    /**
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'startTime'            => 'StartTime',
        'process'              => 'Process',
        'jobMode'              => 'JobMode',
        'backupJobID'          => 'BackupJobID',
        'backupProgressStatus' => 'BackupProgressStatus',
        'taskAction'           => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }
        if (null !== $this->backupJobID) {
            $res['BackupJobID'] = $this->backupJobID;
        }
        if (null !== $this->backupProgressStatus) {
            $res['BackupProgressStatus'] = $this->backupProgressStatus;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }
        if (isset($map['BackupJobID'])) {
            $model->backupJobID = $map['BackupJobID'];
        }
        if (isset($map['BackupProgressStatus'])) {
            $model->backupProgressStatus = $map['BackupProgressStatus'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
