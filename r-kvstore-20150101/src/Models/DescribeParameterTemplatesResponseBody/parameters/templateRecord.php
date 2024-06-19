<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterTemplatesResponseBody\parameters;

use AlibabaCloud\Tea\Model;

class templateRecord extends Model
{
    /**
     * @description The valid values of the parameter.
     *
     * @example [yes|no]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether the parameter can be reconfigured. Valid values:
     *
     *   **true**: The parameter can be reconfigured.
     *   **false**: The parameter cannot be reconfigured.
     *
     * @example true
     *
     * @var bool
     */
    public $forceModify;

    /**
     * @description Indicates whether a restart of the instance is required after the parameter is reconfigured. Valid values:
     *
     *   **true**: After the parameter is reconfigured, you must restart the instance to make the new value of the parameter take effect.
     *   **false**: After the parameter is reconfigured, the new value of the parameter immediately takes effect. You do not need to restart the instance.
     *
     * @example true
     *
     * @var bool
     */
    public $forceRestart;

    /**
     * @description The description of the parameter.
     *
     * @example test description
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter. For more information about the parameters and the parameter settings, see [Parameters](https://help.aliyun.com/document_detail/259681.html).
     *
     * @example appendonly
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The default value of the parameter.
     *
     * @example yes
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
