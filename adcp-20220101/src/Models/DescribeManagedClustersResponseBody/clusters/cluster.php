<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @var string
     */
    public $clusterID;

    /**
     * @var string
     */
    public $clusterSpec;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $initVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $vSwitchID;

    /**
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
