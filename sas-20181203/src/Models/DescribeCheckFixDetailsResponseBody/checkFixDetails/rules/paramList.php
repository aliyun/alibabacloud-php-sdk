<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody\checkFixDetails\rules;

use AlibabaCloud\Tea\Model;

class paramList extends Model
{
    /**
     * @description The options that can be selected for the rule parameter if the value of the ParamType parameter is 2.
     *
     * @example 0,1,2,3
     *
     * @var string
     */
    public $enumValue;

    /**
     * @description The maximum value of the rule parameter.
     *
     * @example 24
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description The minimum value of the rule parameter.
     *
     * @example 5
     *
     * @var int
     */
    public $minValue;

    /**
     * @description The default value of the rule parameter.
     *
     * @example 5
     *
     * @var string
     */
    public $paramDefaultValue;

    /**
     * @description The description of the rule parameter.
     *
     * @example The setting value is 0 means no definition, 1 means success, 2 means failure, 3 means success and failure
     *
     * @var string
     */
    public $paramDesc;

    /**
     * @description The name of the rule parameter.
     *
     * @example range_val
     *
     * @var string
     */
    public $paramName;

    /**
     * @description The type of the rule parameter. Valid values:
     *
     *   **1**: input
     *   **2**: selection
     *
     * @example 1
     *
     * @var int
     */
    public $paramType;

    /**
     * @description The ID of the rule.
     *
     * @example pwd_reuse.system_auth
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The specified value of the rule parameter.
     *
     * @example 18
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return paramList
     */
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
