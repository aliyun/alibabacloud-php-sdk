<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersResponseBody;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The current value of the configuration parameter.
     *
     * @example 10800000
     *
     * @var string
     */
    public $currentValue;

    /**
     * @description Indicates whether a restart is required for parameter modifications to take effect. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var string
     */
    public $forceRestartInstance;

    /**
     * @description Indicates whether the configuration parameter can be modified. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $isChangeableConfig;

    /**
     * @description The valid values of the configuration parameter.
     *
     * @example [0-2147483647]
     *
     * @var string
     */
    public $optionalRange;

    /**
     * @description The description of the configuration parameter.
     *
     * @example Sets the maximum allowed duration of any statement, A value of 0 turns off the timeout.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the configuration parameter.
     *
     * @example statement_timeout
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The default value of the configuration parameter.
     *
     * @example 10800000
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'currentValue'         => 'CurrentValue',
        'forceRestartInstance' => 'ForceRestartInstance',
        'isChangeableConfig'   => 'IsChangeableConfig',
        'optionalRange'        => 'OptionalRange',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'parameterValue'       => 'ParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentValue) {
            $res['CurrentValue'] = $this->currentValue;
        }
        if (null !== $this->forceRestartInstance) {
            $res['ForceRestartInstance'] = $this->forceRestartInstance;
        }
        if (null !== $this->isChangeableConfig) {
            $res['IsChangeableConfig'] = $this->isChangeableConfig;
        }
        if (null !== $this->optionalRange) {
            $res['OptionalRange'] = $this->optionalRange;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
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
        if (isset($map['CurrentValue'])) {
            $model->currentValue = $map['CurrentValue'];
        }
        if (isset($map['ForceRestartInstance'])) {
            $model->forceRestartInstance = $map['ForceRestartInstance'];
        }
        if (isset($map['IsChangeableConfig'])) {
            $model->isChangeableConfig = $map['IsChangeableConfig'];
        }
        if (isset($map['OptionalRange'])) {
            $model->optionalRange = $map['OptionalRange'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
