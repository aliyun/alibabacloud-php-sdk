<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersResponseBody\runningParameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The check code that indicates the valid values of the parameter.
     *
     * @example [0|1]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether the instance must be restarted for the modifications to take effect. Valid values:
     *
     *   **True**: The instance must be restarted for the modifications to take effect.
     *   **False**: The instance does not need to be restarted for the modifications to take effect. Modifications immediately take effect.
     *
     * @example true
     *
     * @var string
     */
    public $forceRestart;

    /**
     * @description Indicates whether the parameter can be reset. Valid values:
     *
     *   **False**: The parameter cannot be reset.
     *   **True**: The parameter can be reset.
     *
     * @example true
     *
     * @var string
     */
    public $modifiableStatus;

    /**
     * @description The description of the parameter.
     *
     * @example You can disable some dangerous commands, for example \"keys,flushdb,flushall\", the commands must be in [flushall,flushdb,keys,hgetall,eval,evalsha,script].
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example #no_loose_disabled-commands
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value of the parameter.
     *
     * @example keys,flushall,flushdb
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
