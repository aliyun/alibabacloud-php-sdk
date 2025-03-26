<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponseBody\items;

use AlibabaCloud\Dara\Model;

class migrateTask extends Model
{
    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $isDBReplaced;

    /**
     * @var string
     */
    public $migrateTaskId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'backupMode' => 'BackupMode',
        'createTime' => 'CreateTime',
        'DBName' => 'DBName',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'isDBReplaced' => 'IsDBReplaced',
        'migrateTaskId' => 'MigrateTaskId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
