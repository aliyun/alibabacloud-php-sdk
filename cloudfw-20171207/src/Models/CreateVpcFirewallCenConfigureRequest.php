<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateVpcFirewallCenConfigureRequest extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $firewallSwitch;

    /**
     * @var string
     */
    public $firewallVSwitchCidrBlock;

    /**
     * @var string
     */
    public $firewallVpcCidrBlock;

    /**
     * @var string
     */
    public $firewallVpcStandbyZoneId;

    /**
     * @var string
     */
    public $firewallVpcZoneId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcFirewallName;

    /**
     * @var string
     */
    public $vpcRegion;
    protected $_name = [
        'cenId' => 'CenId',
        'firewallSwitch' => 'FirewallSwitch',
        'firewallVSwitchCidrBlock' => 'FirewallVSwitchCidrBlock',
        'firewallVpcCidrBlock' => 'FirewallVpcCidrBlock',
        'firewallVpcStandbyZoneId' => 'FirewallVpcStandbyZoneId',
        'firewallVpcZoneId' => 'FirewallVpcZoneId',
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'networkInstanceId' => 'NetworkInstanceId',
        'vSwitchId' => 'VSwitchId',
        'vpcFirewallName' => 'VpcFirewallName',
        'vpcRegion' => 'VpcRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->firewallSwitch) {
            $res['FirewallSwitch'] = $this->firewallSwitch;
        }

        if (null !== $this->firewallVSwitchCidrBlock) {
            $res['FirewallVSwitchCidrBlock'] = $this->firewallVSwitchCidrBlock;
        }

        if (null !== $this->firewallVpcCidrBlock) {
            $res['FirewallVpcCidrBlock'] = $this->firewallVpcCidrBlock;
        }

        if (null !== $this->firewallVpcStandbyZoneId) {
            $res['FirewallVpcStandbyZoneId'] = $this->firewallVpcStandbyZoneId;
        }

        if (null !== $this->firewallVpcZoneId) {
            $res['FirewallVpcZoneId'] = $this->firewallVpcZoneId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }

        if (null !== $this->vpcRegion) {
            $res['VpcRegion'] = $this->vpcRegion;
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['FirewallSwitch'])) {
            $model->firewallSwitch = $map['FirewallSwitch'];
        }

        if (isset($map['FirewallVSwitchCidrBlock'])) {
            $model->firewallVSwitchCidrBlock = $map['FirewallVSwitchCidrBlock'];
        }

        if (isset($map['FirewallVpcCidrBlock'])) {
            $model->firewallVpcCidrBlock = $map['FirewallVpcCidrBlock'];
        }

        if (isset($map['FirewallVpcStandbyZoneId'])) {
            $model->firewallVpcStandbyZoneId = $map['FirewallVpcStandbyZoneId'];
        }

        if (isset($map['FirewallVpcZoneId'])) {
            $model->firewallVpcZoneId = $map['FirewallVpcZoneId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        if (isset($map['VpcRegion'])) {
            $model->vpcRegion = $map['VpcRegion'];
        }

        return $model;
    }
}
