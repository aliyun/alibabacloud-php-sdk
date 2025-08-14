<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\firewallVpc;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\localVpc;

class DescribeVpcFirewallCenDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var firewallVpc
     */
    public $firewallVpc;

    /**
     * @var localVpc
     */
    public $localVpc;

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
        'connectType' => 'ConnectType',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'firewallVpc' => 'FirewallVpc',
        'localVpc' => 'LocalVpc',
        'requestId' => 'RequestId',
        'vpcFirewallId' => 'VpcFirewallId',
        'vpcFirewallName' => 'VpcFirewallName',
    ];

    public function validate()
    {
        if (null !== $this->firewallVpc) {
            $this->firewallVpc->validate();
        }
        if (null !== $this->localVpc) {
            $this->localVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }

        if (null !== $this->firewallVpc) {
            $res['FirewallVpc'] = null !== $this->firewallVpc ? $this->firewallVpc->toArray($noStream) : $this->firewallVpc;
        }

        if (null !== $this->localVpc) {
            $res['LocalVpc'] = null !== $this->localVpc ? $this->localVpc->toArray($noStream) : $this->localVpc;
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
        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }

        if (isset($map['FirewallVpc'])) {
            $model->firewallVpc = firewallVpc::fromMap($map['FirewallVpc']);
        }

        if (isset($map['LocalVpc'])) {
            $model->localVpc = localVpc::fromMap($map['LocalVpc']);
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
