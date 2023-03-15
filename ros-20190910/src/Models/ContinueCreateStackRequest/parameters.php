<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The name of template parameter N that you want to use to override another parameter. If you do not specify the name and value of a template parameter, ROS uses the name and value specified in the previous operation that was performed to create the stack. Maximum value of N: 200.
     *
     * >  This parameter takes effect only when the Mode parameter is set to Recreate.
     * @example Amount
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of template parameter N that you want to use to override another parameter. Maximum value of N: 200.
     *
     * For ROS stacks, the following limits are imposed on the template parameters that you use to override other parameters:
     *
     *   You cannot change the condition values in the Conditions section of a template from true to false or from false to true.
     *   The template parameters can be referenced only by resources that ROS continues to create.
     *
     * >  This parameter takes effect only when the Mode parameter is set to Recreate.
     * @example 12
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
