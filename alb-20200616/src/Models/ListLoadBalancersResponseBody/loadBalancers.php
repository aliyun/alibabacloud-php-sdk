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
     * @description The configuration of the access log.
     *
     * @var accessLogConfig
     */
    public $accessLogConfig;

    /**
     * @description The mode in which IP addresses are allocated. Valid values:
     *
     *   **Fixed**: allocates a static IP address to the ALB instance.
     *   **Dynamic**: dynamically allocates an IP address to each zone of the ALB instance.
     *
     * @example Fixed
     *
     * @var string
     */
    public $addressAllocatedMode;

    /**
     * @description The IP version. Valid values:
     *
     *   **IPv4**
     *   **DualStack**
     *
     * @example DualStack
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @description The type of IP address that the ALB instance uses to provide services. Valid values:
     *
     *   **Internet**: The ALB instance uses a public IP address. The domain name of the ALB instance is resolved to the public IP address. Therefore, the ALB instance can be accessed over the Internet.
     *   **Intranet**: The ALB instance uses a private IP address. The domain name of the ALB instance is resolved to the private IP address. In this case, the ALB instance can be accessed over the VPC where the ALB instance is deployed.
     *
     * @example Intranet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The ID of the EIP bandwidth plan that is associated with the NLB instance if the NLB instance uses a public IP address.
     *
     * @example cbwp-bp1vevu8h3ieh****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The time when the resource was created.
     *
     * @example 2022-07-02T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The domain name of the ALB instance.
     *
     * @example alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com
     *
     * @var string
     */
    public $DNSName;

    /**
     * @description The configuration of deletion protection.
     *
     * @var deletionProtectionConfig
     */
    public $deletionProtectionConfig;

    /**
     * @description The type of IPv6 address that is used by the ALB instance. Valid values:
     *
     *   **Internet**: The ALB instance uses a public IP address. The domain name of the ALB instance is resolved to the public IP address. Therefore, the ALB instance can be accessed over the Internet.
     *   **Intranet**: The ALB instance uses a private IP address. The domain name of the ALB instance is resolved to the private IP address. Therefore, the ALB instance can be accessed over the VPC in which the ALB instance is deployed.
     *
     * @example Intranet
     *
     * @var string
     */
    public $ipv6AddressType;

    /**
     * @description The configuration of the billing method.
     *
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;

    /**
     * @description The business status of the ALB instance. Valid values:
     *
     *   **Abnormal**
     *   **Normal**
     *
     * @example Normal
     *
     * @var string
     */
    public $loadBalancerBussinessStatus;

    /**
     * @description The edition of the ALB instance. Different editions have different limits and support different billing methods. Valid values:
     *
     *   **Basic**: basic
     *   **Standard**: standard
     *   **StandardWithWaf**: WAF-enabled
     *
     * @example Standard
     *
     * @var string
     */
    public $loadBalancerEdition;

    /**
     * @description The ID of the ALB instance.
     *
     * @example alb-o9ulmq5hgn68jk****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the NLB instance.
     *
     * @example alb-instance-test
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The configuration of the operation lock.
     *
     * @var loadBalancerOperationLocks[]
     */
    public $loadBalancerOperationLocks;

    /**
     * @description The status of the ALB instance. Valid values:
     *
     *   **Inactive**: The ALB instance is disabled. The listeners do not forward traffic.
     *   **Active**: The ALB instance is running.
     *   **Provisioning**: The ALB instance is being created.
     *   **Configuring**: The ALB instance is being modified.
     *   **CreateFailed**: The system failed to create the ALB instance.
     *
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The configuration read-only mode.
     *
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags that are added to the instance.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the VPC to which the ALB instance belongs.
     *
     * @example vpc-bp1b49rqrybk45nio****
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
