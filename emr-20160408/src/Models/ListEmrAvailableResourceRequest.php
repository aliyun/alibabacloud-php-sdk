<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListEmrAvailableResourceRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $destinationResource;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $systemDiskType;

    /**
     * @var string
     */
    public $dataDiskType;

    /**
     * @var string
     */
    public $depositType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'resourceOwnerId'     => 'ResourceOwnerId',
        'regionId'            => 'RegionId',
        'destinationResource' => 'DestinationResource',
        'clusterType'         => 'ClusterType',
        'instanceChargeType'  => 'InstanceChargeType',
        'spotStrategy'        => 'SpotStrategy',
        'zoneId'              => 'ZoneId',
        'netType'             => 'NetType',
        'instanceType'        => 'InstanceType',
        'systemDiskType'      => 'SystemDiskType',
        'dataDiskType'        => 'DataDiskType',
        'depositType'         => 'DepositType',
        'clusterId'           => 'ClusterId',
        'resourceGroupId'     => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->destinationResource) {
            $res['DestinationResource'] = $this->destinationResource;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->dataDiskType) {
            $res['DataDiskType'] = $this->dataDiskType;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEmrAvailableResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DestinationResource'])) {
            $model->destinationResource = $map['DestinationResource'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['DataDiskType'])) {
            $model->dataDiskType = $map['DataDiskType'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
