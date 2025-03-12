<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsSchema;

use AlibabaCloud\Tea\Model;

class columnSchema extends Model
{
    /**
     * @example UserPrincipalName
     *
     * @var string
     */
    public $columnName;

    /**
     * @example String
     *
     * @var string
     */
    public $columnType;
    protected $_name = [
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
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
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }

        return $model;
    }
}
