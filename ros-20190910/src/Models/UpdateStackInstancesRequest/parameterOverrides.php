<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesRequest;

use AlibabaCloud\Tea\Model;

class parameterOverrides extends Model
{
    /**
     * @description The name of parameter N that you want to use to override a specific parameter. If you do not specify the name of parameter N, ROS uses the name that you specify when you create the stack group.
     *
     * >
     *   The ParameterOverrides parameter is optional.
     *   If you specify the ParameterOverrides parameter, you must specify the ParameterOverrides.N.ParameterKey and ParameterOverrides.N.ParameterValue parameters.
     *
     * @example Amount
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of parameter N that you want to use to override a specific parameter. If you do not specify the name and value of parameter N, ROS uses the name and value that you specify when you create the stack group.
     *
     * >
     *   The ParameterOverrides parameter is optional.
     *   If you specify the ParameterOverrides parameter, you must specify the ParameterOverrides.N.ParameterKey and ParameterOverrides.N.ParameterValue parameters.
     *
     * @example 1
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
     * @return parameterOverrides
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
