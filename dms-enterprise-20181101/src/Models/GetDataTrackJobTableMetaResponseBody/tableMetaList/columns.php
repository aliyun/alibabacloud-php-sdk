<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobTableMetaResponseBody\tableMetaList;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @example claimantno
     *
     * @var string
     */
    public $columnName;

    /**
     * @example 1
     *
     * @var int
     */
    public $columnPosition;

    /**
     * @example BIGINT
     *
     * @var string
     */
    public $columnType;

    /**
     * @example false
     *
     * @var bool
     */
    public $fictive;
    protected $_name = [
        'charset'        => 'Charset',
        'columnName'     => 'ColumnName',
        'columnPosition' => 'ColumnPosition',
        'columnType'     => 'ColumnType',
        'fictive'        => 'Fictive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnPosition) {
            $res['ColumnPosition'] = $this->columnPosition;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->fictive) {
            $res['Fictive'] = $this->fictive;
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
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnPosition'])) {
            $model->columnPosition = $map['ColumnPosition'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['Fictive'])) {
            $model->fictive = $map['Fictive'];
        }

        return $model;
    }
}
