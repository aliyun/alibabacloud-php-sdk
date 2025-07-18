<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListBackupJobsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupJob extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $backupJobId;

    /**
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example 50%
     *
     * @var string
     */
    public $process;

    /**
     * @example 2022-08-11T09:26:43Z
     *
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

    public function validate() {}

    public function toMap()
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
