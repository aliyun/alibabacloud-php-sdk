<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInventoryEntriesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The name of the component property. Valid values of N: 1 to 5.
     *
     * @example PlatformName
     *
     * @var string
     */
    public $name;

    /**
     * @description The comparison operator that is used to filter property values. Valid values of N: 1 to 5. Valid values:
     *
     *   Equal
     *   NotEqual
     *   BeginWith
     *   LessThan
     *   GreaterThan
     *
     * @example Equal
     *
     * @var string
     */
    public $operator;

    /**
     * @description The values of properties. Valid values of the first N: 1 to 5. Valid values of the second N: 1 to 20.
     *
     * @example test
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'name'     => 'Name',
        'operator' => 'Operator',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
