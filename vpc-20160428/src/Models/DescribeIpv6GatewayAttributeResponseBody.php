<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewayAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeIpv6GatewayAttributeResponseBody extends Model
{
    /**
     * @description The service status of the IPv6 gateway. Valid values:
     *
     *   **Normal**: The IPv6 gateway runs as expected.
     *   **FinacialLocked**: The IPv6 gateway is locked due to overdue payments.
     *   **SecurityLocked**: The IPv6 gateway is locked due to security reasons.
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the IPv6 gateway was created.
     *
     * @example 2018-12-05T09:21:35Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the IPv6 gateway.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the IPv6 gateway expires.
     *
     * @example 2019-1-05T09:21:35Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The metering method of the IPv6 gateway.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the IPv6 gateway.
     *
     * @example ipv6gw-hp3y0l3ln89j8cdvf****
     *
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @description The name of the IPv6 gateway.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region where the IPv6 gateway is deployed.
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the IPv6 gateway. Valid values:
     *
     *   **Pending**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the IPv6 gateway belongs.
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
        'requestId'          => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeIpv6GatewayAttributeResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
