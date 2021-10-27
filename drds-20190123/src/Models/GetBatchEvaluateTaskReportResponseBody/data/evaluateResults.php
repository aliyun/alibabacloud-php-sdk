<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\GetBatchEvaluateTaskReportResponseBody\data;

use AlibabaCloud\SDK\Drds\V20190123\Models\GetBatchEvaluateTaskReportResponseBody\data\evaluateResults\rdsInstInfos;
use AlibabaCloud\SDK\Drds\V20190123\Models\GetBatchEvaluateTaskReportResponseBody\data\evaluateResults\tableShardResults;
use AlibabaCloud\Tea\Model;

class evaluateResults extends Model
{
    /**
     * @var int
     */
    public $allSqlCount;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $drdsCount;

    /**
     * @var string
     */
    public $drdsType;

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
    public $instId;

    /**
     * @var int
     */
    public $rdsCount;

    /**
     * @var rdsInstInfos
     */
    public $rdsInstInfos;

    /**
     * @var string
     */
    public $rdsTotalSpace;

    /**
     * @var string
     */
    public $rdsType;

    /**
     * @var int
     */
    public $slowSqlCount;

    /**
     * @var tableShardResults
     */
    public $tableShardResults;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'allSqlCount'       => 'AllSqlCount',
        'dbName'            => 'DbName',
        'drdsCount'         => 'DrdsCount',
        'drdsType'          => 'DrdsType',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'instId'            => 'InstId',
        'rdsCount'          => 'RdsCount',
        'rdsInstInfos'      => 'RdsInstInfos',
        'rdsTotalSpace'     => 'RdsTotalSpace',
        'rdsType'           => 'RdsType',
        'slowSqlCount'      => 'SlowSqlCount',
        'tableShardResults' => 'TableShardResults',
        'taskId'            => 'TaskId',
        'taskName'          => 'TaskName',
        'taskStatus'        => 'TaskStatus',
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
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsCount) {
            $res['DrdsCount'] = $this->drdsCount;
        }
        if (null !== $this->drdsType) {
            $res['DrdsType'] = $this->drdsType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instId) {
            $res['InstId'] = $this->instId;
        }
        if (null !== $this->rdsCount) {
            $res['RdsCount'] = $this->rdsCount;
        }
        if (null !== $this->rdsInstInfos) {
            $res['RdsInstInfos'] = null !== $this->rdsInstInfos ? $this->rdsInstInfos->toMap() : null;
        }
        if (null !== $this->rdsTotalSpace) {
            $res['RdsTotalSpace'] = $this->rdsTotalSpace;
        }
        if (null !== $this->rdsType) {
            $res['RdsType'] = $this->rdsType;
        }
        if (null !== $this->slowSqlCount) {
            $res['SlowSqlCount'] = $this->slowSqlCount;
        }
        if (null !== $this->tableShardResults) {
            $res['TableShardResults'] = null !== $this->tableShardResults ? $this->tableShardResults->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluateResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllSqlCount'])) {
            $model->allSqlCount = $map['AllSqlCount'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsCount'])) {
            $model->drdsCount = $map['DrdsCount'];
        }
        if (isset($map['DrdsType'])) {
            $model->drdsType = $map['DrdsType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstId'])) {
            $model->instId = $map['InstId'];
        }
        if (isset($map['RdsCount'])) {
            $model->rdsCount = $map['RdsCount'];
        }
        if (isset($map['RdsInstInfos'])) {
            $model->rdsInstInfos = rdsInstInfos::fromMap($map['RdsInstInfos']);
        }
        if (isset($map['RdsTotalSpace'])) {
            $model->rdsTotalSpace = $map['RdsTotalSpace'];
        }
        if (isset($map['RdsType'])) {
            $model->rdsType = $map['RdsType'];
        }
        if (isset($map['SlowSqlCount'])) {
            $model->slowSqlCount = $map['SlowSqlCount'];
        }
        if (isset($map['TableShardResults'])) {
            $model->tableShardResults = tableShardResults::fromMap($map['TableShardResults']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
