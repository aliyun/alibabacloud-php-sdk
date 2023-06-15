<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\configParameters;

use AlibabaCloud\Tea\Model;

class DBInstanceParameter extends Model
{
    /**
     * @description The description of the parameter.
     *
     * @example This parameter sets the default fill factor value at the server scope. A fill factor is provided to optimize index data storage and performance.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example fill factor
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value of the parameter.
     *
     * @example 50
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
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
     * @return DBInstanceParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
