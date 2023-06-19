<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\discoveryConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\eventBridgeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\mockConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\ossConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class backendConfig extends Model
{
    /**
     * @var discoveryConfig
     */
    public $discoveryConfig;

    /**
     * @var eventBridgeConfig
     */
    public $eventBridgeConfig;

    /**
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @var string
     */
    public $httpTargetHostName;

    /**
     * @var mockConfig
     */
    public $mockConfig;

    /**
     * @var ossConfig
     */
    public $ossConfig;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $serviceAddress;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'discoveryConfig'       => 'DiscoveryConfig',
        'eventBridgeConfig'     => 'EventBridgeConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'httpTargetHostName'    => 'HttpTargetHostName',
        'mockConfig'            => 'MockConfig',
        'ossConfig'             => 'OssConfig',
        'serviceAddress'        => 'ServiceAddress',
        'type'                  => 'Type',
        'vpcConfig'             => 'VpcConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveryConfig) {
            $res['DiscoveryConfig'] = null !== $this->discoveryConfig ? $this->discoveryConfig->toMap() : null;
        }
        if (null !== $this->eventBridgeConfig) {
            $res['EventBridgeConfig'] = null !== $this->eventBridgeConfig ? $this->eventBridgeConfig->toMap() : null;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
        }
        if (null !== $this->httpTargetHostName) {
            $res['HttpTargetHostName'] = $this->httpTargetHostName;
        }
        if (null !== $this->mockConfig) {
            $res['MockConfig'] = null !== $this->mockConfig ? $this->mockConfig->toMap() : null;
        }
        if (null !== $this->ossConfig) {
            $res['OssConfig'] = null !== $this->ossConfig ? $this->ossConfig->toMap() : null;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveryConfig'])) {
            $model->discoveryConfig = discoveryConfig::fromMap($map['DiscoveryConfig']);
        }
        if (isset($map['EventBridgeConfig'])) {
            $model->eventBridgeConfig = eventBridgeConfig::fromMap($map['EventBridgeConfig']);
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }
        if (isset($map['HttpTargetHostName'])) {
            $model->httpTargetHostName = $map['HttpTargetHostName'];
        }
        if (isset($map['MockConfig'])) {
            $model->mockConfig = mockConfig::fromMap($map['MockConfig']);
        }
        if (isset($map['OssConfig'])) {
            $model->ossConfig = ossConfig::fromMap($map['OssConfig']);
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['VpcConfig']);
        }

        return $model;
    }
}
