<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates\configRules;

use AlibabaCloud\Tea\Model;

class configRuleParameters extends Model
{
    /**
     * @description The name of the input parameter of the managed rule.
     *
     * @example days
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value of the input parameter of the managed rule.
     *
     * @example 90
     *
     * @var string
     */
    public $parameterValue;

    /**
     * @description Indicates whether the parameter is required in the managed rule. Valid values:
     *
     *   true: required
     *   false: optional
     *
     * @example true
     *
     * @var bool
     */
    public $required;
    protected $_name = [
        'parameterName'  => 'ParameterName',
        'parameterValue' => 'ParameterValue',
        'required'       => 'Required',
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
        if (null !== $this->required) {
            $res['Required'] = $this->required;
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
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
