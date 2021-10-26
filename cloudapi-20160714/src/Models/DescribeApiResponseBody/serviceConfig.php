<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\mockHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\ossConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class serviceConfig extends Model
{
    /**
     * @var string
     */
    public $aoneAppName;

    /**
     * @var int
     */
    public $mockStatusCode;

    /**
     * @var string
     */
    public $contentTypeValue;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var string
     */
    public $servicePath;

    /**
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @var string
     */
    public $serviceAddress;

    /**
     * @var string
     */
    public $mock;

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

    /**
     * @var ossConfig
     */
    public $ossConfig;
    protected $_name = [
        'aoneAppName'           => 'AoneAppName',
        'mockStatusCode'        => 'MockStatusCode',
        'contentTypeValue'      => 'ContentTypeValue',
        'serviceProtocol'       => 'ServiceProtocol',
        'servicePath'           => 'ServicePath',
        'contentTypeCatagory'   => 'ContentTypeCatagory',
        'serviceAddress'        => 'ServiceAddress',
        'mock'                  => 'Mock',
        'serviceVpcEnable'      => 'ServiceVpcEnable',
        'mockResult'            => 'MockResult',
        'serviceHttpMethod'     => 'ServiceHttpMethod',
        'serviceTimeout'        => 'ServiceTimeout',
        'mockHeaders'           => 'MockHeaders',
        'vpcConfig'             => 'VpcConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'ossConfig'             => 'OssConfig',
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
        if (null !== $this->mockStatusCode) {
            $res['MockStatusCode'] = $this->mockStatusCode;
        }
        if (null !== $this->contentTypeValue) {
            $res['ContentTypeValue'] = $this->contentTypeValue;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->servicePath) {
            $res['ServicePath'] = $this->servicePath;
        }
        if (null !== $this->contentTypeCatagory) {
            $res['ContentTypeCatagory'] = $this->contentTypeCatagory;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
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
        if (null !== $this->ossConfig) {
            $res['OssConfig'] = null !== $this->ossConfig ? $this->ossConfig->toMap() : null;
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
        if (isset($map['MockStatusCode'])) {
            $model->mockStatusCode = $map['MockStatusCode'];
        }
        if (isset($map['ContentTypeValue'])) {
            $model->contentTypeValue = $map['ContentTypeValue'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServicePath'])) {
            $model->servicePath = $map['ServicePath'];
        }
        if (isset($map['ContentTypeCatagory'])) {
            $model->contentTypeCatagory = $map['ContentTypeCatagory'];
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
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
        if (isset($map['OssConfig'])) {
            $model->ossConfig = ossConfig::fromMap($map['OssConfig']);
        }

        return $model;
    }
}
