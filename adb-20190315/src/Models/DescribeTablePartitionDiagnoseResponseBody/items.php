<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablePartitionDiagnoseResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Details of the inappropriate partitions.
     *
     * @example 202005,202006
     *
     * @var string
     */
    public $partitionDetail;

    /**
     * @description The number of partitions.
     *
     * @example 2
     *
     * @var int
     */
    public $partitionNumber;

    /**
     * @description The name of the database.
     *
     * @example test_db
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The table name.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'partitionDetail' => 'PartitionDetail',
        'partitionNumber' => 'PartitionNumber',
        'schemaName'      => 'SchemaName',
        'tableName'       => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitionDetail) {
            $res['PartitionDetail'] = $this->partitionDetail;
        }
        if (null !== $this->partitionNumber) {
            $res['PartitionNumber'] = $this->partitionNumber;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['PartitionDetail'])) {
            $model->partitionDetail = $map['PartitionDetail'];
        }
        if (isset($map['PartitionNumber'])) {
            $model->partitionNumber = $map['PartitionNumber'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
