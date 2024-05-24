<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancersRequest extends Model
{
    /**
     * @description The IP address that the CLB instance uses to provide services.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The IP version that is used by the CLB instance. Valid values: **ipv4** and **ipv6**.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The network type of the CLB instance. Valid values:
     *
     *   **internet:** After an Internet-facing CLB instance is created, the system assigns a public IP address to the CLB instance. Then, the CLB instance can forward requests over the Internet.
     *   **intranet:** After an internal-facing CLB instance is created, the system assigns a private IP address to the CLB instance. Then, the CLB instance can forward requests only over internal networks.
     *
     * @example intranet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The metering method of Internet data transfer. Valid values:
     *
     *   **paybybandwidth:** pay-by-bandwidth.
     *   **paybytraffic:** pay-by-data-transfer.
     *
     * @example paybytraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The ID of the CLB instance.
     *
     * You can specify up to 10 IDs. Separate multiple IDs with commas (,).
     * @example lb-bp1b6c719dfa****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the CLB instance.
     *
     * You can specify up to 10 names. Separate multiple names with commas (,).
     * @example test
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The status of the CLB instance. Valid values:
     *
     *   **inactive:** The CLB instance is disabled. CLB instances in the inactive state do not forward traffic.
     *   **active:** The CLB instance runs as expected. By default, newly created CLB instances are in the **active** state.
     *   **locked:** The CLB instance is locked. After a CLB instance expires, it is locked for seven days. A locked CLB instance cannot forward traffic and you cannot perform operations on the locked CLB instance. However, other settings such as the IP address are retained.
     *
     * @example active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The ID of the primary zone to which the CLB instance belongs.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $masterZoneId;

    /**
     * @description The network type of the internal-facing CLB instance. Valid values:
     *
     *   **vpc:** VPC.
     *   **classic:** classic network.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Valid values: **1** to **100**.
     *
     * >  If you specify the **PageSize** parameter, you must also specify the **PageNumber** parameter.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The billing method of the CLB instance. Valid values:
     *
     *   Set the value to **PayOnDemand**.
     *
     * @example PayOnDemand
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the region where the CLB instance is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the backend server that is added to the CLB instance.
     *
     * @example vm-server-23****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The private IP address of the backend server that is added to the CLB instance.
     *
     * You can specify multiple IP addresses. Separate multiple IP addresses with commas (,).
     * @example 10.XX.XX.102
     *
     * @var string
     */
    public $serverIntranetAddress;

    /**
     * @description The ID of the secondary zone to which the CLB instance belongs.
     *
     * CLB instances on Alibaba Finance Cloud do not support cross-zone deployment.
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $slaveZoneId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The tags that are added to the CLB instance. The tags must be key-value pairs that are contained in a JSON dictionary.
     *
     * You can specify up to 10 tags in each call.
     * @example [{"tagKey":"Key1","tagValue":"Value1"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the vSwitch to which the CLB instance belongs.
     *
     * @example vsw-bp12mw1f8k3****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the CLB instance belongs.
     *
     * @example vpc-bp1aevy8sof****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'address'               => 'Address',
        'addressIPVersion'      => 'AddressIPVersion',
        'addressType'           => 'AddressType',
        'internetChargeType'    => 'InternetChargeType',
        'loadBalancerId'        => 'LoadBalancerId',
        'loadBalancerName'      => 'LoadBalancerName',
        'loadBalancerStatus'    => 'LoadBalancerStatus',
        'masterZoneId'          => 'MasterZoneId',
        'networkType'           => 'NetworkType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'payType'               => 'PayType',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'serverId'              => 'ServerId',
        'serverIntranetAddress' => 'ServerIntranetAddress',
        'slaveZoneId'           => 'SlaveZoneId',
        'tag'                   => 'Tag',
        'tags'                  => 'Tags',
        'vSwitchId'             => 'VSwitchId',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverIntranetAddress) {
            $res['ServerIntranetAddress'] = $this->serverIntranetAddress;
        }
        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIntranetAddress'])) {
            $model->serverIntranetAddress = $map['ServerIntranetAddress'];
        }
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
