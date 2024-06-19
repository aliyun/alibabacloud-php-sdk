<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupTemplateListResponseBody;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The regular expression used to validate input.
     *
     * @example "\\\\d+\\\\s+\\\\d+\\\\s+\\\\d+"
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether the modification takes effect. Valid values: 0 and 1. A value of 0 indicates that the modification does not take effect. A value of 1 indicates that the modification takes effect.
     *
     * @example 1
     *
     * @var int
     */
    public $effective;

    /**
     * @description A divisor of the parameter. For a parameter of the integer or byte type, the valid values must be a multiple of Factor unless you set Factor to 0.
     *
     * @example 1
     *
     * @var int
     */
    public $factor;

    /**
     * @description The description of the parameter.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The parameter name.
     *
     * @example appendonly
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The default value of the parameter.
     *
     * @example 10
     *
     * @var string
     */
    public $parameterValue;

    /**
     * @description Indicates whether the parameter can be modified. Valid values:
     *
     *   **0: The parameter cannot be modified.**
     *   **1**: The parameter can be modified.
     *
     * @example 0
     *
     * @var int
     */
    public $revisable;

    /**
     * @description Indicates whether the minor version can be changed. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $supportModifyForMinorVersion;

    /**
     * @description The unit of the parameter value. Valid values: INT (ordinary integer), STRING (fixed string), and B (byte).
     *
     * @example STRING
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'checkingCode'                 => 'CheckingCode',
        'effective'                    => 'Effective',
        'factor'                       => 'Factor',
        'parameterDescription'         => 'ParameterDescription',
        'parameterName'                => 'ParameterName',
        'parameterValue'               => 'ParameterValue',
        'revisable'                    => 'Revisable',
        'supportModifyForMinorVersion' => 'SupportModifyForMinorVersion',
        'unit'                         => 'Unit',
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
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->factor) {
            $res['Factor'] = $this->factor;
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
        if (null !== $this->revisable) {
            $res['Revisable'] = $this->revisable;
        }
        if (null !== $this->supportModifyForMinorVersion) {
            $res['SupportModifyForMinorVersion'] = $this->supportModifyForMinorVersion;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['Factor'])) {
            $model->factor = $map['Factor'];
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
        if (isset($map['Revisable'])) {
            $model->revisable = $map['Revisable'];
        }
        if (isset($map['SupportModifyForMinorVersion'])) {
            $model->supportModifyForMinorVersion = $map['SupportModifyForMinorVersion'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
