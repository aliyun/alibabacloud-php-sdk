<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponseBody\ipv6Gateways;

use AlibabaCloud\Tea\Model;

class ipv6Gateway extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'status'             => 'Status',
        'vpcId'              => 'VpcId',
        'spec'               => 'Spec',
        'description'        => 'Description',
        'ipv6GatewayId'      => 'Ipv6GatewayId',
        'expiredTime'        => 'ExpiredTime',
        'businessStatus'     => 'BusinessStatus',
        'name'               => 'Name',
        'instanceChargeType' => 'InstanceChargeType',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipv6GatewayId) {
            $res['Ipv6GatewayId'] = $this->ipv6GatewayId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Ipv6GatewayId'])) {
            $model->ipv6GatewayId = $map['Ipv6GatewayId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
