<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes\checkDetails\rules;

use AlibabaCloud\Tea\Model;

class paramList extends Model
{
    /**
     * @example 0,1,2,3
     *
     * @var string
     */
    public $enumValue;

    /**
     * @example 999
     *
     * @var int
     */
    public $maxValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $minValue;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 7
     *
     * @var string
     */
    public $paramDefaultValue;

    /**
     * @example The setting value is 0 means no definition, 1 means success, 2 means failure, 3 means success and failure
     *
     * @var string
     */
    public $paramDesc;

    /**
     * @description Queries baseline types.
     *
     * @example range_val
     *
     * @var string
     */
    public $paramName;

    /**
     * @example 1
     *
     * @var int
     */
    public $paramType;
    protected $_name = [
        'enumValue'         => 'EnumValue',
        'maxValue'          => 'MaxValue',
        'minValue'          => 'MinValue',
        'paramDefaultValue' => 'ParamDefaultValue',
        'paramDesc'         => 'ParamDesc',
        'paramName'         => 'ParamName',
        'paramType'         => 'ParamType',
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

        return $model;
    }
}
