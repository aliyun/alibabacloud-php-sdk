<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\mockHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class serviceConfig extends Model
{
    /**
     * @description The backend configuration items when the backend service is Function Compute.
     *
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @description Indicates whether the Mock mode is enabled. Valid values:
     *
     *   **TRUE: The Mock mode is enabled.**
     *   **FALSE: The Mock mode is not enabled.
     *
     * @example TRUE
     *
     * @var string
     */
    public $mock;

    /**
     * @description The mock headers.
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
     * @description The URL used to call the back-end service. If the complete back-end service URL is `http://api.a.com:8080/object/add?key1=value1&key2=value2`, the value of ServiceAddress is **http://api.a.com:8080**.``
     *
     * @example http://api.a.com:8080
     *
     * @var string
     */
    public $serviceAddress;

    /**
     * @description The HTTP method used to call a backend service. Valid values: GET, POST, DELETE, PUT, HEADER, TRACE, PATCH, CONNECT, and OPTIONS.
     *
     * @example POST
     *
     * @var string
     */
    public $serviceHttpMethod;

    /**
     * @description The path used to call the back-end service. If the complete back-end service path is `http://api.a.com:8080/object/add?key1=value1&key2=value2`, ServicePath is **\/object/add**.``
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
     * @description The timeout period of the backend service. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $serviceTimeout;

    /**
     * @description Indicates whether the VPC channel is enabled. Valid values:
     *
     *   **TRUE**: The VPC channel is enabled. You must create the corresponding VPC access authorization before you can enable a VPC channel.
     *   **FALSE**: The VPC channel is not enabled.
     *
     * @example TRUE
     *
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @description The configuration items of the VPC channel.
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
        'functionComputeConfig' => 'FunctionComputeConfig',
        'mock'                  => 'Mock',
        'mockHeaders'           => 'MockHeaders',
        'mockResult'            => 'MockResult',
        'mockStatusCode'        => 'MockStatusCode',
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
