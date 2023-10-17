<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponseBody\configParameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The valid values of the parameter.
     *
     * @example [0-65536]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether a restart is required for parameter modifications to take effect. Valid values:
     *
     *   **false**: A restart is not required. Modifications take effect immediately.
     *   **true**: A restart is required for parameter modifications to take effect.
     *
     * @example true
     *
     * @var bool
     */
    public $forceRestart;

    /**
     * @description Indicates whether the parameter value can be modified. Valid values:
     *
     *   **false**: The parameter value cannot be modified.
     *   **true**: The parameter value can be modified.
     *
     * @example true
     *
     * @var bool
     */
    public $modifiableStatus;

    /**
     * @description The description of the parameter.
     *
     * @example The threshold in milliseconds at which the database profiler considers a query slow, default is 100.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example operationProfiling.slowOpThresholdMs
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value of the parameter.
     *
     * @example 200
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'checkingCode'         => 'CheckingCode',
        'forceRestart'         => 'ForceRestart',
        'modifiableStatus'     => 'ModifiableStatus',
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
        if (null !== $this->checkingCode) {
            $res['CheckingCode'] = $this->checkingCode;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->modifiableStatus) {
            $res['ModifiableStatus'] = $this->modifiableStatus;
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
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['ModifiableStatus'])) {
            $model->modifiableStatus = $map['ModifiableStatus'];
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
