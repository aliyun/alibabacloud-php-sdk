<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponseBody;

use AlibabaCloud\Tea\Model;

class DBTaskSQLJobList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @example 2021-02-18 17:49:20
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 43214523
     *
     * @var int
     */
    public $dbId;

    /**
     * @example test@xxx:3306【test】
     *
     * @var string
     */
    public $dbSearchName;

    /**
     * @example 4324132
     *
     * @var int
     */
    public $dbTaskGroupId;

    /**
     * @example 123435
     *
     * @var int
     */
    public $jobId;

    /**
     * @example STRUCT_SYNC
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 2021-02-18 17:49:31
     *
     * @var string
     */
    public $lastExecTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
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
