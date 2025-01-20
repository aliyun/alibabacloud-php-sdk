<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterTemplatesResponseBody\parameters;

use AlibabaCloud\Dara\Model;

class templateRecord extends Model
{
    /**
     * @var string
     */
    public $checkingCode;
    /**
     * @var string
     */
    public $forceModify;
    /**
     * @var string
     */
    public $forceRestart;
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
    public $parameterValue;
    protected $_name = [
        'checkingCode'         => 'CheckingCode',
        'forceModify'          => 'ForceModify',
        'forceRestart'         => 'ForceRestart',
        'isNodeAvailable'      => 'IsNodeAvailable',
        'paramRelyRule'        => 'ParamRelyRule',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'parameterValue'       => 'ParameterValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkingCode) {
            $res['CheckingCode'] = $this->checkingCode;
        }

        if (null !== $this->forceModify) {
            $res['ForceModify'] = $this->forceModify;
        }

        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
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

        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }

        if (isset($map['ForceModify'])) {
            $model->forceModify = $map['ForceModify'];
        }

        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
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

        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
