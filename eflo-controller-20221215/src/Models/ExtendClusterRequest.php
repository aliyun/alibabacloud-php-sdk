<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups;

class ExtendClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
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
        'clusterId' => 'ClusterId',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'ipAllocationPolicy' => 'IpAllocationPolicy',
        'nodeGroups' => 'NodeGroups',
        'vSwitchZoneId' => 'VSwitchZoneId',
        'vpdSubnets' => 'VpdSubnets',
    ];

    public function validate()
    {
        if (\is_array($this->ipAllocationPolicy)) {
            Model::validateArray($this->ipAllocationPolicy);
        }
        if (\is_array($this->nodeGroups)) {
            Model::validateArray($this->nodeGroups);
        }
        if (\is_array($this->vpdSubnets)) {
            Model::validateArray($this->vpdSubnets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }

        if (null !== $this->ipAllocationPolicy) {
            if (\is_array($this->ipAllocationPolicy)) {
                $res['IpAllocationPolicy'] = [];
                $n1 = 0;
                foreach ($this->ipAllocationPolicy as $item1) {
                    $res['IpAllocationPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeGroups) {
            if (\is_array($this->nodeGroups)) {
                $res['NodeGroups'] = [];
                $n1 = 0;
                foreach ($this->nodeGroups as $item1) {
                    $res['NodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitchZoneId) {
            $res['VSwitchZoneId'] = $this->vSwitchZoneId;
        }

        if (null !== $this->vpdSubnets) {
            if (\is_array($this->vpdSubnets)) {
                $res['VpdSubnets'] = [];
                $n1 = 0;
                foreach ($this->vpdSubnets as $item1) {
                    $res['VpdSubnets'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['IpAllocationPolicy'] as $item1) {
                    $model->ipAllocationPolicy[$n1] = ipAllocationPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n1 = 0;
                foreach ($map['NodeGroups'] as $item1) {
                    $model->nodeGroups[$n1] = nodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VSwitchZoneId'])) {
            $model->vSwitchZoneId = $map['VSwitchZoneId'];
        }

        if (isset($map['VpdSubnets'])) {
            if (!empty($map['VpdSubnets'])) {
                $model->vpdSubnets = [];
                $n1 = 0;
                foreach ($map['VpdSubnets'] as $item1) {
                    $model->vpdSubnets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
