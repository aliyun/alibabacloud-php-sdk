<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\SearchInventoryRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The name of the component property. Valid values of N: 1 to 5. Different components have different property names. You can call the [GetInventorySchema](https://api.aliyun.com/#/?product=oos\&version=2019-06-01\&api=GetInventorySchema) operation to query the property names of different components. For example, the ACS:InstanceInformation component has the InstanceId property. Therefore, you can set this parameter to ACS:InstanceInformation.InstanceId.
     *
     * @example ACS:InstanceInformation.InstanceId
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
     * @description The property values to query.
     *
     * @example i-bp1cpoxxxxxxxxxxxxxx
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
