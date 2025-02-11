<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersResponseBody;

use AlibabaCloud\Dara\Model;

class configParameters extends Model
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
