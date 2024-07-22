<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListLoadBalancersRequest extends Model
{
    /**
     * @description The IP version. Valid values:
     *
     *   **IPv4**
     *   **DualStack**
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @description The network type. Valid values:
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
     * @description The domain name.
     *
     * @example alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com
     *
     * @var string
     */
    public $DNSName;

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
     * @description The instance IDs. You can specify at most 20 ALB instance IDs.
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description The names of the instances. You can specify at most 10 names.
     *
     * @var string[]
     */
    public $loadBalancerNames;

    /**
     * @description The status of the ALB instance. Valid values:
     *
     *   **Inactive**: The ALB instance is disabled. The listeners do not forward traffic.
     *   **Active**: The ALB instance is running.
     *   **Provisioning**: The ALB instance is being created.
     *   **Configuring**: The ALB instance is being modified.
     *   **CreateFailed**: The system failed to create the ALB instance. In this case, you are not charged for the ALB instance. You can only delete the ALB instance. By default, the system deletes the ALB instances that are in the CreateFailed state within the last day.
     *
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The billing method of the ALB instance. Set the value to
     *
     **PostPay**, which specifies the pay-as-you-go billing method. This is the default value.
     *
     * @example PostPay
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags added to the ALB instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the ALB instance belongs. You can specify at most 10 IDs.
     *
     * @var string[]
     */
    public $vpcIds;

    /**
     * @description The ID of the zone where the ALB instance is deployed.
     *
     * You can call the [DescribeZones](https://help.aliyun.com/document_detail/189196.html) operation to query zones.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addressIpVersion'            => 'AddressIpVersion',
        'addressType'                 => 'AddressType',
        'DNSName'                     => 'DNSName',
        'ipv6AddressType'             => 'Ipv6AddressType',
        'loadBalancerBussinessStatus' => 'LoadBalancerBussinessStatus',
        'loadBalancerIds'             => 'LoadBalancerIds',
        'loadBalancerNames'           => 'LoadBalancerNames',
        'loadBalancerStatus'          => 'LoadBalancerStatus',
        'maxResults'                  => 'MaxResults',
        'nextToken'                   => 'NextToken',
        'payType'                     => 'PayType',
        'resourceGroupId'             => 'ResourceGroupId',
        'tag'                         => 'Tag',
        'vpcIds'                      => 'VpcIds',
        'zoneId'                      => 'ZoneId',
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
        if (null !== $this->loadBalancerBussinessStatus) {
            $res['LoadBalancerBussinessStatus'] = $this->loadBalancerBussinessStatus;
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (isset($map['LoadBalancerBussinessStatus'])) {
            $model->loadBalancerBussinessStatus = $map['LoadBalancerBussinessStatus'];
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
