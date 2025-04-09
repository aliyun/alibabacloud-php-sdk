<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponseBody\runningParameters;

use AlibabaCloud\Dara\Model;

class parameter extends Model
{
    /**
     * @var string
     */
    public $characterType;

    /**
     * @var string
     */
    public $checkingCode;

    /**
     * @var string
     */
    public $forceRestart;

    /**
     * @var string
     */
    public $modifiableStatus;

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
        'characterType' => 'CharacterType',
        'checkingCode' => 'CheckingCode',
        'forceRestart' => 'ForceRestart',
        'modifiableStatus' => 'ModifiableStatus',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
