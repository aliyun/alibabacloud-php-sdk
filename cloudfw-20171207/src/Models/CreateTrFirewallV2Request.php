<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateTrFirewallV2Request extends Model
{
    /**
     * @example cen-4xbjup276au29r****
     *
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
    public $firewallName;

    /**
     * @example 10.0.1.0/24
     *
     * @var string
     */
    public $firewallSubnetCidr;

    /**
     * @example 10.0.0.0/16
     *
     * @var string
     */
    public $firewallVpcCidr;

    /**
     * @example vpc-wz9r5qvryn0lg3atb****
     *
     * @var string
     */
    public $firewallVpcId;

    /**
     * @example vsw-uf6ydz3vqj77mr5l6****
     *
     * @var string
     */
    public $firewallVswitchId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example managed
     *
     * @var string
     */
    public $routeMode;

    /**
     * @example 10.0.3.0/24
     *
     * @var string
     */
    public $trAttachmentMasterCidr;

    /**
     * @example 10.0.0.16/28
     *
     * @var string
     */
    public $trAttachmentSlaveCidr;

    /**
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
