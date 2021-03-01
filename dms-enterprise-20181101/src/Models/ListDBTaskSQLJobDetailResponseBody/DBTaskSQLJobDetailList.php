<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class DBTaskSQLJobDetailList extends Model
{
    /**
     * @var int
     */
    public $jobDetailId;

    /**
     * @var string
     */
    public $currentSql;

    /**
     * @var int
     */
    public $executeCount;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var bool
     */
    public $skip;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'jobDetailId'  => 'JobDetailId',
        'currentSql'   => 'CurrentSql',
        'executeCount' => 'ExecuteCount',
        'jobId'        => 'JobId',
        'dbId'         => 'DbId',
        'logic'        => 'Logic',
        'skip'         => 'Skip',
        'sqlType'      => 'SqlType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobDetailId) {
            $res['JobDetailId'] = $this->jobDetailId;
        }
        if (null !== $this->currentSql) {
            $res['CurrentSql'] = $this->currentSql;
        }
        if (null !== $this->executeCount) {
            $res['ExecuteCount'] = $this->executeCount;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBTaskSQLJobDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobDetailId'])) {
            $model->jobDetailId = $map['JobDetailId'];
        }
        if (isset($map['CurrentSql'])) {
            $model->currentSql = $map['CurrentSql'];
        }
        if (isset($map['ExecuteCount'])) {
            $model->executeCount = $map['ExecuteCount'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
