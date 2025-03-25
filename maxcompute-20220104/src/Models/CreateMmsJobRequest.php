<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class CreateMmsJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $columnMapping;

    /**
     * @var string
     */
    public $dstDbName;

    /**
     * @var string
     */
    public $dstSchemaName;

    /**
     * @var bool
     */
    public $enableVerification;

    /**
     * @var string
     */
    public $eta;

    /**
     * @var bool
     */
    public $increment;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $others;

    /**
     * @var string[]
     */
    public $partitionFilters;

    /**
     * @var int[]
     */
    public $partitions;

    /**
     * @var bool
     */
    public $schemaOnly;

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
     * @var string[]
     */
    public $tableBlackList;

    /**
     * @var string[]
     */
    public $tableMapping;

    /**
     * @var string[]
     */
    public $tableWhiteList;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @description MOCK, HIVE: hive udtf task, HIVE_DATAX: hive datax task, COPY_TASK: odps Copy Task, ODPS_INSERT_OVERWRITE: odps simple insert overwrite task, MC2MC_VERIFY, OSS, HIVE_OSS
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'columnMapping' => 'columnMapping',
        'dstDbName' => 'dstDbName',
        'dstSchemaName' => 'dstSchemaName',
        'enableVerification' => 'enableVerification',
        'eta' => 'eta',
        'increment' => 'increment',
        'name' => 'name',
        'others' => 'others',
        'partitionFilters' => 'partitionFilters',
        'partitions' => 'partitions',
        'schemaOnly' => 'schemaOnly',
        'sourceId' => 'sourceId',
        'sourceName' => 'sourceName',
        'srcDbName' => 'srcDbName',
        'srcSchemaName' => 'srcSchemaName',
        'tableBlackList' => 'tableBlackList',
        'tableMapping' => 'tableMapping',
        'tableWhiteList' => 'tableWhiteList',
        'tables' => 'tables',
        'taskType' => 'taskType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnMapping) {
            $res['columnMapping'] = $this->columnMapping;
        }
        if (null !== $this->dstDbName) {
            $res['dstDbName'] = $this->dstDbName;
        }
        if (null !== $this->dstSchemaName) {
            $res['dstSchemaName'] = $this->dstSchemaName;
        }
        if (null !== $this->enableVerification) {
            $res['enableVerification'] = $this->enableVerification;
        }
        if (null !== $this->eta) {
            $res['eta'] = $this->eta;
        }
        if (null !== $this->increment) {
            $res['increment'] = $this->increment;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->others) {
            $res['others'] = $this->others;
        }
        if (null !== $this->partitionFilters) {
            $res['partitionFilters'] = $this->partitionFilters;
        }
        if (null !== $this->partitions) {
            $res['partitions'] = $this->partitions;
        }
        if (null !== $this->schemaOnly) {
            $res['schemaOnly'] = $this->schemaOnly;
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
        if (null !== $this->tableBlackList) {
            $res['tableBlackList'] = $this->tableBlackList;
        }
        if (null !== $this->tableMapping) {
            $res['tableMapping'] = $this->tableMapping;
        }
        if (null !== $this->tableWhiteList) {
            $res['tableWhiteList'] = $this->tableWhiteList;
        }
        if (null !== $this->tables) {
            $res['tables'] = $this->tables;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMmsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columnMapping'])) {
            $model->columnMapping = $map['columnMapping'];
        }
        if (isset($map['dstDbName'])) {
            $model->dstDbName = $map['dstDbName'];
        }
        if (isset($map['dstSchemaName'])) {
            $model->dstSchemaName = $map['dstSchemaName'];
        }
        if (isset($map['enableVerification'])) {
            $model->enableVerification = $map['enableVerification'];
        }
        if (isset($map['eta'])) {
            $model->eta = $map['eta'];
        }
        if (isset($map['increment'])) {
            $model->increment = $map['increment'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['others'])) {
            $model->others = $map['others'];
        }
        if (isset($map['partitionFilters'])) {
            $model->partitionFilters = $map['partitionFilters'];
        }
        if (isset($map['partitions'])) {
            if (!empty($map['partitions'])) {
                $model->partitions = $map['partitions'];
            }
        }
        if (isset($map['schemaOnly'])) {
            $model->schemaOnly = $map['schemaOnly'];
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
        if (isset($map['tableBlackList'])) {
            if (!empty($map['tableBlackList'])) {
                $model->tableBlackList = $map['tableBlackList'];
            }
        }
        if (isset($map['tableMapping'])) {
            $model->tableMapping = $map['tableMapping'];
        }
        if (isset($map['tableWhiteList'])) {
            if (!empty($map['tableWhiteList'])) {
                $model->tableWhiteList = $map['tableWhiteList'];
            }
        }
        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = $map['tables'];
            }
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
