<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\discoveryConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\edasConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\eventBridgeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\mockConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\ossConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\vpcConfig;

class backendConfig extends Model
{
    /**
     * @var discoveryConfig
     */
    public $discoveryConfig;
    /**
     * @var edasConfig
     */
    public $edasConfig;
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
     * @var string
     */
    public $serviceAddress;
    /**
     * @var int
     */
    public $serviceTimeout;
    /**
     * @var string
     */
    public $type;
    /**
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'discoveryConfig'       => 'DiscoveryConfig',
        'edasConfig'            => 'EdasConfig',
        'eventBridgeConfig'     => 'EventBridgeConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'httpTargetHostName'    => 'HttpTargetHostName',
        'mockConfig'            => 'MockConfig',
        'ossConfig'             => 'OssConfig',
        'serviceAddress'        => 'ServiceAddress',
        'serviceTimeout'        => 'ServiceTimeout',
        'type'                  => 'Type',
        'vpcConfig'             => 'VpcConfig',
    ];

    public function validate()
    {
        if (null !== $this->discoveryConfig) {
            $this->discoveryConfig->validate();
        }
        if (null !== $this->edasConfig) {
            $this->edasConfig->validate();
        }
        if (null !== $this->eventBridgeConfig) {
            $this->eventBridgeConfig->validate();
        }
        if (null !== $this->functionComputeConfig) {
            $this->functionComputeConfig->validate();
        }
        if (null !== $this->mockConfig) {
            $this->mockConfig->validate();
        }
        if (null !== $this->ossConfig) {
            $this->ossConfig->validate();
        }
        if (null !== $this->vpcConfig) {
            $this->vpcConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveryConfig) {
            $res['DiscoveryConfig'] = null !== $this->discoveryConfig ? $this->discoveryConfig->toArray($noStream) : $this->discoveryConfig;
        }

        if (null !== $this->edasConfig) {
            $res['EdasConfig'] = null !== $this->edasConfig ? $this->edasConfig->toArray($noStream) : $this->edasConfig;
        }

        if (null !== $this->eventBridgeConfig) {
            $res['EventBridgeConfig'] = null !== $this->eventBridgeConfig ? $this->eventBridgeConfig->toArray($noStream) : $this->eventBridgeConfig;
        }

        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toArray($noStream) : $this->functionComputeConfig;
        }

        if (null !== $this->httpTargetHostName) {
            $res['HttpTargetHostName'] = $this->httpTargetHostName;
        }

        if (null !== $this->mockConfig) {
            $res['MockConfig'] = null !== $this->mockConfig ? $this->mockConfig->toArray($noStream) : $this->mockConfig;
        }

        if (null !== $this->ossConfig) {
            $res['OssConfig'] = null !== $this->ossConfig ? $this->ossConfig->toArray($noStream) : $this->ossConfig;
        }

        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }

        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toArray($noStream) : $this->vpcConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveryConfig'])) {
            $model->discoveryConfig = discoveryConfig::fromMap($map['DiscoveryConfig']);
        }

        if (isset($map['EdasConfig'])) {
            $model->edasConfig = edasConfig::fromMap($map['EdasConfig']);
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

        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
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
