<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\commonTransferConfig;

use AlibabaCloud\Tea\Model;

class customColumns extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $expression;
    protected $_name = [
        'columnName' => 'ColumnName',
        'expression' => 'Expression',
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
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customColumns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        return $model;
    }
}
