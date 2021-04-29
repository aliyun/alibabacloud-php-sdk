<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupJob extends Model
{
    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $backupJobId;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $jobMode;

    /**
     * @var string
     */
    public $backupProgressStatus;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'process'              => 'Process',
        'backupJobId'          => 'BackupJobId',
        'backupStatus'         => 'BackupStatus',
        'jobMode'              => 'JobMode',
        'backupProgressStatus' => 'BackupProgressStatus',
        'backupId'             => 'BackupId',
        'taskAction'           => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }
        if (null !== $this->backupProgressStatus) {
            $res['BackupProgressStatus'] = $this->backupProgressStatus;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
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
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }
        if (isset($map['BackupProgressStatus'])) {
            $model->backupProgressStatus = $map['BackupProgressStatus'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
