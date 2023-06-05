<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableRequest;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The comment of the field.
     *
     * @example columnName1
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The name of the field.
     *
     * You can call the CreateTable operation to configure a maximum of 1,000 fields.
     * @var string
     */
    public $columnNameCn;

    /**
     * @description The sequence number of the field. You can use this parameter to specify how fields are sorted in a table. By default, fields are sorted in the order in which requests are created.
     *
     * If the field is a partition field, this parameter is not supported.
     * @example string
     *
     * @var string
     */
    public $columnType;

    /**
     * @description The data type of the field.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the topic.
     *
     * @example true
     *
     * @var bool
     */
    public $isPartitionCol;

    /**
     * @description Specifies whether the current field is a partition field.
     *
     * @example 10
     *
     * @var int
     */
    public $length;

    /**
     * @description The length of the field. For more information, see [MaxCompute V2.0 data type edition](~~159541#concept-2454988~~).
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
