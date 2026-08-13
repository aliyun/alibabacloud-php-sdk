<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateTrFirewallV2Request extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $firewallAttachmentZone;

    /**
     * @var string
     */
    public $firewallDescription;

    /**
     * @var string
     */
    public $firewallName;

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
    public $firewallSubnetCidr;

    /**
     * @var string
     */
    public $firewallVpcCidr;

    /**
     * @var string
     */
    public $firewallVpcId;

    /**
     * @var string
     */
    public $firewallVswitchId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $routeMode;

    /**
     * @var string
     */
    public $trAttachmentMasterCidr;

    /**
     * @var string
     */
    public $trAttachmentMasterZone;

    /**
     * @var string
     */
    public $trAttachmentSlaveCidr;

    /**
     * @var string
     */
    public $trAttachmentSlaveZone;

    /**
     * @var string[]
     */
    public $trAttachmentZones;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId' => 'CenId',
        'firewallAttachmentZone' => 'FirewallAttachmentZone',
        'firewallDescription' => 'FirewallDescription',
        'firewallName' => 'FirewallName',
        'firewallServiceMode' => 'FirewallServiceMode',
        'firewallServiceZones' => 'FirewallServiceZones',
        'firewallSubnetCidr' => 'FirewallSubnetCidr',
        'firewallVpcCidr' => 'FirewallVpcCidr',
        'firewallVpcId' => 'FirewallVpcId',
        'firewallVswitchId' => 'FirewallVswitchId',
        'lang' => 'Lang',
        'regionNo' => 'RegionNo',
        'routeMode' => 'RouteMode',
        'trAttachmentMasterCidr' => 'TrAttachmentMasterCidr',
        'trAttachmentMasterZone' => 'TrAttachmentMasterZone',
        'trAttachmentSlaveCidr' => 'TrAttachmentSlaveCidr',
        'trAttachmentSlaveZone' => 'TrAttachmentSlaveZone',
        'trAttachmentZones' => 'TrAttachmentZones',
        'transitRouterId' => 'TransitRouterId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallServiceZones)) {
            Model::validateArray($this->firewallServiceZones);
        }
        if (\is_array($this->trAttachmentZones)) {
            Model::validateArray($this->trAttachmentZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->firewallAttachmentZone) {
            $res['FirewallAttachmentZone'] = $this->firewallAttachmentZone;
        }

        if (null !== $this->firewallDescription) {
            $res['FirewallDescription'] = $this->firewallDescription;
        }

        if (null !== $this->firewallName) {
            $res['FirewallName'] = $this->firewallName;
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

        if (null !== $this->firewallSubnetCidr) {
            $res['FirewallSubnetCidr'] = $this->firewallSubnetCidr;
        }

        if (null !== $this->firewallVpcCidr) {
            $res['FirewallVpcCidr'] = $this->firewallVpcCidr;
        }

        if (null !== $this->firewallVpcId) {
            $res['FirewallVpcId'] = $this->firewallVpcId;
        }

        if (null !== $this->firewallVswitchId) {
            $res['FirewallVswitchId'] = $this->firewallVswitchId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->routeMode) {
            $res['RouteMode'] = $this->routeMode;
        }

        if (null !== $this->trAttachmentMasterCidr) {
            $res['TrAttachmentMasterCidr'] = $this->trAttachmentMasterCidr;
        }

        if (null !== $this->trAttachmentMasterZone) {
            $res['TrAttachmentMasterZone'] = $this->trAttachmentMasterZone;
        }

        if (null !== $this->trAttachmentSlaveCidr) {
            $res['TrAttachmentSlaveCidr'] = $this->trAttachmentSlaveCidr;
        }

        if (null !== $this->trAttachmentSlaveZone) {
            $res['TrAttachmentSlaveZone'] = $this->trAttachmentSlaveZone;
        }

        if (null !== $this->trAttachmentZones) {
            if (\is_array($this->trAttachmentZones)) {
                $res['TrAttachmentZones'] = [];
                $n1 = 0;
                foreach ($this->trAttachmentZones as $item1) {
                    $res['TrAttachmentZones'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
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

        if (isset($map['FirewallAttachmentZone'])) {
            $model->firewallAttachmentZone = $map['FirewallAttachmentZone'];
        }

        if (isset($map['FirewallDescription'])) {
            $model->firewallDescription = $map['FirewallDescription'];
        }

        if (isset($map['FirewallName'])) {
            $model->firewallName = $map['FirewallName'];
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

        if (isset($map['FirewallSubnetCidr'])) {
            $model->firewallSubnetCidr = $map['FirewallSubnetCidr'];
        }

        if (isset($map['FirewallVpcCidr'])) {
            $model->firewallVpcCidr = $map['FirewallVpcCidr'];
        }

        if (isset($map['FirewallVpcId'])) {
            $model->firewallVpcId = $map['FirewallVpcId'];
        }

        if (isset($map['FirewallVswitchId'])) {
            $model->firewallVswitchId = $map['FirewallVswitchId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RouteMode'])) {
            $model->routeMode = $map['RouteMode'];
        }

        if (isset($map['TrAttachmentMasterCidr'])) {
            $model->trAttachmentMasterCidr = $map['TrAttachmentMasterCidr'];
        }

        if (isset($map['TrAttachmentMasterZone'])) {
            $model->trAttachmentMasterZone = $map['TrAttachmentMasterZone'];
        }

        if (isset($map['TrAttachmentSlaveCidr'])) {
            $model->trAttachmentSlaveCidr = $map['TrAttachmentSlaveCidr'];
        }

        if (isset($map['TrAttachmentSlaveZone'])) {
            $model->trAttachmentSlaveZone = $map['TrAttachmentSlaveZone'];
        }

        if (isset($map['TrAttachmentZones'])) {
            if (!empty($map['TrAttachmentZones'])) {
                $model->trAttachmentZones = [];
                $n1 = 0;
                foreach ($map['TrAttachmentZones'] as $item1) {
                    $model->trAttachmentZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
