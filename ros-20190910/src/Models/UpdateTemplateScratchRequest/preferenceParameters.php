<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest;

use AlibabaCloud\Tea\Model;

class preferenceParameters extends Model
{
    /**
     * @description The name of a request parameter.
     *
     * For more information about ParameterKey, see **Additional description of request parameters**.
     *
     * >
     *   PreferenceParameters is optional. If you set PreferenceParameters, you must specify both ParameterKey and ParameterValue.
     *   If you set TemplateScratchType to ResourceImport, you must set ParameterKey to DeletionPolicy.
     *
     * @example DeletionPolicy
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The value of a request parameter. The value of ParameterValue varies based on the value of ParameterKey.
     *
     * For more information about ParameterValue, see **Additional description of request parameters**.
     *
     * >  PreferenceParameters is optional. If you set PreferenceParameters, you must specify both ParameterKey and ParameterValue.
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
