<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponseBody\runningParameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The valid values of the parameter.
     *
     * @example [33554432-268435456]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether a restart is required for parameter modifications to take effect.
     *
     *   **false**: A restart is not required. Modifications take effect immediately.
     *   **true**: A restart is required for modifications to take effect.
     *
     * @example false
     *
     * @var string
     */
    public $forceRestart;

    /**
     * @description Indicates whether the parameter is modifiable.
     *
     *   **false**: The parameter is not modifiable.
     *   **true**: The parameter is modifiable.
     *
     * @example true
     *
     * @var string
     */
    public $modifiableStatus;

    /**
     * @description The description of the parameter.
     *
     * @example The maximum memory bytes that sort stage may use, default is 33554432(i.e. 32MB)
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example setParameter.internalQueryExecMaxBlockingSortBytes
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value of the parameter.
     *
     * @example 33554432
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
