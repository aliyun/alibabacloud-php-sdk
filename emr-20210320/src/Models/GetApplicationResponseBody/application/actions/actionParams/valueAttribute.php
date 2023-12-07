<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions\actionParams;

use AlibabaCloud\Tea\Model;

class valueAttribute extends Model
{
    /**
     * @description 值表述。
     *
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 值步长。
     *
     * @example 2
     *
     * @var string
     */
    public $valueIncrementStep;

    /**
     * @description 最大值。
     *
     * @example 20
     *
     * @var string
     */
    public $valueMaximum;

    /**
     * @description 最小值。
     *
     * @example 1
     *
     * @var string
     */
    public $valueMinimum;

    /**
     * @description 属性值类型。
     *
     * @example STRING
     *
     * @var string
     */
    public $valueType;

    /**
     * @description 值单位。
     *
     * @example number
     *
     * @var string
     */
    public $valueUnit;
    protected $_name = [
        'description'        => 'Description',
        'valueIncrementStep' => 'ValueIncrementStep',
        'valueMaximum'       => 'ValueMaximum',
        'valueMinimum'       => 'ValueMinimum',
        'valueType'          => 'ValueType',
        'valueUnit'          => 'ValueUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->valueIncrementStep) {
            $res['ValueIncrementStep'] = $this->valueIncrementStep;
        }
        if (null !== $this->valueMaximum) {
            $res['ValueMaximum'] = $this->valueMaximum;
        }
        if (null !== $this->valueMinimum) {
            $res['ValueMinimum'] = $this->valueMinimum;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }
        if (null !== $this->valueUnit) {
            $res['ValueUnit'] = $this->valueUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ValueIncrementStep'])) {
            $model->valueIncrementStep = $map['ValueIncrementStep'];
        }
        if (isset($map['ValueMaximum'])) {
            $model->valueMaximum = $map['ValueMaximum'];
        }
        if (isset($map['ValueMinimum'])) {
            $model->valueMinimum = $map['ValueMinimum'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }
        if (isset($map['ValueUnit'])) {
            $model->valueUnit = $map['ValueUnit'];
        }

        return $model;
    }
}
