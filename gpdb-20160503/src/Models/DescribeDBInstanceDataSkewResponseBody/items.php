<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDataSkewResponseBody;

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
     * @example ItemId
     *
     * @var string
     */
    public $distributeKey;

    /**
     * @example adbpguser
     *
     * @var string
     */
    public $owner;

    /**
     * @example schema1
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @example tab1
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 100000
     *
     * @var string
     */
    public $tableSize;

    /**
     * @example 10.23
     *
     * @var string
     */
    public $tableSkew;

    /**
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
