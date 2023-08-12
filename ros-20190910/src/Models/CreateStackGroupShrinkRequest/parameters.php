<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupShrinkRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The key of parameter N. If you do not specify the key and value of a parameter, ROS uses the default name and value that are defined in the template.
     *
     * > Parameters is optional. If you specify Parameters, you must also specify Parameters.N.ParameterKey.
     * @example Amount
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of parameter N.
     *
     * > Parameters is optional. If you specify Parameters, you must also specify Parameters.N.ParameterValue.
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
