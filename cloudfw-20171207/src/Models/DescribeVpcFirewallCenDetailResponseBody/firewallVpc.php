<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody;

use AlibabaCloud\Dara\Model;

class firewallVpc extends Model
{
    /**
     * @var int
     */
    public $allowConfiguration;

    /**
     * @var string
     */
    public $firewallServiceMode;

    /**
     * @var string[]
     */
    public $firewallServiceZones;

    /**
     * @var string
     */
    public $standbyZoneId;

    /**
     * @var string
     */
    public $vpcCidr;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchCidr;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $vswitchZoneId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allowConfiguration' => 'AllowConfiguration',
        'firewallServiceMode' => 'FirewallServiceMode',
        'firewallServiceZones' => 'FirewallServiceZones',
        'standbyZoneId' => 'StandbyZoneId',
        'vpcCidr' => 'VpcCidr',
        'vpcId' => 'VpcId',
        'vswitchCidr' => 'VswitchCidr',
        'vswitchId' => 'VswitchId',
        'vswitchZoneId' => 'VswitchZoneId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallServiceZones)) {
            Model::validateArray($this->firewallServiceZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowConfiguration) {
            $res['AllowConfiguration'] = $this->allowConfiguration;
        }

        if (null !== $this->firewallServiceMode) {
            $res['FirewallServiceMode'] = $this->firewallServiceMode;
        }

        if (null !== $this->firewallServiceZones) {
            if (\is_array($this->firewallServiceZones)) {
                $res['FirewallServiceZones'] = [];
                $n1 = 0;
                foreach ($this->firewallServiceZones as $item1) {
                    $res['FirewallServiceZones'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }

        if (null !== $this->vpcCidr) {
            $res['VpcCidr'] = $this->vpcCidr;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchCidr) {
            $res['VswitchCidr'] = $this->vswitchCidr;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        if (null !== $this->vswitchZoneId) {
            $res['VswitchZoneId'] = $this->vswitchZoneId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AllowConfiguration'])) {
            $model->allowConfiguration = $map['AllowConfiguration'];
        }

        if (isset($map['FirewallServiceMode'])) {
            $model->firewallServiceMode = $map['FirewallServiceMode'];
        }

        if (isset($map['FirewallServiceZones'])) {
            if (!empty($map['FirewallServiceZones'])) {
                $model->firewallServiceZones = [];
                $n1 = 0;
                foreach ($map['FirewallServiceZones'] as $item1) {
                    $model->firewallServiceZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }

        if (isset($map['VpcCidr'])) {
            $model->vpcCidr = $map['VpcCidr'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchCidr'])) {
            $model->vswitchCidr = $map['VswitchCidr'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['VswitchZoneId'])) {
            $model->vswitchZoneId = $map['VswitchZoneId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
