<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\accessLogConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\deletionProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\loadBalancerOperationLocks;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\modificationProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\tags;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;
use AlibabaCloud\Tea\Model;

class GetLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @description The configuration of the access log feature.
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
     * @example Dynamic
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
     * @description The network type of the ALB instance. Valid values:
     *
     *   **Internet**: The ALB instance uses a public IP address. The domain name of the ALB instance is resolved to the public IP address. Therefore, the ALB instance can be accessed over the Internet.
     *   **Intranet**: The ALB instance uses a private IP address. The domain name of the ALB instance is resolved to the private IP address. In this case, the ALB instance can be accessed over the virtual private cloud (VPC) where the ALB instance is deployed.
     *
     * @example Intranet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The ID of the elastic IP address (EIP) bandwidth plan that is associated with the Internet-facing ALB instance.
     *
     * @example cbwp-bp1vevu8h3ieh****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The time when the resource was created. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
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
     * @description The configuration of the billing method of the ALB instance.
     *
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;

    /**
     * @description The service status of the ALB instance. Valid values:
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
     * @description The edition of the ALB instance. The features and billing rules vary based on the edition of the ALB instance. Valid values:
     *
     *   **Basic**
     *   **Standard**
     *   **StandardWithWaf**
     *
     * @example Standard
     *
     * @var string
     */
    public $loadBalancerEdition;

    /**
     * @description The ALB instance ID.
     *
     * @example alb-o9ulmq5hgn68jk****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the ALB instance.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The name must start with a letter.
     * @example alb1
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The type of the lock. Valid values:
     *
     *   **SecurityLocked**: The ALB instance is locked due to security reasons.
     *   **RelatedResourceLocked**: The ALB instance is locked due to association issues.
     *   **FinancialLocked**: The ALB instance is locked due to overdue payments.
     *   **ResidualLocked**: The ALB instance is locked because the associated resources have overdue payments and the resources are released.
     *
     * @var loadBalancerOperationLocks[]
     */
    public $loadBalancerOperationLocks;

    /**
     * @description The status of the ALB instance. Valid values:
     *
     *   **Inactive**: The ALB instance is disabled. ALB instances in the Inactive state do not forward traffic.
     *   **Active**: The ALB instance is running.
     *   **Provisioning**: The ALB instance is being created.
     *   **Configuring**: The ALB instance is being modified.
     *   **CreateFailed**: The system failed to create the ALB instance. In this case, you are not charged for the ALB instance. You can only delete the ALB instance.
     *
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The configuration of the configuration read-only mode.
     *
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;

    /**
     * @description The region ID of the ALB instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag value.
     *
     * The tag value can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. The tag value cannot contain `http://` or `https://`.
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the VPC in which the ALB instance is deployed.
     *
     * @example vpc-bp1b49rqrybk45nio****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the ALB instance.
     *
     * You can call the [DescribeZones](https://help.aliyun.com/document_detail/189196.html) operation to query the zones of the ALB instance.
     * @var zoneMappings[]
     */
    public $zoneMappings;
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
        'regionId'                     => 'RegionId',
        'requestId'                    => 'RequestId',
        'resourceGroupId'              => 'ResourceGroupId',
        'tags'                         => 'Tags',
        'vpcId'                        => 'VpcId',
        'zoneMappings'                 => 'ZoneMappings',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetLoadBalancerAttributeResponseBody
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
