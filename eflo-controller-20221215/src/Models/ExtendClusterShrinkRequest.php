<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ExtendClusterShrinkRequest extends Model
{
    /**
     * @description Cluster ID
     *
     * @example i15b480fbd2fcdbc2869cd80
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Whether to allow skipping failed node tasks, default value is False
     *
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @description IP allocation combination policy: Each policy can only choose one type, and multiple policies can be combined
     *
     * @var string
     */
    public $ipAllocationPolicyShrink;

    /**
     * @description Node Groups
     *
     * @var string
     */
    public $nodeGroupsShrink;

    /**
     * @description VSwitch availability zone ID
     *
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $vSwitchZoneId;

    /**
     * @description List of cluster subnets
     *
     * @var string
     */
    public $vpdSubnetsShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'ipAllocationPolicyShrink' => 'IpAllocationPolicy',
        'nodeGroupsShrink' => 'NodeGroups',
        'vSwitchZoneId' => 'VSwitchZoneId',
        'vpdSubnetsShrink' => 'VpdSubnets',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->ipAllocationPolicyShrink) {
            $res['IpAllocationPolicy'] = $this->ipAllocationPolicyShrink;
        }
        if (null !== $this->nodeGroupsShrink) {
            $res['NodeGroups'] = $this->nodeGroupsShrink;
        }
        if (null !== $this->vSwitchZoneId) {
            $res['VSwitchZoneId'] = $this->vSwitchZoneId;
        }
        if (null !== $this->vpdSubnetsShrink) {
            $res['VpdSubnets'] = $this->vpdSubnetsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }
        if (isset($map['IpAllocationPolicy'])) {
            $model->ipAllocationPolicyShrink = $map['IpAllocationPolicy'];
        }
        if (isset($map['NodeGroups'])) {
            $model->nodeGroupsShrink = $map['NodeGroups'];
        }
        if (isset($map['VSwitchZoneId'])) {
            $model->vSwitchZoneId = $map['VSwitchZoneId'];
        }
        if (isset($map['VpdSubnets'])) {
            $model->vpdSubnetsShrink = $map['VpdSubnets'];
        }

        return $model;
    }
}
