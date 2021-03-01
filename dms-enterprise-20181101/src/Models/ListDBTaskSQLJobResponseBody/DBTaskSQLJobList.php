<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponseBody;

use AlibabaCloud\Tea\Model;

class DBTaskSQLJobList extends Model
{
    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $dbSearchName;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $lastExecTime;

    /**
     * @var int
     */
    public $dbTaskGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $transactional;
    protected $_name = [
        'jobId'         => 'JobId',
        'jobType'       => 'JobType',
        'comment'       => 'Comment',
        'dbSearchName'  => 'DbSearchName',
        'dbId'          => 'DbId',
        'logic'         => 'Logic',
        'createTime'    => 'CreateTime',
        'lastExecTime'  => 'LastExecTime',
        'dbTaskGroupId' => 'DbTaskGroupId',
        'status'        => 'Status',
        'transactional' => 'Transactional',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->dbSearchName) {
            $res['DbSearchName'] = $this->dbSearchName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastExecTime) {
            $res['LastExecTime'] = $this->lastExecTime;
        }
        if (null !== $this->dbTaskGroupId) {
            $res['DbTaskGroupId'] = $this->dbTaskGroupId;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DbSearchName'])) {
            $model->dbSearchName = $map['DbSearchName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastExecTime'])) {
            $model->lastExecTime = $map['LastExecTime'];
        }
        if (isset($map['DbTaskGroupId'])) {
            $model->dbTaskGroupId = $map['DbTaskGroupId'];
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
