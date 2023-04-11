<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponseBody;

use AlibabaCloud\Tea\Model;

class DBTaskSQLJobList extends Model
{
    /**
     * @description The description of the SQL task.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the SQL task was created.
     *
     * @example 2021-02-18 17:49:20
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the database.
     *
     * @example 43214523
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The name that is used to search for the database.
     *
     * @example test@xxx:3306【test】
     *
     * @var string
     */
    public $dbSearchName;

    /**
     * @description The ID of the SQL task group.
     *
     * @example 4324132
     *
     * @var int
     */
    public $dbTaskGroupId;

    /**
     * @description The ID of the SQL task.
     *
     * @example 123435
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The type of the SQL task.
     *
     * @example STRUCT_SYNC
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The time when the SQL task was last executed.
     *
     * @example 2021-02-18 17:49:31
     *
     * @var string
     */
    public $lastExecTime;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The state of the SQL task. Valid values:
     *
     *   **INIT**: The SQL task was initialized.
     *   **PENDING**: The SQL task waited to be run.
     *   **BE_SCHEDULED**: The SQL task waited to be scheduled.
     *   **FAIL**: The SQL task failed.
     *   **SUCCESS**: The SQL task was successful.
     *   **PAUSE**: The SQL task was paused.
     *   **DELETE**: The SQL task was deleted.
     *   **RUNNING**: The SQL task was being run.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the SQL task is executed as a transaction. Valid values:
     *
     *   **true**: The SQL task is executed as a transaction.
     *   **false**: The SQL task is not executed as a transaction.
     *
     * @example false
     *
     * @var bool
     */
    public $transactional;
    protected $_name = [
        'comment'       => 'Comment',
        'createTime'    => 'CreateTime',
        'dbId'          => 'DbId',
        'dbSearchName'  => 'DbSearchName',
        'dbTaskGroupId' => 'DbTaskGroupId',
        'jobId'         => 'JobId',
        'jobType'       => 'JobType',
        'lastExecTime'  => 'LastExecTime',
        'logic'         => 'Logic',
        'status'        => 'Status',
        'transactional' => 'Transactional',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbSearchName) {
            $res['DbSearchName'] = $this->dbSearchName;
        }
        if (null !== $this->dbTaskGroupId) {
            $res['DbTaskGroupId'] = $this->dbTaskGroupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->lastExecTime) {
            $res['LastExecTime'] = $this->lastExecTime;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transactional) {
            $res['Transactional'] = $this->transactional;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBTaskSQLJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbSearchName'])) {
            $model->dbSearchName = $map['DbSearchName'];
        }
        if (isset($map['DbTaskGroupId'])) {
            $model->dbTaskGroupId = $map['DbTaskGroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['LastExecTime'])) {
            $model->lastExecTime = $map['LastExecTime'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Transactional'])) {
            $model->transactional = $map['Transactional'];
        }

        return $model;
    }
}
