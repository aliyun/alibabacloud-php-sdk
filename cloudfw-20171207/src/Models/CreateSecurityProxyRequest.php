<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSecurityProxyRequest\natRouteEntryList;

class CreateSecurityProxyRequest extends Model
{
    /**
     * @var string
     */
    public $basicDefenseEnabled;

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
    public $firewallSwitch;

    /**
     * @var string
     */
    public $fwVswitchZoneId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $masterVSwitchCidr;

    /**
     * @var string
     */
    public $masterZoneId;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natMode;

    /**
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @var string
     */
    public $proxyName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $ruleClass;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $standbyVSwitchCidr;

    /**
     * @var string
     */
    public $standbyZoneId;

    /**
     * @var int
     */
    public $strictMode;

    /**
     * @var string
     */
    public $threatIntelEnabled;

    /**
     * @var string
     */
    public $virtualPatchEnabled;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchAuto;

    /**
     * @var string
     */
    public $vswitchCidr;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'basicDefenseEnabled' => 'BasicDefenseEnabled',
        'firewallServiceMode' => 'FirewallServiceMode',
        'firewallServiceZones' => 'FirewallServiceZones',
        'firewallSwitch' => 'FirewallSwitch',
        'fwVswitchZoneId' => 'FwVswitchZoneId',
        'lang' => 'Lang',
        'masterVSwitchCidr' => 'MasterVSwitchCidr',
        'masterZoneId' => 'MasterZoneId',
        'natGatewayId' => 'NatGatewayId',
        'natMode' => 'NatMode',
        'natRouteEntryList' => 'NatRouteEntryList',
        'proxyName' => 'ProxyName',
        'regionNo' => 'RegionNo',
        'ruleClass' => 'RuleClass',
        'runMode' => 'RunMode',
        'standbyVSwitchCidr' => 'StandbyVSwitchCidr',
        'standbyZoneId' => 'StandbyZoneId',
        'strictMode' => 'StrictMode',
        'threatIntelEnabled' => 'ThreatIntelEnabled',
        'virtualPatchEnabled' => 'VirtualPatchEnabled',
        'vpcId' => 'VpcId',
        'vswitchAuto' => 'VswitchAuto',
        'vswitchCidr' => 'VswitchCidr',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallServiceZones)) {
            Model::validateArray($this->firewallServiceZones);
        }
        if (\is_array($this->natRouteEntryList)) {
            Model::validateArray($this->natRouteEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicDefenseEnabled) {
            $res['BasicDefenseEnabled'] = $this->basicDefenseEnabled;
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

        if (null !== $this->firewallSwitch) {
            $res['FirewallSwitch'] = $this->firewallSwitch;
        }

        if (null !== $this->fwVswitchZoneId) {
            $res['FwVswitchZoneId'] = $this->fwVswitchZoneId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->masterVSwitchCidr) {
            $res['MasterVSwitchCidr'] = $this->masterVSwitchCidr;
        }

        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natMode) {
            $res['NatMode'] = $this->natMode;
        }

        if (null !== $this->natRouteEntryList) {
            if (\is_array($this->natRouteEntryList)) {
                $res['NatRouteEntryList'] = [];
                $n1 = 0;
                foreach ($this->natRouteEntryList as $item1) {
                    $res['NatRouteEntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->proxyName) {
            $res['ProxyName'] = $this->proxyName;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->ruleClass) {
            $res['RuleClass'] = $this->ruleClass;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->standbyVSwitchCidr) {
            $res['StandbyVSwitchCidr'] = $this->standbyVSwitchCidr;
        }

        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }

        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
        }

        if (null !== $this->threatIntelEnabled) {
            $res['ThreatIntelEnabled'] = $this->threatIntelEnabled;
        }

        if (null !== $this->virtualPatchEnabled) {
            $res['VirtualPatchEnabled'] = $this->virtualPatchEnabled;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchAuto) {
            $res['VswitchAuto'] = $this->vswitchAuto;
        }

        if (null !== $this->vswitchCidr) {
            $res['VswitchCidr'] = $this->vswitchCidr;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['BasicDefenseEnabled'])) {
            $model->basicDefenseEnabled = $map['BasicDefenseEnabled'];
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

        if (isset($map['FirewallSwitch'])) {
            $model->firewallSwitch = $map['FirewallSwitch'];
        }

        if (isset($map['FwVswitchZoneId'])) {
            $model->fwVswitchZoneId = $map['FwVswitchZoneId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MasterVSwitchCidr'])) {
            $model->masterVSwitchCidr = $map['MasterVSwitchCidr'];
        }

        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatMode'])) {
            $model->natMode = $map['NatMode'];
        }

        if (isset($map['NatRouteEntryList'])) {
            if (!empty($map['NatRouteEntryList'])) {
                $model->natRouteEntryList = [];
                $n1 = 0;
                foreach ($map['NatRouteEntryList'] as $item1) {
                    $model->natRouteEntryList[$n1] = natRouteEntryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProxyName'])) {
            $model->proxyName = $map['ProxyName'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RuleClass'])) {
            $model->ruleClass = $map['RuleClass'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['StandbyVSwitchCidr'])) {
            $model->standbyVSwitchCidr = $map['StandbyVSwitchCidr'];
        }

        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }

        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
        }

        if (isset($map['ThreatIntelEnabled'])) {
            $model->threatIntelEnabled = $map['ThreatIntelEnabled'];
        }

        if (isset($map['VirtualPatchEnabled'])) {
            $model->virtualPatchEnabled = $map['VirtualPatchEnabled'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchAuto'])) {
            $model->vswitchAuto = $map['VswitchAuto'];
        }

        if (isset($map['VswitchCidr'])) {
            $model->vswitchCidr = $map['VswitchCidr'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
