<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class loadTasksRecords extends Model
{
    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $state;

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
    public $processID;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var int
     */
    public $processRows;
    protected $_name = [
        'sql'         => 'Sql',
        'state'       => 'State',
        'createTime'  => 'CreateTime',
        'DBName'      => 'DBName',
        'processID'   => 'ProcessID',
        'updateTime'  => 'UpdateTime',
        'jobName'     => 'JobName',
        'processRows' => 'ProcessRows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->processID) {
            $res['ProcessID'] = $this->processID;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->processRows) {
            $res['ProcessRows'] = $this->processRows;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadTasksRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ProcessID'])) {
            $model->processID = $map['ProcessID'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['ProcessRows'])) {
            $model->processRows = $map['ProcessRows'];
        }

        return $model;
    }
}
