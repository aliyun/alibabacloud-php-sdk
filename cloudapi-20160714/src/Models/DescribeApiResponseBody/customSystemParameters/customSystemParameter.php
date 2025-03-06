<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\customSystemParameters;

use AlibabaCloud\Tea\Model;

class customSystemParameter extends Model
{
    /**
     * @description The example value.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description The parameter description.
     *
     * @example Client IP Address
     *
     * @var string
     */
    public $description;

    /**
     * @description The parameter location. Valid values: BODY, HEAD, QUERY, and PATH.
     *
     * @example HEAD
     *
     * @var string
     */
    public $location;

    /**
     * @description The name of the system parameter. Valid values: CaClientIp, CaDomain, CaRequestHandleTime, CaAppId, CaRequestId, CaHttpSchema, and CaProxy.
     *
     * @example CaClientIp
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The mapped parameter name in the backend service.
     *
     * @example clientIp
     *
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'demoValue'            => 'DemoValue',
        'description'          => 'Description',
        'location'             => 'Location',
        'parameterName'        => 'ParameterName',
        'serviceParameterName' => 'ServiceParameterName',
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
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSystemParameter
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
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
