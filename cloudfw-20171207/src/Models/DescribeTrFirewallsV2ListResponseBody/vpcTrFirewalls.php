<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\ipsConfig;
use AlibabaCloud\Tea\Model;

class vpcTrFirewalls extends Model
{
    /**
     * @example cen-03f8s0z052ka3v****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example cen_swas
     *
     * @var string
     */
    public $cenName;

    /**
     * @example vfw-tr-99bc4f0fc88b4d00****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var ipsConfig
     */
    public $ipsConfig;

    /**
     * @example 171761785151****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example passed
     *
     * @var string
     */
    public $precheckStatus;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example enable
     *
     * @var string
     */
    public $regionStatus;

    /**
     * @example RegionDisable
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example managed
     *
     * @var string
     */
    public $routeMode;

    /**
     * @example tr-2vcmhjs88nil55fvu****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'cenId'                => 'CenId',
        'cenName'              => 'CenName',
        'firewallId'           => 'FirewallId',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'ipsConfig'            => 'IpsConfig',
        'ownerId'              => 'OwnerId',
        'precheckStatus'       => 'PrecheckStatus',
        'regionNo'             => 'RegionNo',
        'regionStatus'         => 'RegionStatus',
        'resultCode'           => 'ResultCode',
        'routeMode'            => 'RouteMode',
        'transitRouterId'      => 'TransitRouterId',
        'vpcFirewallName'      => 'VpcFirewallName',
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
        if (null !== $this->cenName) {
            $res['CenName'] = $this->cenName;
        }
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }
        if (null !== $this->ipsConfig) {
            $res['IpsConfig'] = null !== $this->ipsConfig ? $this->ipsConfig->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = $this->precheckStatus;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->regionStatus) {
            $res['RegionStatus'] = $this->regionStatus;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->routeMode) {
            $res['RouteMode'] = $this->routeMode;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcTrFirewalls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenName'])) {
            $model->cenName = $map['CenName'];
        }
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }
        if (isset($map['IpsConfig'])) {
            $model->ipsConfig = ipsConfig::fromMap($map['IpsConfig']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = $map['PrecheckStatus'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RegionStatus'])) {
            $model->regionStatus = $map['RegionStatus'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['RouteMode'])) {
            $model->routeMode = $map['RouteMode'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
