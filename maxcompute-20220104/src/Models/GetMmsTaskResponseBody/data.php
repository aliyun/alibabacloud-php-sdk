<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-10-25 04:21:01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 23
     *
     * @var int
     */
    public $dbId;

    /**
     * @example mms_target
     *
     * @var string
     */
    public $dstDbName;

    /**
     * @example default
     *
     * @var string
     */
    public $dstSchemaName;

    /**
     * @example table_1
     *
     * @var string
     */
    public $dstTableName;

    /**
     * @example 2024-10-25 07:21:01
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 7680
     *
     * @var int
     */
    public $id;

    /**
     * @example 87
     *
     * @var int
     */
    public $jobId;

    /**
     * @example test_odps_spark
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 1
     *
     * @var int
     */
    public $retriedTimes;

    /**
     * @example true
     *
     * @var bool
     */
    public $running;

    /**
     * @example 2000015
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example demo
     *
     * @var string
     */
    public $sourceName;

    /**
     * @example mms_test
     *
     * @var string
     */
    public $srcDbName;

    /**
     * @example default
     *
     * @var string
     */
    public $srcSchemaName;

    /**
     * @example table_1
     *
     * @var string
     */
    public $srcTableName;

    /**
     * @example 2024-10-25 06:21:01
     *
     * @var string
     */
    public $startTime;

    /**
     * @example DATA_DOING
     *
     * @var string
     */
    public $status;

    /**
     * @example false
     *
     * @var bool
     */
    public $stopped;

    /**
     * @example 2323
     *
     * @var int
     */
    public $tableId;

    /**
     * @example BIGQUERY
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'createTime',
        'dbId' => 'dbId',
        'dstDbName' => 'dstDbName',
        'dstSchemaName' => 'dstSchemaName',
        'dstTableName' => 'dstTableName',
        'endTime' => 'endTime',
        'id' => 'id',
        'jobId' => 'jobId',
        'jobName' => 'jobName',
        'retriedTimes' => 'retriedTimes',
        'running' => 'running',
        'sourceId' => 'sourceId',
        'sourceName' => 'sourceName',
        'srcDbName' => 'srcDbName',
        'srcSchemaName' => 'srcSchemaName',
        'srcTableName' => 'srcTableName',
        'startTime' => 'startTime',
        'status' => 'status',
        'stopped' => 'stopped',
        'tableId' => 'tableId',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dbId) {
            $res['dbId'] = $this->dbId;
        }
        if (null !== $this->dstDbName) {
            $res['dstDbName'] = $this->dstDbName;
        }
        if (null !== $this->dstSchemaName) {
            $res['dstSchemaName'] = $this->dstSchemaName;
        }
        if (null !== $this->dstTableName) {
            $res['dstTableName'] = $this->dstTableName;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }
        if (null !== $this->retriedTimes) {
            $res['retriedTimes'] = $this->retriedTimes;
        }
        if (null !== $this->running) {
            $res['running'] = $this->running;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceName) {
            $res['sourceName'] = $this->sourceName;
        }
        if (null !== $this->srcDbName) {
            $res['srcDbName'] = $this->srcDbName;
        }
        if (null !== $this->srcSchemaName) {
            $res['srcSchemaName'] = $this->srcSchemaName;
        }
        if (null !== $this->srcTableName) {
            $res['srcTableName'] = $this->srcTableName;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->stopped) {
            $res['stopped'] = $this->stopped;
        }
        if (null !== $this->tableId) {
            $res['tableId'] = $this->tableId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dbId'])) {
            $model->dbId = $map['dbId'];
        }
        if (isset($map['dstDbName'])) {
            $model->dstDbName = $map['dstDbName'];
        }
        if (isset($map['dstSchemaName'])) {
            $model->dstSchemaName = $map['dstSchemaName'];
        }
        if (isset($map['dstTableName'])) {
            $model->dstTableName = $map['dstTableName'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }
        if (isset($map['retriedTimes'])) {
            $model->retriedTimes = $map['retriedTimes'];
        }
        if (isset($map['running'])) {
            $model->running = $map['running'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['sourceName'])) {
            $model->sourceName = $map['sourceName'];
        }
        if (isset($map['srcDbName'])) {
            $model->srcDbName = $map['srcDbName'];
        }
        if (isset($map['srcSchemaName'])) {
            $model->srcSchemaName = $map['srcSchemaName'];
        }
        if (isset($map['srcTableName'])) {
            $model->srcTableName = $map['srcTableName'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['stopped'])) {
            $model->stopped = $map['stopped'];
        }
        if (isset($map['tableId'])) {
            $model->tableId = $map['tableId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
