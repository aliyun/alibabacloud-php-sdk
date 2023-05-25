<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceParameters;

use AlibabaCloud\Tea\Model;

class serviceParameter extends Model
{
    /**
     * @description The name of the runtime environment. Valid values: RELEASE and TEST.
     *
     * @example HEAD
     *
     * @var string
     */
    public $location;

    /**
     * @description The hash values that can be entered when **ParameterType** is set to Int, Long, Float, Double, or String. Separate different values with commas (,), such as 1,2,3,4,9 or A,B,C,E,F.
     *
     * @example String
     *
     * @var string
     */
    public $parameterType;

    /**
     * @description Description
     *
     * @example clientIp
     *
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'location'             => 'Location',
        'parameterType'        => 'ParameterType',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
