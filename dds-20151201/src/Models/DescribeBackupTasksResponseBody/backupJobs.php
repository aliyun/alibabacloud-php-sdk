<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupTasksResponseBody;

use AlibabaCloud\Dara\Model;

class backupJobs extends Model
{
    /**
     * @var string
     */
    public $backupSetStatus;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupjobId;

    /**
     * @var string
     */
    public $jobMode;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'backupSetStatus' => 'BackupSetStatus',
        'backupStartTime' => 'BackupStartTime',
        'backupjobId' => 'BackupjobId',
        'jobMode' => 'JobMode',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
