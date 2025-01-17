<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody\checkFixDetails\rules;

use AlibabaCloud\Dara\Model;

class paramList extends Model
{
    /**
     * @var string
     */
    public $enumValue;
    /**
     * @var int
     */
    public $maxValue;
    /**
     * @var int
     */
    public $minValue;
    /**
     * @var string
     */
    public $paramDefaultValue;
    /**
     * @var string
     */
    public $paramDesc;
    /**
     * @var string
     */
    public $paramName;
    /**
     * @var int
     */
    public $paramType;
    /**
     * @var string
     */
    public $ruleId;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'enumValue'         => 'EnumValue',
        'maxValue'          => 'MaxValue',
        'minValue'          => 'MinValue',
        'paramDefaultValue' => 'ParamDefaultValue',
        'paramDesc'         => 'ParamDesc',
        'paramName'         => 'ParamName',
        'paramType'         => 'ParamType',
        'ruleId'            => 'RuleId',
        'value'             => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enumValue) {
            $res['EnumValue'] = $this->enumValue;
        }

        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }

        if (null !== $this->paramDefaultValue) {
            $res['ParamDefaultValue'] = $this->paramDefaultValue;
        }

        if (null !== $this->paramDesc) {
            $res['ParamDesc'] = $this->paramDesc;
        }

        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['EnumValue'])) {
            $model->enumValue = $map['EnumValue'];
        }

        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }

        if (isset($map['ParamDefaultValue'])) {
            $model->paramDefaultValue = $map['ParamDefaultValue'];
        }

        if (isset($map['ParamDesc'])) {
            $model->paramDesc = $map['ParamDesc'];
        }

        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
