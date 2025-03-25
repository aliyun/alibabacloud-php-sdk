<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsJobResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsJobResponseBody\data\config;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @example 2024-12-17 15:44:17
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
     * @var string
     */
    public $eta;

    /**
     * @example 10
     *
     * @var int
     */
    public $id;

    /**
     * @example migrate_db_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
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
     * @example DOING
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
     * @example 100
     *
     * @var int
     */
    public $taskDone;

    /**
     * @example 100
     *
     * @var int
     */
    public $taskNum;

    /**
     * @example Tables
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'config',
        'createTime' => 'createTime',
        'dbId' => 'dbId',
        'dstDbName' => 'dstDbName',
        'dstSchemaName' => 'dstSchemaName',
        'eta' => 'eta',
        'id' => 'id',
        'name' => 'name',
        'sourceId' => 'sourceId',
        'sourceName' => 'sourceName',
        'srcDbName' => 'srcDbName',
        'srcSchemaName' => 'srcSchemaName',
        'status' => 'status',
        'stopped' => 'stopped',
        'taskDone' => 'taskDone',
        'taskNum' => 'taskNum',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
        }
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
        if (null !== $this->eta) {
            $res['eta'] = $this->eta;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->stopped) {
            $res['stopped'] = $this->stopped;
        }
        if (null !== $this->taskDone) {
            $res['taskDone'] = $this->taskDone;
        }
        if (null !== $this->taskNum) {
            $res['taskNum'] = $this->taskNum;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }
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
        if (isset($map['eta'])) {
            $model->eta = $map['eta'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['stopped'])) {
            $model->stopped = $map['stopped'];
        }
        if (isset($map['taskDone'])) {
            $model->taskDone = $map['taskDone'];
        }
        if (isset($map['taskNum'])) {
            $model->taskNum = $map['taskNum'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
