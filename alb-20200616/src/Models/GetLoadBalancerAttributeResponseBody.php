<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\accessLogConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\deletionProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\loadBalancerOperationLocks;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\modificationProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\tags;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

class GetLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @var accessLogConfig
     */
    public $accessLogConfig;
    /**
     * @var string
     */
    public $addressAllocatedMode;
    /**
     * @var string
     */
    public $addressIpVersion;
    /**
     * @var string
     */
    public $addressType;
    /**
     * @var string
     */
    public $bandwidthPackageId;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $DNSName;
    /**
     * @var deletionProtectionConfig
     */
    public $deletionProtectionConfig;
    /**
     * @var string
     */
    public $ipv6AddressType;
    /**
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;
    /**
     * @var string
     */
    public $loadBalancerBussinessStatus;
    /**
     * @var string
     */
    public $loadBalancerEdition;
    /**
     * @var string
     */
    public $loadBalancerId;
    /**
     * @var string
     */
    public $loadBalancerName;
    /**
     * @var loadBalancerOperationLocks[]
     */
    public $loadBalancerOperationLocks;
    /**
     * @var string
     */
    public $loadBalancerStatus;
    /**
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string[]
     */
    public $securityGroupIds;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $vpcId;
    /**
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
        'securityGroupIds'             => 'SecurityGroupIds',
        'tags'                         => 'Tags',
        'vpcId'                        => 'VpcId',
        'zoneMappings'                 => 'ZoneMappings',
    ];

    public function validate()
    {
        if (null !== $this->accessLogConfig) {
            $this->accessLogConfig->validate();
        }
        if (null !== $this->deletionProtectionConfig) {
            $this->deletionProtectionConfig->validate();
        }
        if (null !== $this->loadBalancerBillingConfig) {
            $this->loadBalancerBillingConfig->validate();
        }
        if (\is_array($this->loadBalancerOperationLocks)) {
            Model::validateArray($this->loadBalancerOperationLocks);
        }
        if (null !== $this->modificationProtectionConfig) {
            $this->modificationProtectionConfig->validate();
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->zoneMappings)) {
            Model::validateArray($this->zoneMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogConfig) {
            $res['AccessLogConfig'] = null !== $this->accessLogConfig ? $this->accessLogConfig->toArray($noStream) : $this->accessLogConfig;
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
            $res['DeletionProtectionConfig'] = null !== $this->deletionProtectionConfig ? $this->deletionProtectionConfig->toArray($noStream) : $this->deletionProtectionConfig;
        }

        if (null !== $this->ipv6AddressType) {
            $res['Ipv6AddressType'] = $this->ipv6AddressType;
        }

        if (null !== $this->loadBalancerBillingConfig) {
            $res['LoadBalancerBillingConfig'] = null !== $this->loadBalancerBillingConfig ? $this->loadBalancerBillingConfig->toArray($noStream) : $this->loadBalancerBillingConfig;
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
            if (\is_array($this->loadBalancerOperationLocks)) {
                $res['LoadBalancerOperationLocks'] = [];
                $n1                                = 0;
                foreach ($this->loadBalancerOperationLocks as $item1) {
                    $res['LoadBalancerOperationLocks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }

        if (null !== $this->modificationProtectionConfig) {
            $res['ModificationProtectionConfig'] = null !== $this->modificationProtectionConfig ? $this->modificationProtectionConfig->toArray($noStream) : $this->modificationProtectionConfig;
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

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneMappings) {
            if (\is_array($this->zoneMappings)) {
                $res['ZoneMappings'] = [];
                $n1                  = 0;
                foreach ($this->zoneMappings as $item1) {
                    $res['ZoneMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                                = 0;
                foreach ($map['LoadBalancerOperationLocks'] as $item1) {
                    $model->loadBalancerOperationLocks[$n1++] = loadBalancerOperationLocks::fromMap($item1);
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

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1                      = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n1                  = 0;
                foreach ($map['ZoneMappings'] as $item1) {
                    $model->zoneMappings[$n1++] = zoneMappings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
