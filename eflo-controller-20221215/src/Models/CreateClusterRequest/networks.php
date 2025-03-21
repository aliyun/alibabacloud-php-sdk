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
     * @description IP allocation policy
     *
     * @var ipAllocationPolicy[]
     */
    public $ipAllocationPolicy;

    /**
     * @description Vpd configuration information
     *
     * @var newVpdInfo
     */
    public $newVpdInfo;

    /**
     * @description Security group ID
     *
     * @example sg-bp1d3dvbh9by7j5rujax
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description IP version
     *
     * @example IPv4
     *
     * @var string
     */
    public $tailIpVersion;

    /**
     * @description VSwitch ID
     *
     * @example vsw-asjdfklj
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VSwitch Zone ID
     *
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $vSwitchZoneId;

    /**
     * @description VPC ID
     *
     * @example vpc-0jl36lqzmc06qogy0t5ll
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Reuse VPD information
     *
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

    public function validate() {}

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
                $n = 0;
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
