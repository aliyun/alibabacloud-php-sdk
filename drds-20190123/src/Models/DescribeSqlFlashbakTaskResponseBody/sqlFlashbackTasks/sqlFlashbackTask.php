<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody\sqlFlashbackTasks;

use AlibabaCloud\Tea\Model;

class sqlFlashbackTask extends Model
{
    /**
     * @description Indicates the name of the database on which a flashback task is performed.
     *
     * @example drds_flashback
     *
     * @var string
     */
    public $dbName;

    /**
     * @description Indicates the download URL.
     *
     * @example http://...
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description Indicates the time when the download URL expires.
     *
     * @example 1569216270000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description Indicates the point in time when the instance was created.
     *
     * @example 1568611408000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description Indicates the point in time when the flashback task is performed.
     *
     * @example 1568611469000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description Indicates the ID of the primary key that corresponds to a table used in the flashback task.
     *
     * @example 238
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates the ID of the instance.
     *
     * @example drdshbga76p6****
     *
     * @var string
     */
    public $instId;

    /**
     * @description Indicates the progress of the reverse call.
     *
     * @example 10
     *
     * @var int
     */
    public $recallProgress;

    /**
     * @description Indicates the type of the flashback task. Valid values:
     *
     *   **1**: image restoration
     *   **2**: reverse restoration
     *
     * @example 1
     *
     * @var int
     */
    public $recallRestoreType;

    /**
     * @description Indicates the status of the data recall task.
     *
     * @example 1
     *
     * @var int
     */
    public $recallStatus;

    /**
     * @description Indicates the type of the reverse call. Valid values:
     *
     *   **0**: exact search
     *   **1**: fuzzy search
     *
     * @example 1
     *
     * @var int
     */
    public $recallType;

    /**
     * @description Indicates the start time of the reverse call.
     *
     * @example 1568509597000
     *
     * @var int
     */
    public $searchEndTime;

    /**
     * @description Indicates the end time of the reverse call.
     *
     * @example 1568609597000
     *
     * @var int
     */
    public $searchStartTime;

    /**
     * @description Indicates the number of data rows that are flashed back.
     *
     * @example 0
     *
     * @var int
     */
    public $sqlCounter;

    /**
     * @description Indicates the primary key specified in the SQL statements.
     *
     * @example id
     *
     * @var string
     */
    public $sqlPk;

    /**
     * @description Indicates the types of the SQL statements.
     *
     * @example Insert,Update,Delete
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description Indicates the name of the table that contains the data that are flashed back.
     *
     * @example drds_params
     *
     * @var string
     */
    public $tableName;

    /**
     * @description Indicates the ID of the trace of the SQL query.
     *
     * @example trace
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'dbName'            => 'DbName',
        'downloadUrl'       => 'DownloadUrl',
        'expireTime'        => 'ExpireTime',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'id'                => 'Id',
        'instId'            => 'InstId',
        'recallProgress'    => 'RecallProgress',
        'recallRestoreType' => 'RecallRestoreType',
        'recallStatus'      => 'RecallStatus',
        'recallType'        => 'RecallType',
        'searchEndTime'     => 'SearchEndTime',
        'searchStartTime'   => 'SearchStartTime',
        'sqlCounter'        => 'SqlCounter',
        'sqlPk'             => 'SqlPk',
        'sqlType'           => 'SqlType',
        'tableName'         => 'TableName',
        'traceId'           => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
        if (null !== $this->recallProgress) {
            $res['RecallProgress'] = $this->recallProgress;
        }
        if (null !== $this->recallRestoreType) {
            $res['RecallRestoreType'] = $this->recallRestoreType;
        }
        if (null !== $this->recallStatus) {
            $res['RecallStatus'] = $this->recallStatus;
        }
        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }
        if (null !== $this->searchEndTime) {
            $res['SearchEndTime'] = $this->searchEndTime;
        }
        if (null !== $this->searchStartTime) {
            $res['SearchStartTime'] = $this->searchStartTime;
        }
        if (null !== $this->sqlCounter) {
            $res['SqlCounter'] = $this->sqlCounter;
        }
        if (null !== $this->sqlPk) {
            $res['SqlPk'] = $this->sqlPk;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlFlashbackTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
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
        if (isset($map['RecallProgress'])) {
            $model->recallProgress = $map['RecallProgress'];
        }
        if (isset($map['RecallRestoreType'])) {
            $model->recallRestoreType = $map['RecallRestoreType'];
        }
        if (isset($map['RecallStatus'])) {
            $model->recallStatus = $map['RecallStatus'];
        }
        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }
        if (isset($map['SearchEndTime'])) {
            $model->searchEndTime = $map['SearchEndTime'];
        }
        if (isset($map['SearchStartTime'])) {
            $model->searchStartTime = $map['SearchStartTime'];
        }
        if (isset($map['SqlCounter'])) {
            $model->sqlCounter = $map['SqlCounter'];
        }
        if (isset($map['SqlPk'])) {
            $model->sqlPk = $map['SqlPk'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
