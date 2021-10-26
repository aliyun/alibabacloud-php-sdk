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
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $mockStatusCode;

    /**
     * @var string
     */
    public $servicePath;

    /**
     * @var string
     */
    public $mock;

    /**
     * @var string
     */
    public $serviceAddress;

    /**
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var string
     */
    public $serviceHttpMethod;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var int
     */
    public $serviceTimeout;

    /**
     * @var mockHeaders
     */
    public $mockHeaders;

    /**
     * @var vpcConfig
     */
    public $vpcConfig;

    /**
     * @var functionComputeConfig
     */
    public $functionComputeConfig;
    protected $_name = [
        'vpcId'                 => 'VpcId',
        'mockStatusCode'        => 'MockStatusCode',
        'servicePath'           => 'ServicePath',
        'mock'                  => 'Mock',
        'serviceAddress'        => 'ServiceAddress',
        'serviceVpcEnable'      => 'ServiceVpcEnable',
        'mockResult'            => 'MockResult',
        'serviceHttpMethod'     => 'ServiceHttpMethod',
        'serviceProtocol'       => 'ServiceProtocol',
        'serviceTimeout'        => 'ServiceTimeout',
        'mockHeaders'           => 'MockHeaders',
        'vpcConfig'             => 'VpcConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->mockStatusCode) {
            $res['MockStatusCode'] = $this->mockStatusCode;
        }
        if (null !== $this->servicePath) {
            $res['ServicePath'] = $this->servicePath;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->serviceVpcEnable) {
            $res['ServiceVpcEnable'] = $this->serviceVpcEnable;
        }
        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }
        if (null !== $this->serviceHttpMethod) {
            $res['ServiceHttpMethod'] = $this->serviceHttpMethod;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->mockHeaders) {
            $res['MockHeaders'] = null !== $this->mockHeaders ? $this->mockHeaders->toMap() : null;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['MockStatusCode'])) {
            $model->mockStatusCode = $map['MockStatusCode'];
        }
        if (isset($map['ServicePath'])) {
            $model->servicePath = $map['ServicePath'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['ServiceVpcEnable'])) {
            $model->serviceVpcEnable = $map['ServiceVpcEnable'];
        }
        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }
        if (isset($map['ServiceHttpMethod'])) {
            $model->serviceHttpMethod = $map['ServiceHttpMethod'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['MockHeaders'])) {
            $model->mockHeaders = mockHeaders::fromMap($map['MockHeaders']);
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['VpcConfig']);
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }

        return $model;
    }
}
