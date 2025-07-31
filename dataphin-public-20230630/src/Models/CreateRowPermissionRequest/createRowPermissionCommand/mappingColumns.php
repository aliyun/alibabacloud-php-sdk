<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand;

use AlibabaCloud\Tea\Model;

class mappingColumns extends Model
{
    /**
     * @var string
     */
    public $columnDesc;

    /**
     * @description This parameter is required.
     *
     * @example business_id
     *
     * @var string
     */
    public $columnName;

    /**
     * @description This parameter is required.
     *
     * @example STRING
     *
     * @var string
     */
    public $columnType;
    protected $_name = [
        'columnDesc' => 'ColumnDesc',
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnDesc) {
            $res['ColumnDesc'] = $this->columnDesc;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mappingColumns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnDesc'])) {
            $model->columnDesc = $map['ColumnDesc'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }

        return $model;
    }
}
