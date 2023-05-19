<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList\attribute\values;

use AlibabaCloud\Tea\Model;

class attributeValue extends Model
{
    /**
     * @description The attribute value that corresponds to the module code.
     *
     * @example 2 Cores and 4 GB Memory (Basic Edition)
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the module values.
     *
     * @example Connections: 4,000 IOPS is related to storage space
     *
     * @var string
     */
    public $remark;

    /**
     * @description The type of the attribute value that corresponds to the module code. Valid values:
     *
     *   single_float: single value
     *   range_float: range value
     *
     * @example single_string
     *
     * @var string
     */
    public $type;

    /**
     * @description The attribute value that corresponds to the module code.
     *
     * >  If the Type parameter is set to range_float, the valid values of this parameter range from 1024 to 1024000. A value of 1024 indicates that the step size is 1024.
     * @example mysql.n2.medium.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'   => 'Name',
        'remark' => 'Remark',
        'type'   => 'Type',
        'value'  => 'Value',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributeValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
