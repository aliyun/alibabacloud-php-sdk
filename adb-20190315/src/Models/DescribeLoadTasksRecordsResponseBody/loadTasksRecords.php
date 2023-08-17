<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class loadTasksRecords extends Model
{
    /**
     * @description The start time of the task. The time is accurate to milliseconds. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ss.SSSZ* format. The time is displayed in UTC.
     *
     * @example 2021-05-18 18:47:27.0
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the database that is involved in the import or export task.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The task ID.
     *
     * @example 2021051818472717201616624903453******
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The process ID.
     *
     * @example 2021051818472717201616624903453******
     *
     * @var string
     */
    public $processID;

    /**
     * @description The number of rows that are processed in the asynchronous import or export task.
     *
     * @example 6
     *
     * @var int
     */
    public $processRows;

    /**
     * @description The SQL statement that is used in the asynchronous import or export task.
     *
     * @example insert overwrite into courses_external_table\nselect * from courses
     *
     * @var string
     */
    public $sql;

    /**
     * @description The state of the task.
     *
     * @example FINISH
     *
     * @var string
     */
    public $state;

    /**
     * @description The time when the task state was updated. The time is accurate to milliseconds. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ss.SSSZ* format. The time is displayed in UTC.
     *
     * @example 2021-05-18 18:47:31.0
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'DBName'      => 'DBName',
        'jobName'     => 'JobName',
        'processID'   => 'ProcessID',
        'processRows' => 'ProcessRows',
        'sql'         => 'Sql',
        'state'       => 'State',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->processID) {
            $res['ProcessID'] = $this->processID;
        }
        if (null !== $this->processRows) {
            $res['ProcessRows'] = $this->processRows;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['ProcessID'])) {
            $model->processID = $map['ProcessID'];
        }
        if (isset($map['ProcessRows'])) {
            $model->processRows = $map['ProcessRows'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
