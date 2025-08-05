<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\aclConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\ipsConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\localVpc;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\peerVpc;
use AlibabaCloud\Tea\Model;

class vpcFirewalls extends Model
{
    /**
     * @description ACL engine mode.
     *
     * @var aclConfig
     */
    public $aclConfig;

    /**
     * @description The bandwidth of the Express Connect circuit. Unit: Mbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The sub-type of the connection. Valid values:
     *
     *   **vpc2vpc**: Express Connect connection
     *   **vpcpeer**: peer connection
     *
     * @example vpcpeer
     *
     * @var string
     */
    public $connectSubType;

    /**
     * @description The connection type of the VPC firewall. The value is fixed as **expressconnect**, which indicates an Express Connect connection.
     *
     * @example expressconnect
     *
     * @var string
     */
    public $connectType;

    /**
     * @description The status of the VPC firewall. Valid values:
     *
     *   **opened**: The VPC firewall is enabled.
     *   **closed**: The VPC firewall is disabled.
     *   **notconfigured**: The VPC firewall is not configured.
     *
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @description The intrusion prevention system (IPS) configurations.
     *
     * @var ipsConfig
     */
    public $ipsConfig;

    /**
     * @description The details about the local VPC.
     *
     * @var localVpc
     */
    public $localVpc;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The details about the peer VPC.
     *
     * @var peerVpc
     */
    public $peerVpc;

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
     *   **Unauthorized**: Cloud Firewall is not authorized to access a VPC for which the VPC firewall is created, and the VPC firewall cannot be created.
     *   **RegionDisable**: VPC Firewall is not supported in the region of a VPC for which the VPC firewall is created, and the VPC firewall cannot be created.
     *   **Empty string**: You can create a VPC firewall for the network instance.
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
     * @example Test firewall
     *
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'aclConfig' => 'AclConfig',
        'bandwidth' => 'Bandwidth',
        'connectSubType' => 'ConnectSubType',
        'connectType' => 'ConnectType',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'ipsConfig' => 'IpsConfig',
        'localVpc' => 'LocalVpc',
        'memberUid' => 'MemberUid',
        'peerVpc' => 'PeerVpc',
        'regionStatus' => 'RegionStatus',
        'resultCode' => 'ResultCode',
        'vpcFirewallId' => 'VpcFirewallId',
        'vpcFirewallName' => 'VpcFirewallName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclConfig) {
            $res['AclConfig'] = null !== $this->aclConfig ? $this->aclConfig->toMap() : null;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->connectSubType) {
            $res['ConnectSubType'] = $this->connectSubType;
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
        if (null !== $this->peerVpc) {
            $res['PeerVpc'] = null !== $this->peerVpc ? $this->peerVpc->toMap() : null;
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
        if (isset($map['AclConfig'])) {
            $model->aclConfig = aclConfig::fromMap($map['AclConfig']);
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ConnectSubType'])) {
            $model->connectSubType = $map['ConnectSubType'];
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
        if (isset($map['PeerVpc'])) {
            $model->peerVpc = peerVpc::fromMap($map['PeerVpc']);
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
