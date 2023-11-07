<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginParam;

use AlibabaCloud\Tea\Model;

class tableIncludes extends Model
{
    /**
     * @description The name of the table.
     *
     * @example tm_insured_cb
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The filter conditions.
     *
     * @example id<1000 or gmt_create<\"2023-05-14 16:00:57\"
     *
     * @var string
     */
    public $tableWhere;
    protected $_name = [
        'tableName'  => 'TableName',
        'tableWhere' => 'TableWhere',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableWhere) {
            $res['TableWhere'] = $this->tableWhere;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableIncludes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableWhere'])) {
            $model->tableWhere = $map['TableWhere'];
        }

        return $model;
    }
}
