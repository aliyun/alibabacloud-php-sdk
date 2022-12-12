<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIndexUsageResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example adbtest
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example CREATE INDEX idx1 ON schema1.tab1_ptr_2010
     *
     * @var string
     */
    public $indexDef;

    /**
     * @example idx1
     *
     * @var string
     */
    public $indexName;

    /**
     * @example 50000
     *
     * @var int
     */
    public $indexScanTimes;

    /**
     * @example 10000
     *
     * @var string
     */
    public $indexSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $isPartitionTable;

    /**
     * @example tab1
     *
     * @var string
     */
    public $parentTableName;

    /**
     * @example schema1
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example tab1_ptr_2010
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 2022-08-08T20:00:00Z
     *
     * @var string
     */
    public $timeLastUpdated;
    protected $_name = [
        'databaseName'     => 'DatabaseName',
        'indexDef'         => 'IndexDef',
        'indexName'        => 'IndexName',
        'indexScanTimes'   => 'IndexScanTimes',
        'indexSize'        => 'IndexSize',
        'isPartitionTable' => 'IsPartitionTable',
        'parentTableName'  => 'ParentTableName',
        'schemaName'       => 'SchemaName',
        'tableName'        => 'TableName',
        'timeLastUpdated'  => 'TimeLastUpdated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->indexDef) {
            $res['IndexDef'] = $this->indexDef;
        }
        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }
        if (null !== $this->indexScanTimes) {
            $res['IndexScanTimes'] = $this->indexScanTimes;
        }
        if (null !== $this->indexSize) {
            $res['IndexSize'] = $this->indexSize;
        }
        if (null !== $this->isPartitionTable) {
            $res['IsPartitionTable'] = $this->isPartitionTable;
        }
        if (null !== $this->parentTableName) {
            $res['ParentTableName'] = $this->parentTableName;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->timeLastUpdated) {
            $res['TimeLastUpdated'] = $this->timeLastUpdated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IndexDef'])) {
            $model->indexDef = $map['IndexDef'];
        }
        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }
        if (isset($map['IndexScanTimes'])) {
            $model->indexScanTimes = $map['IndexScanTimes'];
        }
        if (isset($map['IndexSize'])) {
            $model->indexSize = $map['IndexSize'];
        }
        if (isset($map['IsPartitionTable'])) {
            $model->isPartitionTable = $map['IsPartitionTable'];
        }
        if (isset($map['ParentTableName'])) {
            $model->parentTableName = $map['ParentTableName'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TimeLastUpdated'])) {
            $model->timeLastUpdated = $map['TimeLastUpdated'];
        }

        return $model;
    }
}
