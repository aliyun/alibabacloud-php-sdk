<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestOriginStatByInstanceIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var float
     */
    public $avgExaminedRows;

    /**
     * @var int
     */
    public $avgFetchRows;

    /**
     * @var float
     */
    public $avgLockWaitTime;

    /**
     * @var float
     */
    public $avgLogicalRead;

    /**
     * @var int
     */
    public $avgPhysicalAsyncRead;

    /**
     * @var float
     */
    public $avgPhysicalSyncRead;

    /**
     * @var float
     */
    public $avgReturnedRows;

    /**
     * @var int
     */
    public $avgRows;

    /**
     * @var float
     */
    public $avgRt;

    /**
     * @var int
     */
    public $avgSqlCount;

    /**
     * @var float
     */
    public $avgUpdatedRows;

    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $countRate;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var int
     */
    public $examinedRows;

    /**
     * @var int
     */
    public $fetchRows;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $key;

    /**
     * @var float
     */
    public $lockWaitTime;

    /**
     * @var int
     */
    public $logicalRead;

    /**
     * @var string
     */
    public $originHost;

    /**
     * @var int
     */
    public $physicalAsyncRead;

    /**
     * @var int
     */
    public $physicalSyncRead;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $rows;

    /**
     * @var int
     */
    public $rtGreaterThanOneSecondCount;

    /**
     * @var float
     */
    public $rtRate;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var int
     */
    public $sumUpdatedRows;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'avgExaminedRows' => 'AvgExaminedRows',
        'avgFetchRows' => 'AvgFetchRows',
        'avgLockWaitTime' => 'AvgLockWaitTime',
        'avgLogicalRead' => 'AvgLogicalRead',
        'avgPhysicalAsyncRead' => 'AvgPhysicalAsyncRead',
        'avgPhysicalSyncRead' => 'AvgPhysicalSyncRead',
        'avgReturnedRows' => 'AvgReturnedRows',
        'avgRows' => 'AvgRows',
        'avgRt' => 'AvgRt',
        'avgSqlCount' => 'AvgSqlCount',
        'avgUpdatedRows' => 'AvgUpdatedRows',
        'count' => 'Count',
        'countRate' => 'CountRate',
        'database' => 'Database',
        'errorCount' => 'ErrorCount',
        'examinedRows' => 'ExaminedRows',
        'fetchRows' => 'FetchRows',
        'ip' => 'Ip',
        'key' => 'Key',
        'lockWaitTime' => 'LockWaitTime',
        'logicalRead' => 'LogicalRead',
        'originHost' => 'OriginHost',
        'physicalAsyncRead' => 'PhysicalAsyncRead',
        'physicalSyncRead' => 'PhysicalSyncRead',
        'port' => 'Port',
        'rows' => 'Rows',
        'rtGreaterThanOneSecondCount' => 'RtGreaterThanOneSecondCount',
        'rtRate' => 'RtRate',
        'sqlCount' => 'SqlCount',
        'sumUpdatedRows' => 'SumUpdatedRows',
        'version' => 'Version',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgExaminedRows) {
            $res['AvgExaminedRows'] = $this->avgExaminedRows;
        }

        if (null !== $this->avgFetchRows) {
            $res['AvgFetchRows'] = $this->avgFetchRows;
        }

        if (null !== $this->avgLockWaitTime) {
            $res['AvgLockWaitTime'] = $this->avgLockWaitTime;
        }

        if (null !== $this->avgLogicalRead) {
            $res['AvgLogicalRead'] = $this->avgLogicalRead;
        }

        if (null !== $this->avgPhysicalAsyncRead) {
            $res['AvgPhysicalAsyncRead'] = $this->avgPhysicalAsyncRead;
        }

        if (null !== $this->avgPhysicalSyncRead) {
            $res['AvgPhysicalSyncRead'] = $this->avgPhysicalSyncRead;
        }

        if (null !== $this->avgReturnedRows) {
            $res['AvgReturnedRows'] = $this->avgReturnedRows;
        }

        if (null !== $this->avgRows) {
            $res['AvgRows'] = $this->avgRows;
        }

        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }

        if (null !== $this->avgSqlCount) {
            $res['AvgSqlCount'] = $this->avgSqlCount;
        }

        if (null !== $this->avgUpdatedRows) {
            $res['AvgUpdatedRows'] = $this->avgUpdatedRows;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->countRate) {
            $res['CountRate'] = $this->countRate;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }

        if (null !== $this->examinedRows) {
            $res['ExaminedRows'] = $this->examinedRows;
        }

        if (null !== $this->fetchRows) {
            $res['FetchRows'] = $this->fetchRows;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->lockWaitTime) {
            $res['LockWaitTime'] = $this->lockWaitTime;
        }

        if (null !== $this->logicalRead) {
            $res['LogicalRead'] = $this->logicalRead;
        }

        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
        }

        if (null !== $this->physicalAsyncRead) {
            $res['PhysicalAsyncRead'] = $this->physicalAsyncRead;
        }

        if (null !== $this->physicalSyncRead) {
            $res['PhysicalSyncRead'] = $this->physicalSyncRead;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }

        if (null !== $this->rtGreaterThanOneSecondCount) {
            $res['RtGreaterThanOneSecondCount'] = $this->rtGreaterThanOneSecondCount;
        }

        if (null !== $this->rtRate) {
            $res['RtRate'] = $this->rtRate;
        }

        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }

        if (null !== $this->sumUpdatedRows) {
            $res['SumUpdatedRows'] = $this->sumUpdatedRows;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgExaminedRows'])) {
            $model->avgExaminedRows = $map['AvgExaminedRows'];
        }

        if (isset($map['AvgFetchRows'])) {
            $model->avgFetchRows = $map['AvgFetchRows'];
        }

        if (isset($map['AvgLockWaitTime'])) {
            $model->avgLockWaitTime = $map['AvgLockWaitTime'];
        }

        if (isset($map['AvgLogicalRead'])) {
            $model->avgLogicalRead = $map['AvgLogicalRead'];
        }

        if (isset($map['AvgPhysicalAsyncRead'])) {
            $model->avgPhysicalAsyncRead = $map['AvgPhysicalAsyncRead'];
        }

        if (isset($map['AvgPhysicalSyncRead'])) {
            $model->avgPhysicalSyncRead = $map['AvgPhysicalSyncRead'];
        }

        if (isset($map['AvgReturnedRows'])) {
            $model->avgReturnedRows = $map['AvgReturnedRows'];
        }

        if (isset($map['AvgRows'])) {
            $model->avgRows = $map['AvgRows'];
        }

        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }

        if (isset($map['AvgSqlCount'])) {
            $model->avgSqlCount = $map['AvgSqlCount'];
        }

        if (isset($map['AvgUpdatedRows'])) {
            $model->avgUpdatedRows = $map['AvgUpdatedRows'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CountRate'])) {
            $model->countRate = $map['CountRate'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }

        if (isset($map['ExaminedRows'])) {
            $model->examinedRows = $map['ExaminedRows'];
        }

        if (isset($map['FetchRows'])) {
            $model->fetchRows = $map['FetchRows'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['LockWaitTime'])) {
            $model->lockWaitTime = $map['LockWaitTime'];
        }

        if (isset($map['LogicalRead'])) {
            $model->logicalRead = $map['LogicalRead'];
        }

        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
        }

        if (isset($map['PhysicalAsyncRead'])) {
            $model->physicalAsyncRead = $map['PhysicalAsyncRead'];
        }

        if (isset($map['PhysicalSyncRead'])) {
            $model->physicalSyncRead = $map['PhysicalSyncRead'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }

        if (isset($map['RtGreaterThanOneSecondCount'])) {
            $model->rtGreaterThanOneSecondCount = $map['RtGreaterThanOneSecondCount'];
        }

        if (isset($map['RtRate'])) {
            $model->rtRate = $map['RtRate'];
        }

        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }

        if (isset($map['SumUpdatedRows'])) {
            $model->sumUpdatedRows = $map['SumUpdatedRows'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
