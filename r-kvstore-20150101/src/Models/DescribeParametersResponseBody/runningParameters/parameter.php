<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersResponseBody\runningParameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $parameterValue;

    /**
     * @var string
     */
    public $modifiableStatus;

    /**
     * @var string
     */
    public $forceRestart;

    /**
     * @var string
     */
    public $checkingCode;

    /**
     * @var string
     */
    public $parameterDescription;
    protected $_name = [
        'parameterName'        => 'ParameterName',
        'parameterValue'       => 'ParameterValue',
        'modifiableStatus'     => 'ModifiableStatus',
        'forceRestart'         => 'ForceRestart',
        'checkingCode'         => 'CheckingCode',
        'parameterDescription' => 'ParameterDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }
        if (null !== $this->modifiableStatus) {
            $res['ModifiableStatus'] = $this->modifiableStatus;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->checkingCode) {
            $res['CheckingCode'] = $this->checkingCode;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
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
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }
        if (isset($map['ModifiableStatus'])) {
            $model->modifiableStatus = $map['ModifiableStatus'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }

        return $model;
    }
}
