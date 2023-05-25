<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponseBody\systemParams;

use AlibabaCloud\Tea\Model;

class systemParamItem extends Model
{
    /**
     * @description Client IP Address
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description The name of the parameter.
     *
     * @example The type of the parameter.
     *
     * @var string
     */
    public $description;

    /**
     * @description *   This API is intended for API callers.
     *   The response of this API contains the system parameters that are optional in API definitions.
     *
     * @example CaClientIp
     *
     * @var string
     */
    public $paramName;

    /**
     * @description Queries the common parameters supported by the system.
     *
     * @example string
     *
     * @var string
     */
    public $paramType;
    protected $_name = [
        'demoValue'   => 'DemoValue',
        'description' => 'Description',
        'paramName'   => 'ParamName',
        'paramType'   => 'ParamType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemParamItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        return $model;
    }
}
