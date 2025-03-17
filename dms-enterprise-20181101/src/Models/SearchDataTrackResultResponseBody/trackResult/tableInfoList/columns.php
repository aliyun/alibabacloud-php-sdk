<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody\trackResult\tableInfoList;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The name of the column.
     *
     * @example basic_platform
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The position of the column.
     *
     * @example 1
     *
     * @var int
     */
    public $columnPosition;

    /**
     * @description The data type of the column. Examples: BIGINT, INT, and VARCHAR.
     *
     * @example BIGINT
     *
     * @var string
     */
    public $columnType;

    /**
     * @description Indicates whether the column is a virtual column. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $fictive;
    protected $_name = [
        'columnName' => 'ColumnName',
        'columnPosition' => 'ColumnPosition',
        'columnType' => 'ColumnType',
        'fictive' => 'Fictive',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
