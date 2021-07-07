<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupResponseBody\parameterGroup;

use AlibabaCloud\Tea\Model;

class parameterDetail extends Model
{
    /**
     * @var string
     */
    public $paramValue;

    /**
     * @var string
     */
    public $paramName;
    protected $_name = [
        'paramValue' => 'ParamValue',
        'paramName'  => 'ParamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        return $model;
    }
}
