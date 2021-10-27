<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBatchEvaluateTaskReportResponseBody\data\evaluateResults\tableShardResults;

use AlibabaCloud\Tea\Model;

class tableShardResults extends Model
{
    /**
     * @var string
     */
    public $createTableSql;

    /**
     * @var string
     */
    public $dbShardKey;

    /**
     * @var string
     */
    public $dbShardMethod;

    /**
     * @var int
     */
    public $dbpartitions;

    /**
     * @var string
     */
    public $originDbShardMethod;

    /**
     * @var string
     */
    public $originTbShardMethod;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var string
     */
    public $shardKeyType;

    /**
     * @var string
     */
    public $shardType;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $tbShardKey;

    /**
     * @var string
     */
    public $tbShardMethod;

    /**
     * @var int
     */
    public $tbpartitions;
    protected $_name = [
        'createTableSql'      => 'CreateTableSql',
        'dbShardKey'          => 'DbShardKey',
        'dbShardMethod'       => 'DbShardMethod',
        'dbpartitions'        => 'Dbpartitions',
        'originDbShardMethod' => 'OriginDbShardMethod',
        'originTbShardMethod' => 'OriginTbShardMethod',
        'rowCount'            => 'RowCount',
        'shardKeyType'        => 'ShardKeyType',
        'shardType'           => 'ShardType',
        'sqlCount'            => 'SqlCount',
        'table'               => 'Table',
        'tbShardKey'          => 'TbShardKey',
        'tbShardMethod'       => 'TbShardMethod',
        'tbpartitions'        => 'Tbpartitions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTableSql) {
            $res['CreateTableSql'] = $this->createTableSql;
        }
        if (null !== $this->dbShardKey) {
            $res['DbShardKey'] = $this->dbShardKey;
        }
        if (null !== $this->dbShardMethod) {
            $res['DbShardMethod'] = $this->dbShardMethod;
        }
        if (null !== $this->dbpartitions) {
            $res['Dbpartitions'] = $this->dbpartitions;
        }
        if (null !== $this->originDbShardMethod) {
            $res['OriginDbShardMethod'] = $this->originDbShardMethod;
        }
        if (null !== $this->originTbShardMethod) {
            $res['OriginTbShardMethod'] = $this->originTbShardMethod;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->shardKeyType) {
            $res['ShardKeyType'] = $this->shardKeyType;
        }
        if (null !== $this->shardType) {
            $res['ShardType'] = $this->shardType;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->tbShardKey) {
            $res['TbShardKey'] = $this->tbShardKey;
        }
        if (null !== $this->tbShardMethod) {
            $res['TbShardMethod'] = $this->tbShardMethod;
        }
        if (null !== $this->tbpartitions) {
            $res['Tbpartitions'] = $this->tbpartitions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableShardResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTableSql'])) {
            $model->createTableSql = $map['CreateTableSql'];
        }
        if (isset($map['DbShardKey'])) {
            $model->dbShardKey = $map['DbShardKey'];
        }
        if (isset($map['DbShardMethod'])) {
            $model->dbShardMethod = $map['DbShardMethod'];
        }
        if (isset($map['Dbpartitions'])) {
            $model->dbpartitions = $map['Dbpartitions'];
        }
        if (isset($map['OriginDbShardMethod'])) {
            $model->originDbShardMethod = $map['OriginDbShardMethod'];
        }
        if (isset($map['OriginTbShardMethod'])) {
            $model->originTbShardMethod = $map['OriginTbShardMethod'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['ShardKeyType'])) {
            $model->shardKeyType = $map['ShardKeyType'];
        }
        if (isset($map['ShardType'])) {
            $model->shardType = $map['ShardType'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['TbShardKey'])) {
            $model->tbShardKey = $map['TbShardKey'];
        }
        if (isset($map['TbShardMethod'])) {
            $model->tbShardMethod = $map['TbShardMethod'];
        }
        if (isset($map['Tbpartitions'])) {
            $model->tbpartitions = $map['Tbpartitions'];
        }

        return $model;
    }
}
