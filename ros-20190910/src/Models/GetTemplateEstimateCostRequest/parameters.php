<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The name of parameter N. If you do not specify the name and value of a parameter, ROS uses the default name and value that are specified in the template.
     *
     * Examples:
     *
     *   Parameters.1.ParameterKey: `Name`
     *   Parameters.2.ParameterKey: `Netmode`
     *
     * >  The Parameters parameter is optional. If you want to specify Parameters, you must specify both Parameters.N.ParameterKey and Parameters.N.ParameterValue.
     * @example Name
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of parameter N.
     *
     * Examples:
     *
     *   Parameters.1.ParameterValue: `DemoEip`
     *   Parameters.2.ParameterValue: `public`
     *
     * >  The Parameters parameter is optional. If you want to specify Parameters, you must specify both Parameters.N.ParameterKey and Parameters.N.ParameterValue.
     * @example DemoEip
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'parameterKey'   => 'ParameterKey',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
