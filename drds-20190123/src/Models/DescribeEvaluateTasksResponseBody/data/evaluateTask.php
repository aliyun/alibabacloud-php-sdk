<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class evaluateTask extends Model
{
    /**
     * @var int
     */
    public $allSqlCount;

    /**
     * @var int
     */
    public $batchEvaluateTaskId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $dbType;

    /**
     * @var int
     */
    public $evalauteHours;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instId;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'allSqlCount'         => 'AllSqlCount',
        'batchEvaluateTaskId' => 'BatchEvaluateTaskId',
        'dbName'              => 'DbName',
        'dbType'              => 'DbType',
        'evalauteHours'       => 'EvalauteHours',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'instId'              => 'InstId',
        'progress'            => 'Progress',
        'status'              => 'Status',
        'taskName'            => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allSqlCount) {
            $res['AllSqlCount'] = $this->allSqlCount;
        }
        if (null !== $this->batchEvaluateTaskId) {
            $res['BatchEvaluateTaskId'] = $this->batchEvaluateTaskId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->evalauteHours) {
            $res['EvalauteHours'] = $this->evalauteHours;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instId) {
            $res['InstId'] = $this->instId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluateTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllSqlCount'])) {
            $model->allSqlCount = $map['AllSqlCount'];
        }
        if (isset($map['BatchEvaluateTaskId'])) {
            $model->batchEvaluateTaskId = $map['BatchEvaluateTaskId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EvalauteHours'])) {
            $model->evalauteHours = $map['EvalauteHours'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstId'])) {
            $model->instId = $map['InstId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
