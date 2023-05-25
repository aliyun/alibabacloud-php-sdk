<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\systemParameters;

use AlibabaCloud\Tea\Model;

class systemParameter extends Model
{
    /**
     * @description The root path of Function Compute.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description The name of the API, which is unique in the group.
     *
     * @example Specifies whether to make the API public. Valid values:
     *
     *   **PUBLIC**: Make the API public. If you set this parameter to PUBLIC, this API is displayed on the APIs page for all users after the API is published to the production environment.
     *   **PRIVATE**: Make the API private. Private APIs are not displayed in the Alibaba Cloud Marketplace after the API group to which they belong is made available.
     *
     * @var string
     */
    public $description;

    /**
     * @description sex
     *
     * @example HEAD
     *
     * @var string
     */
    public $location;

    /**
     * @description The request method.
     *
     * @example CaClientIp
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description Indicates whether the document is public. Valid values: **PUBLIC** and **PRIVATE**.
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
     * @return systemParameter
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
