<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\newVpdInfo;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\vpdInfo;
use AlibabaCloud\Tea\Model;

class networks extends Model
{
    /**
     * @var ipAllocationPolicy[]
     */
    public $ipAllocationPolicy;

    /**
     * @var newVpdInfo
     */
    public $newVpdInfo;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchZoneId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @description 复用VPD信息
     *
     * @var vpdInfo
     */
    public $vpdInfo;
    protected $_name = [
        'ipAllocationPolicy' => 'IpAllocationPolicy',
        'newVpdInfo'         => 'NewVpdInfo',
        'securityGroupId'    => 'SecurityGroupId',
        'vSwitchId'          => 'VSwitchId',
        'vSwitchZoneId'      => 'VSwitchZoneId',
        'vpcId'              => 'VpcId',
        'vpdInfo'            => 'VpdInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAllocationPolicy) {
            $res['IpAllocationPolicy'] = [];
            if (null !== $this->ipAllocationPolicy && \is_array($this->ipAllocationPolicy)) {
                $n = 0;
                foreach ($this->ipAllocationPolicy as $item) {
                    $res['IpAllocationPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->newVpdInfo) {
            $res['NewVpdInfo'] = null !== $this->newVpdInfo ? $this->newVpdInfo->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchZoneId) {
            $res['VSwitchZoneId'] = $this->vSwitchZoneId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdInfo) {
            $res['VpdInfo'] = null !== $this->vpdInfo ? $this->vpdInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAllocationPolicy'])) {
            if (!empty($map['IpAllocationPolicy'])) {
                $model->ipAllocationPolicy = [];
                $n                         = 0;
                foreach ($map['IpAllocationPolicy'] as $item) {
                    $model->ipAllocationPolicy[$n++] = null !== $item ? ipAllocationPolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NewVpdInfo'])) {
            $model->newVpdInfo = newVpdInfo::fromMap($map['NewVpdInfo']);
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchZoneId'])) {
            $model->vSwitchZoneId = $map['VSwitchZoneId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdInfo'])) {
            $model->vpdInfo = vpdInfo::fromMap($map['VpdInfo']);
        }

        return $model;
    }
}
