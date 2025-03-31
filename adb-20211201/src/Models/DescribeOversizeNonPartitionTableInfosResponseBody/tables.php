<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeOversizeNonPartitionTableInfosResponseBody;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $indexSize;

    /**
     * @var int
     */
    public $localDataSize;

    /**
     * @var int
     */
    public $primaryKeySize;

    /**
     * @var int
     */
    public $remoteDataSize;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var float
     */
    public $spaceRatio;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dataSize' => 'DataSize',
        'indexSize' => 'IndexSize',
        'localDataSize' => 'LocalDataSize',
        'primaryKeySize' => 'PrimaryKeySize',
        'remoteDataSize' => 'RemoteDataSize',
        'rowCount' => 'RowCount',
        'schemaName' => 'SchemaName',
        'spaceRatio' => 'SpaceRatio',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->indexSize) {
            $res['IndexSize'] = $this->indexSize;
        }

        if (null !== $this->localDataSize) {
            $res['LocalDataSize'] = $this->localDataSize;
        }

        if (null !== $this->primaryKeySize) {
            $res['PrimaryKeySize'] = $this->primaryKeySize;
        }

        if (null !== $this->remoteDataSize) {
            $res['RemoteDataSize'] = $this->remoteDataSize;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->spaceRatio) {
            $res['SpaceRatio'] = $this->spaceRatio;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['IndexSize'])) {
            $model->indexSize = $map['IndexSize'];
        }

        if (isset($map['LocalDataSize'])) {
            $model->localDataSize = $map['LocalDataSize'];
        }

        if (isset($map['PrimaryKeySize'])) {
            $model->primaryKeySize = $map['PrimaryKeySize'];
        }

        if (isset($map['RemoteDataSize'])) {
            $model->remoteDataSize = $map['RemoteDataSize'];
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['SpaceRatio'])) {
            $model->spaceRatio = $map['SpaceRatio'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
