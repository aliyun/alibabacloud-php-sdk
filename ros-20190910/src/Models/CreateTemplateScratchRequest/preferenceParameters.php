<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;

use AlibabaCloud\Tea\Model;

class preferenceParameters extends Model
{
    /**
     * @description The name of the parameter.
     *
     * For more information about the valid values of the ParameterKey parameter, see the "**Additional information about request parameters**" section of this topic.
     *
     * >
     *   The PreferenceParameters parameter is optional. If you want to specify the PreferenceParameters parameter, you must specify both the ParameterKey and ParameterValue parameters.
     *   If you set the TemplateScratchType parameter to ResourceImport, you must set the ParameterKey parameter to DeletionPolicy.
     *
     * @example DeletionPolicy
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of the parameter. The value of the ParameterValue parameter varies based on the value of the ParameterKey parameter.
     *
     * For more information about the valid values of the ParameterValue parameter, see the "**Additional information about request parameters**" section of this topic.
     *
     * >  The PreferenceParameters parameter is optional. If you want to specify the PreferenceParameters parameter, you must specify both the ParameterKey and ParameterValue parameters.
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
