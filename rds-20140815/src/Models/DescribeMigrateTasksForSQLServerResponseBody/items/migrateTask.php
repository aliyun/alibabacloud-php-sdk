<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksForSQLServerResponseBody\items;

use AlibabaCloud\Tea\Model;

class migrateTask extends Model
{
    /**
     * @var string
     */
    public $migrateIaskId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;

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
    public $isDBReplaced;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'migrateIaskId' => 'MigrateIaskId',
        'endTime'       => 'EndTime',
        'status'        => 'Status',
        'taskType'      => 'TaskType',
        'createTime'    => 'CreateTime',
        'DBName'        => 'DBName',
        'isDBReplaced'  => 'IsDBReplaced',
        'desc'          => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrateIaskId) {
            $res['MigrateIaskId'] = $this->migrateIaskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->isDBReplaced) {
            $res['IsDBReplaced'] = $this->isDBReplaced;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (isset($map['MigrateIaskId'])) {
            $model->migrateIaskId = $map['MigrateIaskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['IsDBReplaced'])) {
            $model->isDBReplaced = $map['IsDBReplaced'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
