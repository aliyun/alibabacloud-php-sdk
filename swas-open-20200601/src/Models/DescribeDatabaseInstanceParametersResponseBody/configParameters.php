<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersResponseBody;

use AlibabaCloud\Tea\Model;

class configParameters extends Model
{
    /**
     * @example [1-65535]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @example true
     *
     * @var string
     */
    public $forceModify;

    /**
     * @example false
     *
     * @var string
     */
    public $forceRestart;

    /**
     * @example Auto-increment columns are incremented by this
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @example auto_increment_increment
     *
     * @var string
     */
    public $parameterName;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return configParameters
     */
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
