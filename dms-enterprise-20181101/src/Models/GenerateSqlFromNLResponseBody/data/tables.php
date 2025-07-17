<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @example ins_1.db1.table1
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'tableName' => 'TableName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
