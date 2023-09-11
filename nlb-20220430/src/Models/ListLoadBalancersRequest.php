<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListLoadBalancersRequest extends Model
{
    /**
     * @description The protocol version. Valid values:
     *
     *   **ipv4**: IPv4
     *   **DualStack**: dual stack
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
     *   **Intranet**: The NLB instance uses a private IP address. The domain name of the NLB instance is resolved to the private IP address. Therefore, the NLB instance can be accessed over the VPC where the NLB instance is deployed.
     *
     * @example Internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The domain name of the NLB instance.
     *
     * @example nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com
     *
     * @var string
     */
    public $DNSName;

    /**
     * @description The type of IPv6 address used by the NLB instance. Valid values:
     *
     *   **Internet**: a public IP address. The domain name of the NLB instance is resolved to the public IP address. Therefore, the NLB instance can be accessed over the Internet.
     *   **Intranet**: a private IP address. The domain name of the NLB instance is resolved to the private IP address. Therefore, the NLB instance can be accessed over the VPC where the NLB instance is deployed.
     *
     * @example Internet
     *
     * @var string
     */
    public $ipv6AddressType;

    /**
     * @description The business status of the NLB instance. Valid values:
     *
     *   **Abnormal**: The NLB instance is not working as expected.
     *   **Normal**: The NLB instance is working as expected.
     *
     * @example Normal
     *
     * @var string
     */
    public $loadBalancerBusinessStatus;

    /**
     * @description The ID of the NLB instance. You can query up to 20 NLB instances at a time.
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description The name of the NLB instance. You can specify up to 20 names at a time.
     *
     * @var string[]
     */
    public $loadBalancerNames;

    /**
     * @description The status of the NLB instance. Valid values:
     *
     *   **Inactive**: The NLB instance is disabled. Listeners of NLB instances in the Inactive state do not forward traffic.
     *   **Active**: The NLB instance is running.
     *   **Provisioning**: The NLB instance is being created.
     *   **Configuring**: The NLB instance is being modified.
     *   **Deleting**: The NLB instance is being deleted.
     *   **Deleted**: The NLB instance is deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The type of the Server Load Balancer (SLB) instance. Set the value to **network**, which specifies NLB.
     *
     * @example network
     *
     * @var string
     */
    public $loadBalancerType;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. Valid values:
     *
     *   If this is your first query and no subsequent queries are to be sent, ignore this parameter.
     *   If a subsequent query is to be sent, set the parameter to the value of NextToken that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the NLB instance is deployed.
     *
     * You can call the [DescribeRegions](~~443657~~) operation to query the most recent region list.
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
     * @description The tags of the NLB instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the virtual private cloud (VPC) where the NLB instance is deployed. You can specify up to 10 VPC IDs at a time.
     *
     * @var string[]
     */
    public $vpcIds;

    /**
     * @description The name of the zone. You can call the [DescribeZones](~~443890~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addressIpVersion'           => 'AddressIpVersion',
        'addressType'                => 'AddressType',
        'DNSName'                    => 'DNSName',
        'ipv6AddressType'            => 'Ipv6AddressType',
        'loadBalancerBusinessStatus' => 'LoadBalancerBusinessStatus',
        'loadBalancerIds'            => 'LoadBalancerIds',
        'loadBalancerNames'          => 'LoadBalancerNames',
        'loadBalancerStatus'         => 'LoadBalancerStatus',
        'loadBalancerType'           => 'LoadBalancerType',
        'maxResults'                 => 'MaxResults',
        'nextToken'                  => 'NextToken',
        'regionId'                   => 'RegionId',
        'resourceGroupId'            => 'ResourceGroupId',
        'tag'                        => 'Tag',
        'vpcIds'                     => 'VpcIds',
        'zoneId'                     => 'ZoneId',
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
        if (null !== $this->DNSName) {
            $res['DNSName'] = $this->DNSName;
        }
        if (null !== $this->ipv6AddressType) {
            $res['Ipv6AddressType'] = $this->ipv6AddressType;
        }
        if (null !== $this->loadBalancerBusinessStatus) {
            $res['LoadBalancerBusinessStatus'] = $this->loadBalancerBusinessStatus;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->loadBalancerNames) {
            $res['LoadBalancerNames'] = $this->loadBalancerNames;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->loadBalancerType) {
            $res['LoadBalancerType'] = $this->loadBalancerType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLoadBalancersRequest
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
        if (isset($map['DNSName'])) {
            $model->DNSName = $map['DNSName'];
        }
        if (isset($map['Ipv6AddressType'])) {
            $model->ipv6AddressType = $map['Ipv6AddressType'];
        }
        if (isset($map['LoadBalancerBusinessStatus'])) {
            $model->loadBalancerBusinessStatus = $map['LoadBalancerBusinessStatus'];
        }
        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = $map['LoadBalancerIds'];
            }
        }
        if (isset($map['LoadBalancerNames'])) {
            if (!empty($map['LoadBalancerNames'])) {
                $model->loadBalancerNames = $map['LoadBalancerNames'];
            }
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['LoadBalancerType'])) {
            $model->loadBalancerType = $map['LoadBalancerType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['VpcIds'])) {
            if (!empty($map['VpcIds'])) {
                $model->vpcIds = $map['VpcIds'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
