<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The key of parameter N. If you do not specify the key and value of the parameter, ROS uses the default key and value in the template.
     *
     * >  The Parameters parameter is optional. If you set the Parameters parameter, you must set the Parameters.N.ParameterKey parameter.
     * @example Amount
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of parameter N.
     *
     * >  The Parameters parameter is optional. If you set the Parameters parameter, you must set the Parameters.N.ParameterValue parameter.
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
