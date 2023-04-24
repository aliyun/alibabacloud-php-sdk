<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ExtendClusterShrinkRequest extends Model
{
    /**
     * @example i15b480fbd2fcdbc2869cd80
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @var string
     */
    public $ipAllocationPolicyShrink;

    /**
     * @var string
     */
    public $nodeGroupsShrink;

    /**
     * @var string
     */
    public $vpdSubnetsShrink;
    protected $_name = [
        'clusterId'                => 'ClusterId',
        'ignoreFailedNodeTasks'    => 'IgnoreFailedNodeTasks',
        'ipAllocationPolicyShrink' => 'IpAllocationPolicy',
        'nodeGroupsShrink'         => 'NodeGroups',
        'vpdSubnetsShrink'         => 'VpdSubnets',
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
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->ipAllocationPolicyShrink) {
            $res['IpAllocationPolicy'] = $this->ipAllocationPolicyShrink;
        }
        if (null !== $this->nodeGroupsShrink) {
            $res['NodeGroups'] = $this->nodeGroupsShrink;
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
        if (isset($map['VpdSubnets'])) {
            $model->vpdSubnetsShrink = $map['VpdSubnets'];
        }

        return $model;
    }
}
