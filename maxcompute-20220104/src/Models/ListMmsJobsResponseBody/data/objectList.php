<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsJobsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsJobsResponseBody\data\objectList\config;

class objectList extends Model
{
    /**
     * @var config
     */
    public $config;

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
    public $eta;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

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
    public $status;

    /**
     * @var bool
     */
    public $stopped;

    /**
     * @var int
     */
    public $taskDone;

    /**
     * @var int
     */
    public $taskNum;

    /**
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

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
