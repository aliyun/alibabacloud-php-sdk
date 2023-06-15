<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskResponseBody extends Model
{
    /**
     * @description The type of the migration task. Valid values:
     *
     *   **FULL**: The migration task migrates full backup files.
     *   **UPDF**: The migration task migrates incremental or log backup files.
     *
     * @example FULL
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * @example test02
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The ID of the migration task.
     *
     * @example 564563256
     *
     * @var string
     */
    public $migrateTaskId;

    /**
     * @description The ID of the request.
     *
     * @example 866F5EB8-4650-4061-87F0-379F6F968BCE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 5451225
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'backupMode'    => 'BackupMode',
        'DBInstanceId'  => 'DBInstanceId',
        'DBName'        => 'DBName',
        'migrateTaskId' => 'MigrateTaskId',
        'requestId'     => 'RequestId',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->migrateTaskId) {
            $res['MigrateTaskId'] = $this->migrateTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrateTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['MigrateTaskId'])) {
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
