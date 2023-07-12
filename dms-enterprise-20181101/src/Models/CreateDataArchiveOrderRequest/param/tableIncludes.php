<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param;

use AlibabaCloud\Tea\Model;

class tableIncludes extends Model
{
    /**
     * @example table1
     *
     * @var string
     */
    public $tableName;

    /**
     * @example gmt_modified<\"${time}\"
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
