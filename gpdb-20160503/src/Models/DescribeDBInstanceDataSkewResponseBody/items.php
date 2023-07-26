<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDataSkewResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The name of the database.
     *
     * @example adbtest
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The distribution key of the table.
     *
     * @example ItemId
     *
     * @var string
     */
    public $distributeKey;

    /**
     * @description The owner of the table.
     *
     * @example adbpguser
     *
     * @var string
     */
    public $owner;

    /**
     * @description The name of the schema.
     *
     * @example schema1
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The sequence number of the data skew case. All data skew cases are sorted by severity in descending order.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description The name of the table.
     *
     * @example tab1
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The total number of rows in the table.
     *
     * @example 100000
     *
     * @var string
     */
    public $tableSize;

    /**
     * @description The skew ratio of the table. Valid values: 0 to 100. Unit: %. A greater value indicates that the table is more severely skewed. A smaller value indicates less impact on query performance. A value of 0 indicates no data skew.
     *
     * @example 10.23
     *
     * @var string
     */
    public $tableSkew;

    /**
     * @description The time when the table was last deleted, inserted, or updated.
     *
     * @example 2020-09-08T20:00:00Z
     *
     * @var string
     */
    public $timeLastUpdated;
    protected $_name = [
        'databaseName'    => 'DatabaseName',
        'distributeKey'   => 'DistributeKey',
        'owner'           => 'Owner',
        'schemaName'      => 'SchemaName',
        'sequence'        => 'Sequence',
        'tableName'       => 'TableName',
        'tableSize'       => 'TableSize',
        'tableSkew'       => 'TableSkew',
        'timeLastUpdated' => 'TimeLastUpdated',
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
        if (null !== $this->distributeKey) {
            $res['DistributeKey'] = $this->distributeKey;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableSize) {
            $res['TableSize'] = $this->tableSize;
        }
        if (null !== $this->tableSkew) {
            $res['TableSkew'] = $this->tableSkew;
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
        if (isset($map['DistributeKey'])) {
            $model->distributeKey = $map['DistributeKey'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableSize'])) {
            $model->tableSize = $map['TableSize'];
        }
        if (isset($map['TableSkew'])) {
            $model->tableSkew = $map['TableSkew'];
        }
        if (isset($map['TimeLastUpdated'])) {
            $model->timeLastUpdated = $map['TimeLastUpdated'];
        }

        return $model;
    }
}
