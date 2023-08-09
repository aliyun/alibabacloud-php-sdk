<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponseBody\runningParameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description 实例的角色类型，取值说明：
     *
     * - **db**：shard角色。
     * - **cs**：config server角色。
     * - **mongos**：mongos角色。
     * @example db
     *
     * @var string
     */
    public $characterType;

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
     *   **true**: A restart is required for parameter modifications to take effect.
     *
     * @example false
     *
     * @var string
     */
    public $forceRestart;

    /**
     * @description Indicates whether the parameter value can be changed.
     *
     *   **false**: The parameter value cannot be changed.
     *   **true**: The parameter value can be changed.
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
        'characterType'        => 'CharacterType',
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
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
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
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
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
