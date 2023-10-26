<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups;
use AlibabaCloud\Tea\Model;

class ExtendClusterRequest extends Model
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
     * @var ipAllocationPolicy[]
     */
    public $ipAllocationPolicy;

    /**
     * @var nodeGroups[]
     */
    public $nodeGroups;

    /**
     * @var string
     */
    public $vSwitchZoneId;

    /**
     * @var string[]
     */
    public $vpdSubnets;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'ipAllocationPolicy'    => 'IpAllocationPolicy',
        'nodeGroups'            => 'NodeGroups',
        'vSwitchZoneId'         => 'VSwitchZoneId',
        'vpdSubnets'            => 'VpdSubnets',
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
        if (null !== $this->ipAllocationPolicy) {
            $res['IpAllocationPolicy'] = [];
            if (null !== $this->ipAllocationPolicy && \is_array($this->ipAllocationPolicy)) {
                $n = 0;
                foreach ($this->ipAllocationPolicy as $item) {
                    $res['IpAllocationPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeGroups) {
            $res['NodeGroups'] = [];
            if (null !== $this->nodeGroups && \is_array($this->nodeGroups)) {
                $n = 0;
                foreach ($this->nodeGroups as $item) {
                    $res['NodeGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchZoneId) {
            $res['VSwitchZoneId'] = $this->vSwitchZoneId;
        }
        if (null !== $this->vpdSubnets) {
            $res['VpdSubnets'] = $this->vpdSubnets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendClusterRequest
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
            if (!empty($map['IpAllocationPolicy'])) {
                $model->ipAllocationPolicy = [];
                $n                         = 0;
                foreach ($map['IpAllocationPolicy'] as $item) {
                    $model->ipAllocationPolicy[$n++] = null !== $item ? ipAllocationPolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n                 = 0;
                foreach ($map['NodeGroups'] as $item) {
                    $model->nodeGroups[$n++] = null !== $item ? nodeGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchZoneId'])) {
            $model->vSwitchZoneId = $map['VSwitchZoneId'];
        }
        if (isset($map['VpdSubnets'])) {
            if (!empty($map['VpdSubnets'])) {
                $model->vpdSubnets = $map['VpdSubnets'];
            }
        }

        return $model;
    }
}
