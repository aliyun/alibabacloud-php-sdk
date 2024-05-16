<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The comment of the field.
     *
     * This parameter is required.
     * @example abc
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The name of the field.
     *
     * @var string
     */
    public $columnNameCn;

    /**
     * @description The sequence number of the field. If the field is a partition field, this parameter is not supported.
     *
     * This parameter is required.
     * @example string
     *
     * @var string
     */
    public $columnType;

    /**
     * @description The type of the field. For more information, see MaxCompute field types.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the associated topic.
     *
     * @example 0
     *
     * @var bool
     */
    public $isPartitionCol;

    /**
     * @description Specifies whether the field is a partition field. Valid values: 0 and 1. The value 0 indicates that the field is not a partition field. The value 1 indicates that the field is a partition field.
     *
     * @example 10
     *
     * @var int
     */
    public $length;

    /**
     * @description The length of the field.
     *
     * @example 1
     *
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
