<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;

use AlibabaCloud\Tea\Model;

class preferenceParameters extends Model
{
    /**
     * @description The parameter name.
     *
     * For more information about the valid values of ParameterKey, see the "**Additional information about request parameters**" section of this topic.
     *
     * >
     *
     *   PreferenceParameters is optional. If you specify PreferenceParameters, you must specify ParameterKey and ParameterValue.
     *
     *   You must set ParameterKey to DeletionPolicy when TemplateScratchType is set to ResourceImport.
     *
     * This parameter is required.
     * @example DeletionPolicy
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The parameter value. The value is an assignment to the parameter key.
     *
     * For more information about the valid values of ParameterValue, see the "**Additional information about request parameters**" section of this topic.
     *
     * This parameter is required.
     * @example Retain
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
     * @return preferenceParameters
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
