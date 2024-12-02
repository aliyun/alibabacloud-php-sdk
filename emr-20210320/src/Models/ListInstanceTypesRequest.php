<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceTypesRequest extends Model
{
    /**
     * @description The ID of cluster.
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster type.
     *
     * This parameter is required.
     * @example DATALAKE
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Deployment mode.
     *
     * @example HA
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description Instance Type
     *
     * @example ecs.g6.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Whether to change the configuration.
     *
     * @example false
     *
     * @var bool
     */
    public $isModification;

    /**
     * @description Node group ID.
     *
     * @example G-F06C4B47966A****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description Node group type.
     *
     * This parameter is required.
     * @example CORE
     *
     * @var string
     */
    public $nodeGroupType;

    /**
     * @description Payment type.
     *
     * This parameter is required.
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The ID of the region in which you want to create the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description EMR distribution.
     *
     * @example EMR-5.8.0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description Availability Zone ID
     *
     * This parameter is required.
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterType'    => 'ClusterType',
        'deployMode'     => 'DeployMode',
        'instanceType'   => 'InstanceType',
        'isModification' => 'IsModification',
        'nodeGroupId'    => 'NodeGroupId',
        'nodeGroupType'  => 'NodeGroupType',
        'paymentType'    => 'PaymentType',
        'regionId'       => 'RegionId',
        'releaseVersion' => 'ReleaseVersion',
        'zoneId'         => 'ZoneId',
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
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isModification) {
            $res['IsModification'] = $this->isModification;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeGroupType) {
            $res['NodeGroupType'] = $this->nodeGroupType;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceTypesRequest
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
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsModification'])) {
            $model->isModification = $map['IsModification'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeGroupType'])) {
            $model->nodeGroupType = $map['NodeGroupType'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
