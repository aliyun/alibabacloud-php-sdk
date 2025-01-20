<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param;

use AlibabaCloud\Dara\Model;

class tableIncludes extends Model
{
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var string
     */
    public $tableWhere;
    protected $_name = [
        'tableName'  => 'TableName',
        'tableWhere' => 'TableWhere',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
