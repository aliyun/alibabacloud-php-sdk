<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\modificationProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\zoneMappings;
use AlibabaCloud\Tea\Model;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @description 地址模式
     *
     * @var string
     */
    public $addressAllocatedMode;

    /**
     * @description 负载均衡的地址类型
     *
     * @var string
     */
    public $addressType;

    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 是否开启删除保护
     *
     * @var bool
     */
    public $deletionProtectionEnabled;

    /**
     * @description  是否只预检此次请求
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 计费相关配置信息
     *
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;

    /**
     * @description 负载均衡的版本
     *
     * @var string
     */
    public $loadBalancerEdition;

    /**
     * @description 名称
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description 负载均衡修改保护相关信息
     *
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;

    /**
     * @description 资源组
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 负载均衡实例的专有网络ID。
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 可用区及交换机映射列表
     *
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressAllocatedMode'         => 'AddressAllocatedMode',
        'addressType'                  => 'AddressType',
        'clientToken'                  => 'ClientToken',
        'deletionProtectionEnabled'    => 'DeletionProtectionEnabled',
        'dryRun'                       => 'DryRun',
        'loadBalancerBillingConfig'    => 'LoadBalancerBillingConfig',
        'loadBalancerEdition'          => 'LoadBalancerEdition',
        'loadBalancerName'             => 'LoadBalancerName',
        'modificationProtectionConfig' => 'ModificationProtectionConfig',
        'resourceGroupId'              => 'ResourceGroupId',
        'vpcId'                        => 'VpcId',
        'zoneMappings'                 => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressAllocatedMode) {
            $res['AddressAllocatedMode'] = $this->addressAllocatedMode;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deletionProtectionEnabled) {
            $res['DeletionProtectionEnabled'] = $this->deletionProtectionEnabled;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerBillingConfig) {
            $res['LoadBalancerBillingConfig'] = null !== $this->loadBalancerBillingConfig ? $this->loadBalancerBillingConfig->toMap() : null;
        }
        if (null !== $this->loadBalancerEdition) {
            $res['LoadBalancerEdition'] = $this->loadBalancerEdition;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->modificationProtectionConfig) {
            $res['ModificationProtectionConfig'] = null !== $this->modificationProtectionConfig ? $this->modificationProtectionConfig->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = [];
            if (null !== $this->zoneMappings && \is_array($this->zoneMappings)) {
                $n = 0;
                foreach ($this->zoneMappings as $item) {
                    $res['ZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressAllocatedMode'])) {
            $model->addressAllocatedMode = $map['AddressAllocatedMode'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeletionProtectionEnabled'])) {
            $model->deletionProtectionEnabled = $map['DeletionProtectionEnabled'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerBillingConfig'])) {
            $model->loadBalancerBillingConfig = loadBalancerBillingConfig::fromMap($map['LoadBalancerBillingConfig']);
        }
        if (isset($map['LoadBalancerEdition'])) {
            $model->loadBalancerEdition = $map['LoadBalancerEdition'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['ModificationProtectionConfig'])) {
            $model->modificationProtectionConfig = modificationProtectionConfig::fromMap($map['ModificationProtectionConfig']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n                   = 0;
                foreach ($map['ZoneMappings'] as $item) {
                    $model->zoneMappings[$n++] = null !== $item ? zoneMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
