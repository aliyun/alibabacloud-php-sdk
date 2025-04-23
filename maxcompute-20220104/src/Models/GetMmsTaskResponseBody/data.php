<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dstDbName;

    /**
     * @var string
     */
    public $dstSchemaName;

    /**
     * @var string
     */
    public $dstTableName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var int
     */
    public $retriedTimes;

    /**
     * @var bool
     */
    public $running;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $srcDbName;

    /**
     * @var string
     */
    public $srcSchemaName;

    /**
     * @var string
     */
    public $srcTableName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $stopped;

    /**
     * @var int
     */
    public $tableId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
