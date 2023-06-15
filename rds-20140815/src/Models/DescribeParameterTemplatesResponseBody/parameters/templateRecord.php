<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponseBody\parameters;

use AlibabaCloud\Tea\Model;

class templateRecord extends Model
{
    /**
     * @description The value range of the parameter.
     *
     * @example [0-1024]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether the parameter can be modified. Valid values: **true | false**
     *
     * @example true
     *
     * @var string
     */
    public $forceModify;

    /**
     * @description Indicates whether the modified parameter takes effect only after a database restart. Valid values: **true | false**
     *
     * @example false
     *
     * @var string
     */
    public $forceRestart;

    /**
     * @description The description of the parameter.
     *
     * @example Page numbers of multi blocks reading once in some ddl query.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example loose_multi_blocks_ddl_count
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The default value of the parameter.
     *
     * @example 0
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
