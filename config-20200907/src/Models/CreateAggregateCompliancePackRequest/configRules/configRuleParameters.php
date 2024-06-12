<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackRequest\configRules;

use AlibabaCloud\Tea\Model;

class configRuleParameters extends Model
{
    /**
     * @description The name of the input parameter.
     *
     * You must specify both `ParameterName` and `ParameterValue` or neither of them. If the managed rule has an input parameter but no default value is specified, you must specify this parameter. You can call the [ListCompliancePackTemplates](https://help.aliyun.com/document_detail/261176.html) operation to obtain the names of input parameters of the managed rule.
     * @example bandwidth
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value of the input parameter.
     *
     * You must specify both `ParameterName` and `ParameterValue` or neither of them. If the managed rule has an input parameter but no default value is specified, you must specify this parameter. You can call the [ListCompliancePackTemplates](https://help.aliyun.com/document_detail/261176.html) operation to obtain the values of input parameters of the managed rule.
     * @example 10
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'parameterName'  => 'ParameterName',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
