<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\modules\module\properties\property\propertyValues;

use AlibabaCloud\Tea\Model;

class propertyValue extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 123
     *
     * @var string
     */
    public $max;

    /**
     * @example 11
     *
     * @var string
     */
    public $min;

    /**
     * @example abc
     *
     * @var string
     */
    public $remark;

    /**
     * @example 1
     *
     * @var string
     */
    public $step;

    /**
     * @example single_string
     *
     * @var string
     */
    public $type;

    /**
     * @example m-28e213e7t
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'displayName' => 'DisplayName',
        'max'         => 'Max',
        'min'         => 'Min',
        'remark'      => 'Remark',
        'step'        => 'Step',
        'type'        => 'Type',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
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
     * @return propertyValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
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
