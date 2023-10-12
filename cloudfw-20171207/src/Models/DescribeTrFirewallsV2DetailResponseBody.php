<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrFirewallsV2DetailResponseBody extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-37nddhri7jf0d2****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The description of the VPC firewall.
     *
     * @example VPC Firewall
     *
     * @var string
     */
    public $firewallDescription;

    /**
     * @description The ID of the Elastic Network Interface (ENI) with which the VPC firewall is associated.
     *
     * @example eni-uf621u00nafypeex****
     *
     * @var string
     */
    public $firewallEniId;

    /**
     * @description The ID of the VPC to which the ENI is attached.
     *
     * @example vpc-2zeppcci782zeh2bk****
     *
     * @var string
     */
    public $firewallEniVpcId;

    /**
     * @description The ID of the vSwitch with which the ENI is associated.
     *
     * @example vsw-uf6ptq1kl1c1d9pw9****
     *
     * @var string
     */
    public $firewallEniVswitchId;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-tr-9c7c711abdfa4d80****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @description The name of the VPC firewall.
     *
     * @example cloudfirewall-manual
     *
     * @var string
     */
    public $firewallName;

    /**
     * @description The status of the VPC firewall. Valid values:
     *
     *   Creating
     *   Deleting
     *   Ready
     *
     * @example Ready
     *
     * @var string
     */
    public $firewallStatus;

    /**
     * @description The subnet CIDR block of the VPC in which the ENI of the firewall is stored in automatic mode.
     *
     * @example 10.0.1.0/24
     *
     * @var string
     */
    public $firewallSubnetCidr;

    /**
     * @description The status of the VPC firewall. Valid values:
     *
     *   **opened**: The VPC firewall is enabled.
     *   **closed**: The VPC firewall is disabled.
     *   **notconfigured**: The VPC firewall is not created.
     *   **configured**: The VPC firewall is created but is not enabled.
     *   **creating**: The VPC firewall is being created.
     *   **opening**: The VPC firewall is being enabled.
     *   **deleting**: The VPC firewall is being deleted.
     *
     * > If you do not specify this parameter, VPC firewalls in all states are queried.
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @description The CIDR block that is allocated to the VPC created for the VPC firewall in automatic mode.
     *
     * @example 10.0.0.0/16
     *
     * @var string
     */
    public $firewallVpcCidr;

    /**
     * @description The region ID of the transit router.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The request ID.
     *
     * @example 7E53A7FB-3EB9-5E33-8E50-B8F417D1E02B
     *
     * @var string
     */
    public $requestId;

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
     * @example 10.0.2.0/24
     *
     * @var string
     */
    public $trAttachmentMasterCidr;

    /**
     * @description The secondary subnet CIDR block that the VPC uses to connect to the transit router in automatic mode.
     *
     * @example 10.0.3.0/24
     *
     * @var string
     */
    public $trAttachmentSlaveCidr;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-wz9y8sgug8b1xb416****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId'                  => 'CenId',
        'firewallDescription'    => 'FirewallDescription',
        'firewallEniId'          => 'FirewallEniId',
        'firewallEniVpcId'       => 'FirewallEniVpcId',
        'firewallEniVswitchId'   => 'FirewallEniVswitchId',
        'firewallId'             => 'FirewallId',
        'firewallName'           => 'FirewallName',
        'firewallStatus'         => 'FirewallStatus',
        'firewallSubnetCidr'     => 'FirewallSubnetCidr',
        'firewallSwitchStatus'   => 'FirewallSwitchStatus',
        'firewallVpcCidr'        => 'FirewallVpcCidr',
        'regionNo'               => 'RegionNo',
        'requestId'              => 'RequestId',
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
        if (null !== $this->firewallEniId) {
            $res['FirewallEniId'] = $this->firewallEniId;
        }
        if (null !== $this->firewallEniVpcId) {
            $res['FirewallEniVpcId'] = $this->firewallEniVpcId;
        }
        if (null !== $this->firewallEniVswitchId) {
            $res['FirewallEniVswitchId'] = $this->firewallEniVswitchId;
        }
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->firewallName) {
            $res['FirewallName'] = $this->firewallName;
        }
        if (null !== $this->firewallStatus) {
            $res['FirewallStatus'] = $this->firewallStatus;
        }
        if (null !== $this->firewallSubnetCidr) {
            $res['FirewallSubnetCidr'] = $this->firewallSubnetCidr;
        }
        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }
        if (null !== $this->firewallVpcCidr) {
            $res['FirewallVpcCidr'] = $this->firewallVpcCidr;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeTrFirewallsV2DetailResponseBody
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
        if (isset($map['FirewallEniId'])) {
            $model->firewallEniId = $map['FirewallEniId'];
        }
        if (isset($map['FirewallEniVpcId'])) {
            $model->firewallEniVpcId = $map['FirewallEniVpcId'];
        }
        if (isset($map['FirewallEniVswitchId'])) {
            $model->firewallEniVswitchId = $map['FirewallEniVswitchId'];
        }
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['FirewallName'])) {
            $model->firewallName = $map['FirewallName'];
        }
        if (isset($map['FirewallStatus'])) {
            $model->firewallStatus = $map['FirewallStatus'];
        }
        if (isset($map['FirewallSubnetCidr'])) {
            $model->firewallSubnetCidr = $map['FirewallSubnetCidr'];
        }
        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }
        if (isset($map['FirewallVpcCidr'])) {
            $model->firewallVpcCidr = $map['FirewallVpcCidr'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
