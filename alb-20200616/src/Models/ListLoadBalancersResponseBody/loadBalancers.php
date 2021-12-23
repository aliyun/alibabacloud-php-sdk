<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers\accessLogConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers\deletionProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers\loadBalancerOperationLocks;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers\modificationProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers\tags;
use AlibabaCloud\Tea\Model;

class loadBalancers extends Model
{
    /**
     * @description 访问日志属性
     *
     * @var accessLogConfig
     */
    public $accessLogConfig;

    /**
     * @description 地址模式
     *
     * @var string
     */
    public $addressAllocatedMode;

    /**
     * @description 协议版本
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @description 地址类型
     *
     * @var string
     */
    public $addressType;

    /**
     * @description 带宽包ID
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description 资源创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description DNS域名
     *
     * @var string
     */
    public $DNSName;

    /**
     * @description 负载均衡删除保护相关信息
     *
     * @var deletionProtectionConfig
     */
    public $deletionProtectionConfig;

    /**
     * @description IPV6地址类型
     *
     * @var string
     */
    public $ipv6AddressType;

    /**
     * @description 计费相关属性
     *
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;

    /**
     * @description 实例业务状态
     *
     * @var string
     */
    public $loadBalancerBussinessStatus;

    /**
     * @description 负载均衡的版本
     *
     * @var string
     */
    public $loadBalancerEdition;

    /**
     * @description 负载均衡标识
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description 实例名称
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description 锁定的原因
     *
     * @var loadBalancerOperationLocks[]
     */
    public $loadBalancerOperationLocks;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description 负载均衡修改保护相关信息
     *
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;

    /**
     * @description 企业资源组ID
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 标签列表
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Vpc网络ID
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessLogConfig'              => 'AccessLogConfig',
        'addressAllocatedMode'         => 'AddressAllocatedMode',
        'addressIpVersion'             => 'AddressIpVersion',
        'addressType'                  => 'AddressType',
        'bandwidthPackageId'           => 'BandwidthPackageId',
        'createTime'                   => 'CreateTime',
        'DNSName'                      => 'DNSName',
        'deletionProtectionConfig'     => 'DeletionProtectionConfig',
        'ipv6AddressType'              => 'Ipv6AddressType',
        'loadBalancerBillingConfig'    => 'LoadBalancerBillingConfig',
        'loadBalancerBussinessStatus'  => 'LoadBalancerBussinessStatus',
        'loadBalancerEdition'          => 'LoadBalancerEdition',
        'loadBalancerId'               => 'LoadBalancerId',
        'loadBalancerName'             => 'LoadBalancerName',
        'loadBalancerOperationLocks'   => 'LoadBalancerOperationLocks',
        'loadBalancerStatus'           => 'LoadBalancerStatus',
        'modificationProtectionConfig' => 'ModificationProtectionConfig',
        'resourceGroupId'              => 'ResourceGroupId',
        'tags'                         => 'Tags',
        'vpcId'                        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogConfig) {
            $res['AccessLogConfig'] = null !== $this->accessLogConfig ? $this->accessLogConfig->toMap() : null;
        }
        if (null !== $this->addressAllocatedMode) {
            $res['AddressAllocatedMode'] = $this->addressAllocatedMode;
        }
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DNSName) {
            $res['DNSName'] = $this->DNSName;
        }
        if (null !== $this->deletionProtectionConfig) {
            $res['DeletionProtectionConfig'] = null !== $this->deletionProtectionConfig ? $this->deletionProtectionConfig->toMap() : null;
        }
        if (null !== $this->ipv6AddressType) {
            $res['Ipv6AddressType'] = $this->ipv6AddressType;
        }
        if (null !== $this->loadBalancerBillingConfig) {
            $res['LoadBalancerBillingConfig'] = null !== $this->loadBalancerBillingConfig ? $this->loadBalancerBillingConfig->toMap() : null;
        }
        if (null !== $this->loadBalancerBussinessStatus) {
            $res['LoadBalancerBussinessStatus'] = $this->loadBalancerBussinessStatus;
        }
        if (null !== $this->loadBalancerEdition) {
            $res['LoadBalancerEdition'] = $this->loadBalancerEdition;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerOperationLocks) {
            $res['LoadBalancerOperationLocks'] = [];
            if (null !== $this->loadBalancerOperationLocks && \is_array($this->loadBalancerOperationLocks)) {
                $n = 0;
                foreach ($this->loadBalancerOperationLocks as $item) {
                    $res['LoadBalancerOperationLocks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->modificationProtectionConfig) {
            $res['ModificationProtectionConfig'] = null !== $this->modificationProtectionConfig ? $this->modificationProtectionConfig->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogConfig'])) {
            $model->accessLogConfig = accessLogConfig::fromMap($map['AccessLogConfig']);
        }
        if (isset($map['AddressAllocatedMode'])) {
            $model->addressAllocatedMode = $map['AddressAllocatedMode'];
        }
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DNSName'])) {
            $model->DNSName = $map['DNSName'];
        }
        if (isset($map['DeletionProtectionConfig'])) {
            $model->deletionProtectionConfig = deletionProtectionConfig::fromMap($map['DeletionProtectionConfig']);
        }
        if (isset($map['Ipv6AddressType'])) {
            $model->ipv6AddressType = $map['Ipv6AddressType'];
        }
        if (isset($map['LoadBalancerBillingConfig'])) {
            $model->loadBalancerBillingConfig = loadBalancerBillingConfig::fromMap($map['LoadBalancerBillingConfig']);
        }
        if (isset($map['LoadBalancerBussinessStatus'])) {
            $model->loadBalancerBussinessStatus = $map['LoadBalancerBussinessStatus'];
        }
        if (isset($map['LoadBalancerEdition'])) {
            $model->loadBalancerEdition = $map['LoadBalancerEdition'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerOperationLocks'])) {
            if (!empty($map['LoadBalancerOperationLocks'])) {
                $model->loadBalancerOperationLocks = [];
                $n                                 = 0;
                foreach ($map['LoadBalancerOperationLocks'] as $item) {
                    $model->loadBalancerOperationLocks[$n++] = null !== $item ? loadBalancerOperationLocks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['ModificationProtectionConfig'])) {
            $model->modificationProtectionConfig = modificationProtectionConfig::fromMap($map['ModificationProtectionConfig']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
