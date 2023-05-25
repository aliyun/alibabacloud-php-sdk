<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\eventBridgeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\mockHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\ossConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class serviceConfig extends Model
{
    /**
     * @description auditing
     *
     * @example ib-blank
     *
     * @var string
     */
    public $aoneAppName;

    /**
     * @description The HTTP method used to make the request. Valid values: GET, POST, DELETE, PUT, HEADER, TRACE, PATCH, CONNECT, and OPTIONS.
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @description The API publishing status.
     *
     * @example application/x-www-form-urlencoded; charset=UTF-8
     *
     * @var string
     */
    public $contentTypeValue;

    /**
     * @description Indicates whether the request parameter is required.
     *
     * @var eventBridgeConfig
     */
    public $eventBridgeConfig;

    /**
     * @description Examples
     *
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @description The returned description of the API.
     *
     * @example TRUE
     *
     * @var string
     */
    public $mock;

    /**
     * @description The value of the ContentType header when the ContentTypeCatagory parameter is set to DEFAULT or CUSTOM.
     *
     * @var mockHeaders
     */
    public $mockHeaders;

    /**
     * @description The service name defined in Function Compute.
     *
     * @example test result
     *
     * @var string
     */
    public $mockResult;

    /**
     * @description Indicates whether the parameter is required. Valid values: **REQUIRED** and **OPTIONAL**.
     *
     * @example 200
     *
     * @var int
     */
    public $mockStatusCode;

    /**
     * @description sex
     *
     * @var ossConfig
     */
    public $ossConfig;

    /**
     * @description Specifies whether to enable the Mock mode. Valid values:
     *
     *   OPEN: The Mock mode is enabled.
     *   CLOSED: The Mock mode is not enabled.
     *
     * @example http://api.a.com:8080
     *
     * @var string
     */
    public $serviceAddress;

    /**
     * @description Error message
     *
     * @example POST
     *
     * @var string
     */
    public $serviceHttpMethod;

    /**
     * @description The mappings between parameters of requests sent by the consumer to API Gateway and parameters of requests sent by API Gateway to the backend service.
     *
     * @example /object/add
     *
     * @var string
     */
    public $servicePath;

    /**
     * @description The sample error response from the backend service.
     *
     * @example HTTP
     *
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description Information when the backend service is OSS
     *
     * @example 1000
     *
     * @var int
     */
    public $serviceTimeout;

    /**
     * @description The configuration items of API requests sent by the consumer to API Gateway.
     *
     * @example TRUE
     *
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @description The backend only receives the service path.
     *
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'aoneAppName'           => 'AoneAppName',
        'contentTypeCatagory'   => 'ContentTypeCatagory',
        'contentTypeValue'      => 'ContentTypeValue',
        'eventBridgeConfig'     => 'EventBridgeConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'mock'                  => 'Mock',
        'mockHeaders'           => 'MockHeaders',
        'mockResult'            => 'MockResult',
        'mockStatusCode'        => 'MockStatusCode',
        'ossConfig'             => 'OssConfig',
        'serviceAddress'        => 'ServiceAddress',
        'serviceHttpMethod'     => 'ServiceHttpMethod',
        'servicePath'           => 'ServicePath',
        'serviceProtocol'       => 'ServiceProtocol',
        'serviceTimeout'        => 'ServiceTimeout',
        'serviceVpcEnable'      => 'ServiceVpcEnable',
        'vpcConfig'             => 'VpcConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aoneAppName) {
            $res['AoneAppName'] = $this->aoneAppName;
        }
        if (null !== $this->contentTypeCatagory) {
            $res['ContentTypeCatagory'] = $this->contentTypeCatagory;
        }
        if (null !== $this->contentTypeValue) {
            $res['ContentTypeValue'] = $this->contentTypeValue;
        }
        if (null !== $this->eventBridgeConfig) {
            $res['EventBridgeConfig'] = null !== $this->eventBridgeConfig ? $this->eventBridgeConfig->toMap() : null;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->mockHeaders) {
            $res['MockHeaders'] = null !== $this->mockHeaders ? $this->mockHeaders->toMap() : null;
        }
        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }
        if (null !== $this->mockStatusCode) {
            $res['MockStatusCode'] = $this->mockStatusCode;
        }
        if (null !== $this->ossConfig) {
            $res['OssConfig'] = null !== $this->ossConfig ? $this->ossConfig->toMap() : null;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->serviceHttpMethod) {
            $res['ServiceHttpMethod'] = $this->serviceHttpMethod;
        }
        if (null !== $this->servicePath) {
            $res['ServicePath'] = $this->servicePath;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->serviceVpcEnable) {
            $res['ServiceVpcEnable'] = $this->serviceVpcEnable;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AoneAppName'])) {
            $model->aoneAppName = $map['AoneAppName'];
        }
        if (isset($map['ContentTypeCatagory'])) {
            $model->contentTypeCatagory = $map['ContentTypeCatagory'];
        }
        if (isset($map['ContentTypeValue'])) {
            $model->contentTypeValue = $map['ContentTypeValue'];
        }
        if (isset($map['EventBridgeConfig'])) {
            $model->eventBridgeConfig = eventBridgeConfig::fromMap($map['EventBridgeConfig']);
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['MockHeaders'])) {
            $model->mockHeaders = mockHeaders::fromMap($map['MockHeaders']);
        }
        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }
        if (isset($map['MockStatusCode'])) {
            $model->mockStatusCode = $map['MockStatusCode'];
        }
        if (isset($map['OssConfig'])) {
            $model->ossConfig = ossConfig::fromMap($map['OssConfig']);
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['ServiceHttpMethod'])) {
            $model->serviceHttpMethod = $map['ServiceHttpMethod'];
        }
        if (isset($map['ServicePath'])) {
            $model->servicePath = $map['ServicePath'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['ServiceVpcEnable'])) {
            $model->serviceVpcEnable = $map['ServiceVpcEnable'];
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['VpcConfig']);
        }

        return $model;
    }
}
