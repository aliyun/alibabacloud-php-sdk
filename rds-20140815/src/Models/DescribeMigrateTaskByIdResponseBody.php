<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeMigrateTaskByIdResponseBody extends Model
{
    /**
     * @description The type of the migration task. Valid values:
     *
     *   **FULL**: The migration task migrates full backup files that can be used to restore the full data of the instance.
     *   **UPDF**: The migration task migrates incremental or log backup files that can be used to restore the incremental data of the instance.
     *
     * @example FULL
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The time when the migration task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-05-30T12:11:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The name of the database.
     *
     * @example mytestdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The description of the migration task.
     *
     * @example Success to DBCC checkdb asynchronously
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the migration task was completed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-05-30T15:15:05Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Indicates whether the imported data overwrites the existing data. Valid values:
     *
     *   **False**: The imported data does not overwrite the existing data.
     *   **True**: The imported data overwrites the existing data.
     *
     * @example False
     *
     * @var string
     */
    public $isDBReplaced;

    /**
     * @description The ID of the migration task.
     *
     * @example 235943
     *
     * @var string
     */
    public $migrateTaskId;

    /**
     * @description The ID of the request.
     *
     * @example 6ED3635A-01F9-47BD-B9C8-CB3FD70A336E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the migration task. Valid values:
     *
     *   **NoStart**: The task has not started.
     *   **Running**:The task is in progress.
     *   **Success**: The task is successful.
     *   **Failed**: The task failed.
     *   **Waiting**: The task is waiting for an incremental backup file to be imported.
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'backupMode'     => 'BackupMode',
        'createTime'     => 'CreateTime',
        'DBInstanceName' => 'DBInstanceName',
        'DBName'         => 'DBName',
        'description'    => 'Description',
        'endTime'        => 'EndTime',
        'isDBReplaced'   => 'IsDBReplaced',
        'migrateTaskId'  => 'MigrateTaskId',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isDBReplaced) {
            $res['IsDBReplaced'] = $this->isDBReplaced;
        }
        if (null !== $this->migrateTaskId) {
            $res['MigrateTaskId'] = $this->migrateTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMigrateTaskByIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsDBReplaced'])) {
            $model->isDBReplaced = $map['IsDBReplaced'];
        }
        if (isset($map['MigrateTaskId'])) {
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
