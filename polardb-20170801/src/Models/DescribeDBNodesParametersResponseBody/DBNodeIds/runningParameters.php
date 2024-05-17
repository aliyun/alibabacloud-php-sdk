<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody\DBNodeIds;

use AlibabaCloud\Tea\Model;

class runningParameters extends Model
{
    /**
     * @description The valid values of the parameter.
     *
     * @example [utf8|latin1|gbk|utf8mb4]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description The data type of the parameter value. Valid values:
     *
     *   **INT**
     *   **STRING**
     *   **B**
     *
     * @example INT
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The default value of the parameter.
     *
     * @example utf8
     *
     * @var string
     */
    public $defaultParameterValue;

    /**
     * @description A divisor of the parameter. For a parameter of the integer or byte type, the valid values must be a multiple of Factor unless you set Factor to 0.
     *
     * @example 20
     *
     * @var string
     */
    public $factor;

    /**
     * @description Indicates whether a cluster restart is required to allow the parameter modification to take effect. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $forceRestart;

    /**
     * @description Indicates whether the parameter can be modified. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $isModifiable;

    /**
     * @description Indicates whether the parameter is a global parameter. Valid values:
     *
     *   **0**: yes. The modified parameter value is synchronized to other nodes.
     *   **1**: no. You can customize the nodes to which the modified parameter value can be synchronized to.
     *
     * @example 1
     *
     * @var string
     */
    public $isNodeAvailable;

    /**
     * @description The dependencies of the parameter.
     *
     * @example utf8
     *
     * @var string
     */
    public $paramRelyRule;

    /**
     * @description The description of the parameter.
     *
     * @example The server\\"s default character set.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example character_set_server
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The status of the parameter. Valid values:
     *
     *   **normal**
     *   **modifying**
     *
     * @example normal
     *
     * @var string
     */
    public $parameterStatus;

    /**
     * @description The value of the parameter.
     *
     * @example utf8
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'checkingCode'          => 'CheckingCode',
        'dataType'              => 'DataType',
        'defaultParameterValue' => 'DefaultParameterValue',
        'factor'                => 'Factor',
        'forceRestart'          => 'ForceRestart',
        'isModifiable'          => 'IsModifiable',
        'isNodeAvailable'       => 'IsNodeAvailable',
        'paramRelyRule'         => 'ParamRelyRule',
        'parameterDescription'  => 'ParameterDescription',
        'parameterName'         => 'ParameterName',
        'parameterStatus'       => 'ParameterStatus',
        'parameterValue'        => 'ParameterValue',
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
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->defaultParameterValue) {
            $res['DefaultParameterValue'] = $this->defaultParameterValue;
        }
        if (null !== $this->factor) {
            $res['Factor'] = $this->factor;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->isModifiable) {
            $res['IsModifiable'] = $this->isModifiable;
        }
        if (null !== $this->isNodeAvailable) {
            $res['IsNodeAvailable'] = $this->isNodeAvailable;
        }
        if (null !== $this->paramRelyRule) {
            $res['ParamRelyRule'] = $this->paramRelyRule;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterStatus) {
            $res['ParameterStatus'] = $this->parameterStatus;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DefaultParameterValue'])) {
            $model->defaultParameterValue = $map['DefaultParameterValue'];
        }
        if (isset($map['Factor'])) {
            $model->factor = $map['Factor'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['IsModifiable'])) {
            $model->isModifiable = $map['IsModifiable'];
        }
        if (isset($map['IsNodeAvailable'])) {
            $model->isNodeAvailable = $map['IsNodeAvailable'];
        }
        if (isset($map['ParamRelyRule'])) {
            $model->paramRelyRule = $map['ParamRelyRule'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterStatus'])) {
            $model->parameterStatus = $map['ParameterStatus'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
