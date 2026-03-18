<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody\data;

use AlibabaCloud\Dara\Model;

class subTasks extends Model
{
    /**
     * @var string
     */
    public $dataBase;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var int
     */
    public $finishedTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'dataBase' => 'DataBase',
        'detail' => 'Detail',
        'finishedTime' => 'FinishedTime',
        'size' => 'Size',
        'snapshotName' => 'SnapshotName',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'table' => 'Table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataBase) {
            $res['DataBase'] = $this->dataBase;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->table) {
            $res['Table'] = $this->table;
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
        if (isset($map['DataBase'])) {
            $model->dataBase = $map['DataBase'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
