<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListBackupJobsResponseBody\items;

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
    public $backupMode;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'backupJobId' => 'BackupJobId',
        'backupMode' => 'BackupMode',
        'backupStatus' => 'BackupStatus',
        'process' => 'Process',
        'startTime' => 'StartTime',
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

        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }

        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }

        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }

        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }

        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
