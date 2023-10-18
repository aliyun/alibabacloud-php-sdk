<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponseBody\ipv6Gateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponseBody\ipv6Gateways\ipv6Gateway\tags;
use AlibabaCloud\Tea\Model;

class ipv6Gateway extends Model
{
    /**
     * @description The state of the IPv6 gateway. Valid values:
     *
     *   **Normal**: The IPv6 gateway runs as expected.
     *   **FinancialLocked:** The IPv6 gateway is locked due to overdue payments.
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the IPv6 gateway was created.
     *
     * @example 2020-12-20T14:51:23Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the IPv6 gateway.
     *
     * @example descriptionforIPv6GW
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the IPv6 gateway expires.
     *
     * @example 2021-12-20T14:51:23Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The billing method of the IPv6 gateway.
     *
     * Only **PostPaid** may be returned, which indicates that the IPv6 gateway uses the pay-as-you-go billing method.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the IPv6 gateway.
     *
     * @example ipv6gw-hp3rwmtmfhgisipv6gw-hp3rwmtmfhgis****
     *
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @description The name of the IPv6 gateway.
     *
     * @example ipv6GW
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region in which the IPv6 gateway is deployed.
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the IPv6 gateway. Valid values:
     *
     *   **Pending**: The IPv6 gateway is being configured.
     *   **Available**: The IPv6 gateway is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about the tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the VPC to which the IPv6 gateway belongs.
     *
     * @example vpc-123sedrfswd23****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'businessStatus'     => 'BusinessStatus',
        'creationTime'       => 'CreationTime',
        'description'        => 'Description',
        'expiredTime'        => 'ExpiredTime',
        'instanceChargeType' => 'InstanceChargeType',
        'ipv6GatewayId'      => 'Ipv6GatewayId',
        'name'               => 'Name',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'status'             => 'Status',
        'tags'               => 'Tags',
        'vpcId'              => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->ipv6GatewayId) {
            $res['Ipv6GatewayId'] = $this->ipv6GatewayId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Gateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Ipv6GatewayId'])) {
            $model->ipv6GatewayId = $map['Ipv6GatewayId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
