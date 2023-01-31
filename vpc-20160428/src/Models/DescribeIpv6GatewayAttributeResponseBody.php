<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpv6GatewayAttributeResponseBody extends Model
{
    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example 2018-12-05T09:21:35Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 2018-12-05T09:21:35Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example ipv6gw-123456xxxxxxxx
     *
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ipv6gw-hp33p10bdbt77xxxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-123456xxxxxxxx
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
        'status'             => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
