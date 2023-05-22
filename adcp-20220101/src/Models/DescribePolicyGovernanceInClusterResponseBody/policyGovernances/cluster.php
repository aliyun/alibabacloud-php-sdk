<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @description The ID of the associated cluster.
     *
     * @example ca5cf1b5edb5c4736a6ea0dfb4061****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The specifications of the associated cluster.
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The type of the associated cluster.
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The name of the associated cluster.
     *
     * @example ack-001
     *
     * @var string
     */
    public $name;

    /**
     * @description The identifier of the associated cluster.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The region ID of the associated cluster.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the associated cluster.
     *
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clusterSpec' => 'ClusterSpec',
        'clusterType' => 'ClusterType',
        'name'        => 'Name',
        'profile'     => 'Profile',
        'regionId'    => 'RegionId',
        'state'       => 'State',
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
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
