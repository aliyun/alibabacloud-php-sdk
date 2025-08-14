<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponseBody\localVpc;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponseBody\peerVpc;

class DescribeVpcFirewallDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $firewallSwitchStatus;

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
    public $requestId;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'connectType' => 'ConnectType',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'localVpc' => 'LocalVpc',
        'memberUid' => 'MemberUid',
        'peerVpc' => 'PeerVpc',
        'requestId' => 'RequestId',
        'vpcFirewallId' => 'VpcFirewallId',
        'vpcFirewallName' => 'VpcFirewallName',
    ];

    public function validate()
    {
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
