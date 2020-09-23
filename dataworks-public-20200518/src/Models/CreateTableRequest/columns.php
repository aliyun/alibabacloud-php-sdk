<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableRequest;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnNameCn;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var int
     */
    public $seqNumber;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $isPartitionCol;

    /**
     * @var int
     */
    public $isPrimaryKey;

    /**
     * @var int
     */
    public $isNullable;

    /**
     * @var string
     */
    public $comment;
    protected $_name = [
        'columnName'     => 'ColumnName',
        'columnNameCn'   => 'ColumnNameCn',
        'columnType'     => 'ColumnType',
        'seqNumber'      => 'SeqNumber',
        'length'         => 'Length',
        'isPartitionCol' => 'IsPartitionCol',
        'isPrimaryKey'   => 'IsPrimaryKey',
        'isNullable'     => 'IsNullable',
        'comment'        => 'Comment',
    ];

    public function validate()
    {
        Model::validateRequired('columnName', $this->columnName, true);
        Model::validateRequired('columnType', $this->columnType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnNameCn) {
            $res['ColumnNameCn'] = $this->columnNameCn;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->seqNumber) {
            $res['SeqNumber'] = $this->seqNumber;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->isPartitionCol) {
            $res['IsPartitionCol'] = $this->isPartitionCol;
        }
        if (null !== $this->isPrimaryKey) {
            $res['IsPrimaryKey'] = $this->isPrimaryKey;
        }
        if (null !== $this->isNullable) {
            $res['IsNullable'] = $this->isNullable;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnNameCn'])) {
            $model->columnNameCn = $map['ColumnNameCn'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['SeqNumber'])) {
            $model->seqNumber = $map['SeqNumber'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['IsPartitionCol'])) {
            $model->isPartitionCol = $map['IsPartitionCol'];
        }
        if (isset($map['IsPrimaryKey'])) {
            $model->isPrimaryKey = $map['IsPrimaryKey'];
        }
        if (isset($map['IsNullable'])) {
            $model->isNullable = $map['IsNullable'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        return $model;
    }
}
