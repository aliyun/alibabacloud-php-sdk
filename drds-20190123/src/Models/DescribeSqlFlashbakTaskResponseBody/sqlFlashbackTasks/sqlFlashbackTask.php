<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody\sqlFlashbackTasks;

use AlibabaCloud\Tea\Model;

class sqlFlashbackTask extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $searchEndTime;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var int
     */
    public $recallProgress;

    /**
     * @var string
     */
    public $sqlPk;

    /**
     * @var string
     */
    public $instId;

    /**
     * @var int
     */
    public $recallType;

    /**
     * @var int
     */
    public $searchStartTime;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $sqlCounter;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $recallRestoreType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $recallStatus;

    /**
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'tableName'         => 'TableName',
        'searchEndTime'     => 'SearchEndTime',
        'expireTime'        => 'ExpireTime',
        'downloadUrl'       => 'DownloadUrl',
        'recallProgress'    => 'RecallProgress',
        'sqlPk'             => 'SqlPk',
        'instId'            => 'InstId',
        'recallType'        => 'RecallType',
        'searchStartTime'   => 'SearchStartTime',
        'gmtModified'       => 'GmtModified',
        'sqlCounter'        => 'SqlCounter',
        'dbName'            => 'DbName',
        'recallRestoreType' => 'RecallRestoreType',
        'gmtCreate'         => 'GmtCreate',
        'traceId'           => 'TraceId',
        'id'                => 'Id',
        'recallStatus'      => 'RecallStatus',
        'sqlType'           => 'SqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->searchEndTime) {
            $res['SearchEndTime'] = $this->searchEndTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->recallProgress) {
            $res['RecallProgress'] = $this->recallProgress;
        }
        if (null !== $this->sqlPk) {
            $res['SqlPk'] = $this->sqlPk;
        }
        if (null !== $this->instId) {
            $res['InstId'] = $this->instId;
        }
        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }
        if (null !== $this->searchStartTime) {
            $res['SearchStartTime'] = $this->searchStartTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->sqlCounter) {
            $res['SqlCounter'] = $this->sqlCounter;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->recallRestoreType) {
            $res['RecallRestoreType'] = $this->recallRestoreType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->recallStatus) {
            $res['RecallStatus'] = $this->recallStatus;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['SearchEndTime'])) {
            $model->searchEndTime = $map['SearchEndTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['RecallProgress'])) {
            $model->recallProgress = $map['RecallProgress'];
        }
        if (isset($map['SqlPk'])) {
            $model->sqlPk = $map['SqlPk'];
        }
        if (isset($map['InstId'])) {
            $model->instId = $map['InstId'];
        }
        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }
        if (isset($map['SearchStartTime'])) {
            $model->searchStartTime = $map['SearchStartTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['SqlCounter'])) {
            $model->sqlCounter = $map['SqlCounter'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['RecallRestoreType'])) {
            $model->recallRestoreType = $map['RecallRestoreType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RecallStatus'])) {
            $model->recallStatus = $map['RecallStatus'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
