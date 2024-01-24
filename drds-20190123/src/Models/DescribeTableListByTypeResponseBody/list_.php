<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableListByTypeResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description Indicates the property of a table.
     *
     * @example single
     *
     * @var string
     */
    public $property;

    /**
     * @description Indicates the name of the table.
     *
     * @example employee_split
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'property'  => 'Property',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
