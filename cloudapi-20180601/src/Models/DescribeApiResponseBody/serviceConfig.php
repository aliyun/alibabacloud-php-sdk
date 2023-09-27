<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\serviceConfig\vpcConfig;
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
    public $mock;

    /**
     * @var string
     */
    public $mockResult;

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
        'mock'                  => 'Mock',
        'mockResult'            => 'MockResult',
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
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
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
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
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
