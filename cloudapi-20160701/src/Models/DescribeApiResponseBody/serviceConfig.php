<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiResponseBody\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiResponseBody\serviceConfig\mockHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiResponseBody\serviceConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class serviceConfig extends Model
{
    /**
     * @var string
     */
    public $aoneAppName;

    /**
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @var string
     */
    public $contentTypeValue;

    /**
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @var string
     */
    public $innerServiceInfo;

    /**
     * @var string
     */
    public $innerServiceType;

    /**
     * @var string
     */
    public $mock;

    /**
     * @var mockHeaders
     */
    public $mockHeaders;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var int
     */
    public $mockStatusCode;

    /**
     * @var string
     */
    public $serviceAddress;

    /**
     * @var string
     */
    public $serviceHttpMethod;

    /**
     * @var string
     */
    public $servicePath;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var string
     */
    public $serviceTimeout;

    /**
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'aoneAppName'           => 'AoneAppName',
        'contentTypeCatagory'   => 'ContentTypeCatagory',
        'contentTypeValue'      => 'ContentTypeValue',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'innerServiceInfo'      => 'InnerServiceInfo',
        'innerServiceType'      => 'InnerServiceType',
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
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
        }
        if (null !== $this->innerServiceInfo) {
            $res['InnerServiceInfo'] = $this->innerServiceInfo;
        }
        if (null !== $this->innerServiceType) {
            $res['InnerServiceType'] = $this->innerServiceType;
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
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }
        if (isset($map['InnerServiceInfo'])) {
            $model->innerServiceInfo = $map['InnerServiceInfo'];
        }
        if (isset($map['InnerServiceType'])) {
            $model->innerServiceType = $map['InnerServiceType'];
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

        return $model;
    }
}
