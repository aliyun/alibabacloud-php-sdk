<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $columnNameCn;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $comment;

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
     * @var bool
     */
    public $isPartitionCol;
    protected $_name = [
        'columnNameCn'   => 'ColumnNameCn',
        'columnName'     => 'ColumnName',
        'comment'        => 'Comment',
        'columnType'     => 'ColumnType',
        'seqNumber'      => 'SeqNumber',
        'length'         => 'Length',
        'isPartitionCol' => 'IsPartitionCol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnNameCn) {
            $res['ColumnNameCn'] = $this->columnNameCn;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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
        if (isset($map['ColumnNameCn'])) {
            $model->columnNameCn = $map['ColumnNameCn'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
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

        return $model;
    }
}
