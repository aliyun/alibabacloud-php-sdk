<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig\eventBridgeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig\mockHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig\ossConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class serviceConfig extends Model
{
    /**
     * @description The ContentType header type used when you call the backend service over HTTP.
     *
     *   DEFAULT: the default header type in API Gateway
     *   CUSTOM: a custom header type
     *   CLIENT: the ContentType header type of the client
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @description The value of the ContentType header when the ServiceProtocol parameter is set to HTTP and the ContentTypeCatagory parameter is set to DEFAULT or CUSTOM.
     *
     * @example application/json
     *
     * @var string
     */
    public $contentTypeValue;

    /**
     * @description Configuration items of EventBridge
     *
     * @var eventBridgeConfig
     */
    public $eventBridgeConfig;

    /**
     * @description Backend configuration items when the backend service is Function Compute
     *
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @description Specifies whether to enable the MOCK mode. Valid values:
     *
     *   TRUE: The Mock mode is enabled.
     *   FALSE: The Mock mode is not enabled.
     *
     * @example TRUE
     *
     * @var string
     */
    public $mock;

    /**
     * @description The simulated Headers.
     *
     * @var mockHeaders
     */
    public $mockHeaders;

    /**
     * @description The result returned when the Mock mode is enabled.
     *
     * @example test result
     *
     * @var string
     */
    public $mockResult;

    /**
     * @description The status code returned for service mocking.
     *
     * @example 200
     *
     * @var int
     */
    public $mockStatusCode;

    /**
     * @description Information when the backend service is OSS
     *
     * @var ossConfig
     */
    public $ossConfig;

    /**
     * @description The URL used to call the backend service.
     *
     * @example http://api.a.com:8080
     *
     * @var string
     */
    public $serviceAddress;

    /**
     * @description The HTTP request method used when calling the backend service. Valid values: PUT, GET, POST, DELETE, PATCH, HEAD, OPTIONS, and ANY.
     *
     * @example POST
     *
     * @var string
     */
    public $serviceHttpMethod;

    /**
     * @description The path used when you call the backend service.
     *
     * @example /object/add
     *
     * @var string
     */
    public $servicePath;

    /**
     * @description The backend service protocol. Currently, only HTTP, HTTPS, and FunctionCompute are supported.
     *
     * @example HTTP
     *
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description The timeout period of the backend service, in millisecond.
     *
     * @example 1000
     *
     * @var int
     */
    public $serviceTimeout;

    /**
     * @description Specifies whether to enable the VPC channel. Valid values:
     *
     *   TRUE: The VPC channel is enabled.
     *   FALSE: The VPC channel is not enabled.
     *
     * You must create the corresponding VPC access authorization before you can enable a VPC channel.
     * @example TRUE
     *
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @description Configuration items related to VPC channels
     *
     * @var vpcConfig
     */
    public $vpcConfig;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf6kg9x8sx2tbxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
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
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
