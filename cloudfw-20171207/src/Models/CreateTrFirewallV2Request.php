<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateTrFirewallV2Request extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-4xbjup276au29r****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The description of the firewall.
     *
     * @var string
     */
    public $firewallDescription;

    /**
     * @description The name of the firewall.
     *
     * @var string
     */
    public $firewallName;

    /**
     * @description The subnet CIDR block of the VPC in which the ENI of the firewall is stored in automatic mode.
     *
     * @example 10.0.1.0/24
     *
     * @var string
     */
    public $firewallSubnetCidr;

    /**
     * @description The CIDR block that is allocated to the VPC created for the VPC firewall in automatic mode.
     *
     * @example 10.0.0.0/16
     *
     * @var string
     */
    public $firewallVpcCidr;

    /**
     * @description The ID of the VPC in which the ENI associated with the VPC firewall is created in manual mode.
     *
     * @example vpc-wz9r5qvryn0lg3atb****
     *
     * @var string
     */
    public $firewallVpcId;

    /**
     * @description The ID of the vSwitch that is used to create the ENI in manual mode.
     *
     * @example vsw-uf6ydz3vqj77mr5l6****
     *
     * @var string
     */
    public $firewallVswitchId;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The region ID of the route router.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The routing mode of the VPC firewall. Valid values:
     *
     *   **managed**: automatic mode
     *   **manual**: manual mode
     *
     * @example managed
     *
     * @var string
     */
    public $routeMode;

    /**
     * @description The primary subnet CIDR block that the VPC uses to connect to the transit router in automatic mode.
     *
     * @example 10.0.3.0/24
     *
     * @var string
     */
    public $trAttachmentMasterCidr;

    /**
     * @description The secondary subnet CIDR block that the VPC uses to connect to the transit router in automatic mode.
     *
     * @example 10.0.0.16/28
     *
     * @var string
     */
    public $trAttachmentSlaveCidr;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-m5etmb2q7e0mxcur****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId'                  => 'CenId',
        'firewallDescription'    => 'FirewallDescription',
        'firewallName'           => 'FirewallName',
        'firewallSubnetCidr'     => 'FirewallSubnetCidr',
        'firewallVpcCidr'        => 'FirewallVpcCidr',
        'firewallVpcId'          => 'FirewallVpcId',
        'firewallVswitchId'      => 'FirewallVswitchId',
        'lang'                   => 'Lang',
        'regionNo'               => 'RegionNo',
        'routeMode'              => 'RouteMode',
        'trAttachmentMasterCidr' => 'TrAttachmentMasterCidr',
        'trAttachmentSlaveCidr'  => 'TrAttachmentSlaveCidr',
        'transitRouterId'        => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->firewallDescription) {
            $res['FirewallDescription'] = $this->firewallDescription;
        }
        if (null !== $this->firewallName) {
            $res['FirewallName'] = $this->firewallName;
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
        if (null !== $this->trAttachmentSlaveCidr) {
            $res['TrAttachmentSlaveCidr'] = $this->trAttachmentSlaveCidr;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrFirewallV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['FirewallDescription'])) {
            $model->firewallDescription = $map['FirewallDescription'];
        }
        if (isset($map['FirewallName'])) {
            $model->firewallName = $map['FirewallName'];
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
        if (isset($map['TrAttachmentSlaveCidr'])) {
            $model->trAttachmentSlaveCidr = $map['TrAttachmentSlaveCidr'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
