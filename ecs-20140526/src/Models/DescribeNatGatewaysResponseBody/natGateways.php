<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponseBody;

use AlibabaCloud\Tea\Model;

class natGateways extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $bandwidthPackageIds;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string[]
     */
    public $forwardTableIds;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'              => 'Status',
        'creationTime'        => 'CreationTime',
        'vpcId'               => 'VpcId',
        'bandwidthPackageIds' => 'BandwidthPackageIds',
        'spec'                => 'Spec',
        'instanceChargeType'  => 'InstanceChargeType',
        'regionId'            => 'RegionId',
        'description'         => 'Description',
        'natGatewayId'        => 'NatGatewayId',
        'forwardTableIds'     => 'ForwardTableIds',
        'businessStatus'      => 'BusinessStatus',
        'name'                => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->bandwidthPackageIds) {
            $res['BandwidthPackageIds'] = $this->bandwidthPackageIds;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = $this->forwardTableIds;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['BandwidthPackageIds'])) {
            if (!empty($map['BandwidthPackageIds'])) {
                $model->bandwidthPackageIds = $map['BandwidthPackageIds'];
            }
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['ForwardTableIds'])) {
            if (!empty($map['ForwardTableIds'])) {
                $model->forwardTableIds = $map['ForwardTableIds'];
            }
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
