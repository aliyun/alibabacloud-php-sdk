<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The name of parameter N that is defined in the template. If you do not specify the name and value of a parameter, ROS uses the default name and value in the template.
     *
     * >  The Parameters parameter is optional. If you specify Parameters, you must specify both Parameters.N.ParameterKey and Parameters.N.ParameterValue.
     * @example InstanceId
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of parameter N that is defined in the template.
     *
     * >  The Parameters parameter is optional. If you specify Parameters, you must specify both Parameters.N.ParameterKey and Parameters.N.ParameterValue.
     * @example i-xxxxxx
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
