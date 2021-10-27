<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody\sqlFlashbackTasks;

use AlibabaCloud\Tea\Model;

class sqlFlashbackTask extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
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
    public $recallProgress;

    /**
     * @var int
     */
    public $recallRestoreType;

    /**
     * @var int
     */
    public $recallStatus;

    /**
     * @var int
     */
    public $recallType;

    /**
     * @var int
     */
    public $searchEndTime;

    /**
     * @var int
     */
    public $searchStartTime;

    /**
     * @var int
     */
    public $sqlCounter;

    /**
     * @var string
     */
    public $sqlPk;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $tableName;

    /**
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
