<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c2f41fd4599454a9c9ad8b3daafe873ad
     *
     * @var string
     */
    public $clusterID;

    /**
     * @description The specification of the master instance. Valid values: - ack.pro.small: ACK Pro.
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The type of the master instance.
     *
     * @example One
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The time when the master instance was created.
     *
     * @example 2022-03-23T06:22:28Z
     *
     * @var string
     */
    public $created;

    /**
     * @description The current Kubernetes version of the master instance.
     *
     * @example 1.22.3-aliyun.1
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The original Kubernetes version of the master instance.
     *
     * @example 1.20.4-aliyun.1
     *
     * @var string
     */
    public $initVersion;

    /**
     * @description The name of the master instance.
     *
     * @example ackone-heyuan
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the master instance.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The region in which the master instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmx7o7ewyqcby
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the associated clusters. Valid values: - initial: The associated clusters are being initialized. - failed: The associated clustersfailed to be created. - running: The associated clusters are running. - inactive: The associated clusters are inactive. - deleting: The associated clusters are being deleted. - deleted: The associated clusters are deleted.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The time when the master instance was updated.
     *
     * @example 2022-03-23T06:22:28Z
     *
     * @var string
     */
    public $updated;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-m5e0pbkgmhvzecf7enfym
     *
     * @var string
     */
    public $vSwitchID;

    /**
     * @description VPC ID.
     *
     * @example vpc-bp1fhizs9fxuvit06zeb9
     *
     * @var string
     */
    public $vpcID;
    protected $_name = [
        'clusterID'       => 'ClusterID',
        'clusterSpec'     => 'ClusterSpec',
        'clusterType'     => 'ClusterType',
        'created'         => 'Created',
        'currentVersion'  => 'CurrentVersion',
        'initVersion'     => 'InitVersion',
        'name'            => 'Name',
        'profile'         => 'Profile',
        'region'          => 'Region',
        'resourceGroupId' => 'ResourceGroupId',
        'state'           => 'State',
        'updated'         => 'Updated',
        'vSwitchID'       => 'VSwitchID',
        'vpcID'           => 'VpcID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterID) {
            $res['ClusterID'] = $this->clusterID;
        }
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->initVersion) {
            $res['InitVersion'] = $this->initVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->vSwitchID) {
            $res['VSwitchID'] = $this->vSwitchID;
        }
        if (null !== $this->vpcID) {
            $res['VpcID'] = $this->vpcID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterID'])) {
            $model->clusterID = $map['ClusterID'];
        }
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['InitVersion'])) {
            $model->initVersion = $map['InitVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['VSwitchID'])) {
            $model->vSwitchID = $map['VSwitchID'];
        }
        if (isset($map['VpcID'])) {
            $model->vpcID = $map['VpcID'];
        }

        return $model;
    }
}
