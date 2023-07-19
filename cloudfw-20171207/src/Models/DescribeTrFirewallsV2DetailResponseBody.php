<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

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
     * @example cloudfirewall-manual
     *
     * @var string
     */
    public $firewallName;

    /**
     * @example Ready
     *
     * @var string
     */
    public $firewallStatus;

    /**
     * @var string
     */
    public $firewallSubnetCidr;

    /**
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var string
     */
    public $firewallVpcCidr;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example 7E53A7FB-3EB9-5E33-8E50-B8F417D1E02B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example managed
     *
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
    public $trAttachmentSlaveCidr;

    /**
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
