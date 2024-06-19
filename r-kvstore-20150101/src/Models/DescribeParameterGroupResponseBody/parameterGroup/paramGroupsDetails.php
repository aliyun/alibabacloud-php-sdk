<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody\parameterGroup;

use AlibabaCloud\Tea\Model;

class paramGroupsDetails extends Model
{
    /**
     * @description The name of the parameter.
     *
     * @example timeout
     *
     * @var string
     */
    public $paramName;

    /**
     * @description The value of the parameter.
     *
     * @example 1000
     *
     * @var string
     */
    public $paramValue;
    protected $_name = [
        'paramName'  => 'ParamName',
        'paramValue' => 'ParamValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramGroupsDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }

        return $model;
    }
}
