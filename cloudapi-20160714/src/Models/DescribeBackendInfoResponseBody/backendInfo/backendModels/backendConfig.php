<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\eventBridgeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\ossConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class backendConfig extends Model
{
    /**
     * @var eventBridgeConfig
     */
    public $eventBridgeConfig;

    /**
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @var ossConfig
     */
    public $ossConfig;

    /**
     * @var string
     */
    public $serviceAddress;

    /**
     * @var string
     */
    public $type;

    /**
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'eventBridgeConfig'     => 'EventBridgeConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
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
        if (null !== $this->eventBridgeConfig) {
            $res['EventBridgeConfig'] = null !== $this->eventBridgeConfig ? $this->eventBridgeConfig->toMap() : null;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
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
        if (isset($map['EventBridgeConfig'])) {
            $model->eventBridgeConfig = eventBridgeConfig::fromMap($map['EventBridgeConfig']);
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
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
