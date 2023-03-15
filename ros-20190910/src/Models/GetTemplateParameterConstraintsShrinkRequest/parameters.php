<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsShrinkRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The name of parameter N in the template.
     *
     * >  The Parameters parameter is optional. If you specify the Parameters parameter, you must specify the Parameters.N.ParameterKey parameter.
     * @example ZoneInfo
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of parameter N in the template.
     *
     * >  The Parameters parameter is optional. If you specify the Parameters parameter, you must specify the Parameters.N.ParameterValue parameter.
     * @example cn-hangzhou-h
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
