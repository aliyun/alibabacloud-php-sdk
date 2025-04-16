<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\aclConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\ipsConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\protectedResource;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\unprotectedResource;

class vpcTrFirewalls extends Model
{
    /**
     * @var aclConfig
     */
    public $aclConfig;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenName;

    /**
     * @var string
     */
    public $cloudFirewallVpcOrderType;

    /**
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var ipsConfig
     */
    public $ipsConfig;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $precheckStatus;

    /**
     * @var protectedResource
     */
    public $protectedResource;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $regionStatus;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $routeMode;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var unprotectedResource
     */
    public $unprotectedResource;

    /**
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'aclConfig' => 'AclConfig',
        'cenId' => 'CenId',
        'cenName' => 'CenName',
        'cloudFirewallVpcOrderType' => 'CloudFirewallVpcOrderType',
        'firewallId' => 'FirewallId',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'ipsConfig' => 'IpsConfig',
        'ownerId' => 'OwnerId',
        'precheckStatus' => 'PrecheckStatus',
        'protectedResource' => 'ProtectedResource',
        'regionNo' => 'RegionNo',
        'regionStatus' => 'RegionStatus',
        'resultCode' => 'ResultCode',
        'routeMode' => 'RouteMode',
        'transitRouterId' => 'TransitRouterId',
        'unprotectedResource' => 'UnprotectedResource',
        'vpcFirewallName' => 'VpcFirewallName',
    ];

    public function validate()
    {
        if (null !== $this->aclConfig) {
            $this->aclConfig->validate();
        }
        if (null !== $this->ipsConfig) {
            $this->ipsConfig->validate();
        }
        if (null !== $this->protectedResource) {
            $this->protectedResource->validate();
        }
        if (null !== $this->unprotectedResource) {
            $this->unprotectedResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclConfig) {
            $res['AclConfig'] = null !== $this->aclConfig ? $this->aclConfig->toArray($noStream) : $this->aclConfig;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cenName) {
            $res['CenName'] = $this->cenName;
        }

        if (null !== $this->cloudFirewallVpcOrderType) {
            $res['CloudFirewallVpcOrderType'] = $this->cloudFirewallVpcOrderType;
        }

        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }

        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }

        if (null !== $this->ipsConfig) {
            $res['IpsConfig'] = null !== $this->ipsConfig ? $this->ipsConfig->toArray($noStream) : $this->ipsConfig;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = $this->precheckStatus;
        }

        if (null !== $this->protectedResource) {
            $res['ProtectedResource'] = null !== $this->protectedResource ? $this->protectedResource->toArray($noStream) : $this->protectedResource;
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

        if (null !== $this->unprotectedResource) {
            $res['UnprotectedResource'] = null !== $this->unprotectedResource ? $this->unprotectedResource->toArray($noStream) : $this->unprotectedResource;
        }

        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
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
        if (isset($map['AclConfig'])) {
            $model->aclConfig = aclConfig::fromMap($map['AclConfig']);
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CenName'])) {
            $model->cenName = $map['CenName'];
        }

        if (isset($map['CloudFirewallVpcOrderType'])) {
            $model->cloudFirewallVpcOrderType = $map['CloudFirewallVpcOrderType'];
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

        if (isset($map['ProtectedResource'])) {
            $model->protectedResource = protectedResource::fromMap($map['ProtectedResource']);
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

        if (isset($map['UnprotectedResource'])) {
            $model->unprotectedResource = unprotectedResource::fromMap($map['UnprotectedResource']);
        }

        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
