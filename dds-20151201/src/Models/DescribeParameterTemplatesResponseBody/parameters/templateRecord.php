<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterTemplatesResponseBody\parameters;

use AlibabaCloud\Tea\Model;

class templateRecord extends Model
{
    /**
     * @description The value range of modifiable parameters.
     *
     * @example [0-65536]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether the parameter is modifiable.
     *
     *   **false**: The parameter cannot be modified.
     *   **true**: The parameter can be modified.
     *
     * @example true
     *
     * @var bool
     */
    public $forceModify;

    /**
     * @description Indicates whether a restart is required for parameter modifications to take effect.
     *
     *   **false**: A restart is not required. Parameter modifications immediately take effect.
     *   **true**: A restart is required for parameter modifications to take effect.
     *
     * @example false
     *
     * @var bool
     */
    public $forceRestart;

    /**
     * @description The description of the parameter.
     *
     * @example The threshold in milliseconds at which the database profiler considers a query slow, default is 100.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example net.compression.compressors
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The default value of the parameter.
     *
     * @example 100
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
     * @return templateRecord
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
