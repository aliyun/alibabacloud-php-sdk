<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest\deletionProtectionConfig;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest\modificationProtectionConfig;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest\tag;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest\zoneMappings;
use AlibabaCloud\Tea\Model;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @description The protocol version. Valid values:
     *
     *   **ipv4:** IPv4. This is the default value.
     *   **DualStack:** dual stack.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @description The type of IPv4 address used by the NLB instance. Valid values:
     *
     *   **Internet**: The NLB instance uses a public IP address. The domain name of the NLB instance is resolved to the public IP address. Therefore, the NLB instance can be accessed over the Internet.
     *   **Intranet**: The NLB instance uses a private IP address. The domain name of the NLB instance is resolved to the private IP address. Therefore, the NLB instance can be accessed over the virtual private cloud (VPC) where the NLB instance is deployed.
     *
     * This parameter is required.
     * @example Internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The ID of the EIP bandwidth plan that is associated with the Internet-facing NLB instance.
     *
     * @example cbwp-bp1vevu8h3ieh****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request is different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configuration of the deletion protection feature.
     *
     * @var deletionProtectionConfig
     */
    public $deletionProtectionConfig;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**: performs a dry run and sends the request. This is the default value. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The billing settings of the NLB instance.
     *
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;

    /**
     * @description The name of the NLB instance.
     *
     * The value must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The value must start with a letter.
     * @example NLB1
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The type of the instance. Set the value to **network**, which specifies an NLB instance.
     *
     * @example network
     *
     * @var string
     */
    public $loadBalancerType;

    /**
     * @description The configuration of the configuration read-only mode.
     *
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;

    /**
     * @description The ID of the region where the NLB instance is deployed.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/443657.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the VPC where the NLB instance is deployed.
     *
     * This parameter is required.
     * @example vpc-bp1b49rqrybk45nio****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The mappings between zones and vSwitches. You must add at least two zones. You can add a maximum of 10 zones.
     *
     * This parameter is required.
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressIpVersion'             => 'AddressIpVersion',
        'addressType'                  => 'AddressType',
        'bandwidthPackageId'           => 'BandwidthPackageId',
        'clientToken'                  => 'ClientToken',
        'deletionProtectionConfig'     => 'DeletionProtectionConfig',
        'dryRun'                       => 'DryRun',
        'loadBalancerBillingConfig'    => 'LoadBalancerBillingConfig',
        'loadBalancerName'             => 'LoadBalancerName',
        'loadBalancerType'             => 'LoadBalancerType',
        'modificationProtectionConfig' => 'ModificationProtectionConfig',
        'regionId'                     => 'RegionId',
        'resourceGroupId'              => 'ResourceGroupId',
        'tag'                          => 'Tag',
        'vpcId'                        => 'VpcId',
        'zoneMappings'                 => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deletionProtectionConfig) {
            $res['DeletionProtectionConfig'] = null !== $this->deletionProtectionConfig ? $this->deletionProtectionConfig->toMap() : null;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerBillingConfig) {
            $res['LoadBalancerBillingConfig'] = null !== $this->loadBalancerBillingConfig ? $this->loadBalancerBillingConfig->toMap() : null;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerType) {
            $res['LoadBalancerType'] = $this->loadBalancerType;
        }
        if (null !== $this->modificationProtectionConfig) {
            $res['ModificationProtectionConfig'] = null !== $this->modificationProtectionConfig ? $this->modificationProtectionConfig->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateLoadBalancerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeletionProtectionConfig'])) {
            $model->deletionProtectionConfig = deletionProtectionConfig::fromMap($map['DeletionProtectionConfig']);
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerBillingConfig'])) {
            $model->loadBalancerBillingConfig = loadBalancerBillingConfig::fromMap($map['LoadBalancerBillingConfig']);
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerType'])) {
            $model->loadBalancerType = $map['LoadBalancerType'];
        }
        if (isset($map['ModificationProtectionConfig'])) {
            $model->modificationProtectionConfig = modificationProtectionConfig::fromMap($map['ModificationProtectionConfig']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
