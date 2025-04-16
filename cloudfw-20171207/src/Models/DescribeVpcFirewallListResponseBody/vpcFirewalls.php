<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\aclConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\ipsConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\localVpc;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\peerVpc;

class vpcFirewalls extends Model
{
    /**
     * @var aclConfig
     */
    public $aclConfig;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $connectSubType;

    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var ipsConfig
     */
    public $ipsConfig;

    /**
     * @var localVpc
     */
    public $localVpc;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var peerVpc
     */
    public $peerVpc;

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
    public $vpcFirewallId;

    /**
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

    public function validate()
    {
        if (null !== $this->aclConfig) {
            $this->aclConfig->validate();
        }
        if (null !== $this->ipsConfig) {
            $this->ipsConfig->validate();
        }
        if (null !== $this->localVpc) {
            $this->localVpc->validate();
        }
        if (null !== $this->peerVpc) {
            $this->peerVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclConfig) {
            $res['AclConfig'] = null !== $this->aclConfig ? $this->aclConfig->toArray($noStream) : $this->aclConfig;
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
            $res['IpsConfig'] = null !== $this->ipsConfig ? $this->ipsConfig->toArray($noStream) : $this->ipsConfig;
        }

        if (null !== $this->localVpc) {
            $res['LocalVpc'] = null !== $this->localVpc ? $this->localVpc->toArray($noStream) : $this->localVpc;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->peerVpc) {
            $res['PeerVpc'] = null !== $this->peerVpc ? $this->peerVpc->toArray($noStream) : $this->peerVpc;
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
