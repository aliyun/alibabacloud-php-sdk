<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data;

use AlibabaCloud\Dara\Model;

class mappingColumns extends Model
{
    /**
     * @var string
     */
    public $columnDesc;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnType;
    protected $_name = [
        'columnDesc' => 'ColumnDesc',
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
