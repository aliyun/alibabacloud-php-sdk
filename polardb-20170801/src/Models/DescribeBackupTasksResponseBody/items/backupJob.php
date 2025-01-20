<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupTasksResponseBody\items;

use AlibabaCloud\Dara\Model;

class backupJob extends Model
{
    /**
     * @var string
     */
    public $backupJobId;
    /**
     * @var string
     */
    public $backupProgressStatus;
    /**
     * @var string
     */
    public $jobMode;
    /**
     * @var string
     */
    public $process;
    /**
     * @var string
     */
    public $startTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
