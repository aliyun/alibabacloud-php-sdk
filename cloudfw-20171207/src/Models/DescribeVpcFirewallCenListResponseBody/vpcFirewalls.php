<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\ipsConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\localVpc;
use AlibabaCloud\Tea\Model;

class vpcFirewalls extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-x5jayxou71ad73****
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
     * @description The connection type of the VPC firewall. The value is fixed as cen, which indicates a CEN instance.
     *
     * @example cen
     *
     * @var string
     */
    public $connectType;

    /**
     * @description The status of the VPC firewall. Valid values:
     *
     *   **opened**: The VPC firewall is enabled.
     *   **closed**: The VPC firewall is disabled.
     *   **notconfigured**: The VPC firewall is not created.
     *
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
     * @description The details about the VPC.
     *
     * @var localVpc
     */
    public $localVpc;

    /**
     * @description The UID of the member that is manged by your Alibaba Cloud account. The member is also an Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description Indicates whether the VPC firewall can be automatically enabled to protect VPC traffic based on route learning. Valid values:
     *
     * - **passed**: The VPC firewall can be automatically enabled.
     * - **failed**: The VPC firewall cannot be automatically enabled.
     * - **unknown**: The VPC firewall is in an unknown state.
     * @example failed
     *
     * @var string
     */
    public $precheckStatus;

    /**
     * @description Indicates whether you can create a VPC firewall in a region. Valid values:
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
     *   **Unauthorized**: Cloud Firewall is not authorized to access the VPC for which the VPC firewall is created, and the VPC firewall cannot be created.
     *   **RegionDisable**: .VPC Firewall is not supported in the region of the VPC for which the VPC firewall is created, and the VPC firewall cannot be created.
     *   **OpsDisable**: You are not allowed to create the VPC firewall.
     *   **VbrNotSupport**: The VPC firewall cannot be created for a VBR that is attached to the CEN instance.
     *   Empty string: You can create a VPC firewall for the network instance.
     *
     * @example Unauthorized
     *
     * @var string
     */
    public $resultCode;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-m5e7dbc4y****
     *
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @description The instance name of the VPC firewall.
     *
     * @example test-firewall
     *
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'cenId'                => 'CenId',
        'cenName'              => 'CenName',
        'connectType'          => 'ConnectType',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'ipsConfig'            => 'IpsConfig',
        'localVpc'             => 'LocalVpc',
        'memberUid'            => 'MemberUid',
        'precheckStatus'       => 'PrecheckStatus',
        'regionStatus'         => 'RegionStatus',
        'resultCode'           => 'ResultCode',
        'vpcFirewallId'        => 'VpcFirewallId',
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
        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }
        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }
        if (null !== $this->ipsConfig) {
            $res['IpsConfig'] = null !== $this->ipsConfig ? $this->ipsConfig->toMap() : null;
        }
        if (null !== $this->localVpc) {
            $res['LocalVpc'] = null !== $this->localVpc ? $this->localVpc->toMap() : null;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = $this->precheckStatus;
        }
        if (null !== $this->regionStatus) {
            $res['RegionStatus'] = $this->regionStatus;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcFirewalls
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
        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }
        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }
        if (isset($map['IpsConfig'])) {
            $model->ipsConfig = ipsConfig::fromMap($map['IpsConfig']);
        }
        if (isset($map['LocalVpc'])) {
            $model->localVpc = localVpc::fromMap($map['LocalVpc']);
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = $map['PrecheckStatus'];
        }
        if (isset($map['RegionStatus'])) {
            $model->regionStatus = $map['RegionStatus'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
