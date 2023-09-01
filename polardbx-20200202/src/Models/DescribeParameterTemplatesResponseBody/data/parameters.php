<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @example [0|1]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $dynamic;

    /**
     * @example polarx hatp addition param
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @example loose_enable_gts
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

    /**
     * @example 0
     *
     * @var int
     */
    public $revisable;
    protected $_name = [
        'checkingCode'         => 'CheckingCode',
        'dynamic'              => 'Dynamic',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'parameterValue'       => 'ParameterValue',
        'revisable'            => 'Revisable',
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
        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
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
        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
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

        return $model;
    }
}
