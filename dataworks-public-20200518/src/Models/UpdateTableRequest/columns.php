<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest;

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
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $isPartitionCol;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $seqNumber;
    protected $_name = [
        'columnName'     => 'ColumnName',
        'columnNameCn'   => 'ColumnNameCn',
        'columnType'     => 'ColumnType',
        'comment'        => 'Comment',
        'isPartitionCol' => 'IsPartitionCol',
        'length'         => 'Length',
        'seqNumber'      => 'SeqNumber',
    ];

    public function validate()
    {
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->isPartitionCol) {
            $res['IsPartitionCol'] = $this->isPartitionCol;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->seqNumber) {
            $res['SeqNumber'] = $this->seqNumber;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['IsPartitionCol'])) {
            $model->isPartitionCol = $map['IsPartitionCol'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['SeqNumber'])) {
            $model->seqNumber = $map['SeqNumber'];
        }

        return $model;
    }
}
