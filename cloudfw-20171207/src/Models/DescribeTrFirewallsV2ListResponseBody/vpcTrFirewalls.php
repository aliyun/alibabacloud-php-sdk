<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\ipsConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\protectedResource;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls\unprotectedResource;
use AlibabaCloud\Tea\Model;

class vpcTrFirewalls extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-03f8s0z052ka3v****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The name of the CEN instance.
     *
     * @example cen_swas
     *
     * @var string
     */
    public $cenName;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-tr-99bc4f0fc88b4d00****
     *
     * @var string
     */
    public $firewallId;

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
     * >  If you do not specify this parameter, VPC firewalls in all states are queried.
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @description The information about the intrusion prevention system (IPS) configuration.
     *
     * @var ipsConfig
     */
    public $ipsConfig;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 171761785151****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description Indicates whether the VPC firewall can be automatically enabled. Valid values:
     *
     *   **passed**: yes
     *   **failed**: no
     *   **unknown**
     *
     * @example passed
     *
     * @var string
     */
    public $precheckStatus;

    /**
     * @description The protected resources.
     *
     * @var protectedResource
     */
    public $protectedResource;

    /**
     * @description The region ID of the transit router.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description Indicates whether you can create a VPC firewall in a specified region. Valid values:
     *
     *   **enable**: yes
     *   **disable**: no
     *
     * @example enable
     *
     * @var string
     */
    public $regionStatus;

    /**
     * @description The result code of the operation that creates the VPC firewall. Valid values:
     *
     *   **RegionDisable**: VPC Firewall is not supported in the region of the network instance. You cannot create a VPC firewall for the network instance.
     *   **Empty string**: You can create a VPC firewall for the network instance.
     *
     * @example RegionDisable
     *
     * @var string
     */
    public $resultCode;

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
     * @description The ID of the transit router.
     *
     * @example tr-2vcmhjs88nil55fvu****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The unprotected resources.
     *
     * @var unprotectedResource
     */
    public $unprotectedResource;

    /**
     * @description The instance name of the VPC firewall.
     *
     * @example test
     *
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
        'protectedResource'    => 'ProtectedResource',
        'regionNo'             => 'RegionNo',
        'regionStatus'         => 'RegionStatus',
        'resultCode'           => 'ResultCode',
        'routeMode'            => 'RouteMode',
        'transitRouterId'      => 'TransitRouterId',
        'unprotectedResource'  => 'UnprotectedResource',
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
        if (null !== $this->protectedResource) {
            $res['ProtectedResource'] = null !== $this->protectedResource ? $this->protectedResource->toMap() : null;
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
            $res['UnprotectedResource'] = null !== $this->unprotectedResource ? $this->unprotectedResource->toMap() : null;
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
