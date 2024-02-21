<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListEmrAvailableResourceRequest extends Model
{
    /**
     * @example C-D7958B72E59B****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $dataDiskType;

    /**
     * @example HALF_MANAGED
     *
     * @var string
     */
    public $depositType;

    /**
     * @example DataDisk
     *
     * @var string
     */
    public $destinationResource;

    /**
     * @example EMR-3.16.0
     *
     * @var string
     */
    public $emrVersion;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example ecs.g5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 12345
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskType;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'clusterType'         => 'ClusterType',
        'dataDiskType'        => 'DataDiskType',
        'depositType'         => 'DepositType',
        'destinationResource' => 'DestinationResource',
        'emrVersion'          => 'EmrVersion',
        'instanceChargeType'  => 'InstanceChargeType',
        'instanceType'        => 'InstanceType',
        'netType'             => 'NetType',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceOwnerId'     => 'ResourceOwnerId',
        'spotStrategy'        => 'SpotStrategy',
        'systemDiskType'      => 'SystemDiskType',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->dataDiskType) {
            $res['DataDiskType'] = $this->dataDiskType;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->destinationResource) {
            $res['DestinationResource'] = $this->destinationResource;
        }
        if (null !== $this->emrVersion) {
            $res['EmrVersion'] = $this->emrVersion;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DataDiskType'])) {
            $model->dataDiskType = $map['DataDiskType'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['DestinationResource'])) {
            $model->destinationResource = $map['DestinationResource'];
        }
        if (isset($map['EmrVersion'])) {
            $model->emrVersion = $map['EmrVersion'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
