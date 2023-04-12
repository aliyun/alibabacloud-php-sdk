<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest\configRules;

use AlibabaCloud\Tea\Model;

class configRuleParameters extends Model
{
    /**
     * @description The name of the input parameter.
     *
     * You must configure the `ParameterName` and `ParameterValue` parameters or neither of them. If the managed rule has an input parameter but no default value exists, you must configure this parameter. For more information about how to obtain the name of an input parameter for a managed rule, see [ListCompliancePackTemplates](~~261176~~).
     * @example bandwidth
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value of the input parameter.
     *
     * You must configure the `ParameterName` and `ParameterValue` parameters or neither of them. If the managed rule has an input parameter but no default value exists you must configure this parameter. For more information about how to obtain the expected value of an input parameter for a managed rule, see [ListCompliancePackTemplates](~~261176~~).
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
