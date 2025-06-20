<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\newVpdInfo;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\vpdInfo;

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
    public $tailIpVersion;

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
     * @var vpdInfo
     */
    public $vpdInfo;
    protected $_name = [
        'ipAllocationPolicy' => 'IpAllocationPolicy',
        'newVpdInfo' => 'NewVpdInfo',
        'securityGroupId' => 'SecurityGroupId',
        'tailIpVersion' => 'TailIpVersion',
        'vSwitchId' => 'VSwitchId',
        'vSwitchZoneId' => 'VSwitchZoneId',
        'vpcId' => 'VpcId',
        'vpdInfo' => 'VpdInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ipAllocationPolicy)) {
            Model::validateArray($this->ipAllocationPolicy);
        }
        if (null !== $this->newVpdInfo) {
            $this->newVpdInfo->validate();
        }
        if (null !== $this->vpdInfo) {
            $this->vpdInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->newVpdInfo) {
            $res['NewVpdInfo'] = null !== $this->newVpdInfo ? $this->newVpdInfo->toArray($noStream) : $this->newVpdInfo;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->tailIpVersion) {
            $res['TailIpVersion'] = $this->tailIpVersion;
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
            $res['VpdInfo'] = null !== $this->vpdInfo ? $this->vpdInfo->toArray($noStream) : $this->vpdInfo;
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

        if (isset($map['NewVpdInfo'])) {
            $model->newVpdInfo = newVpdInfo::fromMap($map['NewVpdInfo']);
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['TailIpVersion'])) {
            $model->tailIpVersion = $map['TailIpVersion'];
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
