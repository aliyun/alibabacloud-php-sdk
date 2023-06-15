<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class migrateTask extends Model
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
     * @example 2017-05-30T12:11:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the database.
     *
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The description of the migration task.
     *
     * @example Api description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the migration task was completed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-05-30T13:11:04Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Indicates whether the imported data overwrites the existing data.
     *
     * @example True
     *
     * @var string
     */
    public $isDBReplaced;

    /**
     * @description The ID of the migration task.
     *
     * @example 564522545
     *
     * @var string
     */
    public $migrateTaskId;

    /**
     * @description The status of the migration task. Valid values:
     *
     *   **NoStart**: The task is not started.
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
        'backupMode'    => 'BackupMode',
        'createTime'    => 'CreateTime',
        'DBName'        => 'DBName',
        'description'   => 'Description',
        'endTime'       => 'EndTime',
        'isDBReplaced'  => 'IsDBReplaced',
        'migrateTaskId' => 'MigrateTaskId',
        'status'        => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrateTask
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
