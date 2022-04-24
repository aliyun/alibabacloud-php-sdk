<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\runningParameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @var string
     */
    public $checkingCode;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $defaultParameterValue;

    /**
     * @var bool
     */
    public $forceRestart;

    /**
     * @var bool
     */
    public $isModifiable;

    /**
     * @var string
     */
    public $isNodeAvailable;

    /**
     * @var string
     */
    public $paramRelyRule;

    /**
     * @var string
     */
    public $parameterDescription;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $parameterStatus;

    /**
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'checkingCode'          => 'CheckingCode',
        'dataType'              => 'DataType',
        'defaultParameterValue' => 'DefaultParameterValue',
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
     * @return parameter
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
