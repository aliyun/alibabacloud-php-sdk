<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobTableMetaResponseBody\tableMetaList;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var int
     */
    public $columnPosition;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var bool
     */
    public $fictive;
    protected $_name = [
        'charset' => 'Charset',
        'columnName' => 'ColumnName',
        'columnPosition' => 'ColumnPosition',
        'columnType' => 'ColumnType',
        'fictive' => 'Fictive',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
