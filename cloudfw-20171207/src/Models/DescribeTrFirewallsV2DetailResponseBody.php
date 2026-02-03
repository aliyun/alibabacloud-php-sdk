<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeTrFirewallsV2DetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $firewallDescription;

    /**
     * @var string
     */
    public $firewallEniId;

    /**
     * @var string
     */
    public $firewallEniVpcId;

    /**
     * @var string
     */
    public $firewallEniVswitchId;

    /**
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $firewallName;

    /**
     * @var string
     */
    public $firewallStatus;

    /**
     * @var string
     */
    public $firewallSubnetCidr;

    /**
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var string
     */
    public $firewallVpcCidr;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $routeMode;

    /**
     * @var string
     */
    public $trAttachmentId;

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
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId' => 'CenId',
        'firewallDescription' => 'FirewallDescription',
        'firewallEniId' => 'FirewallEniId',
        'firewallEniVpcId' => 'FirewallEniVpcId',
        'firewallEniVswitchId' => 'FirewallEniVswitchId',
        'firewallId' => 'FirewallId',
        'firewallName' => 'FirewallName',
        'firewallStatus' => 'FirewallStatus',
        'firewallSubnetCidr' => 'FirewallSubnetCidr',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'firewallVpcCidr' => 'FirewallVpcCidr',
        'regionNo' => 'RegionNo',
        'requestId' => 'RequestId',
        'routeMode' => 'RouteMode',
        'trAttachmentId' => 'TrAttachmentId',
        'trAttachmentMasterCidr' => 'TrAttachmentMasterCidr',
        'trAttachmentMasterZone' => 'TrAttachmentMasterZone',
        'trAttachmentSlaveCidr' => 'TrAttachmentSlaveCidr',
        'trAttachmentSlaveZone' => 'TrAttachmentSlaveZone',
        'transitRouterId' => 'TransitRouterId',
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

        if (null !== $this->trAttachmentId) {
            $res['TrAttachmentId'] = $this->trAttachmentId;
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

        if (isset($map['TrAttachmentId'])) {
            $model->trAttachmentId = $map['TrAttachmentId'];
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

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
