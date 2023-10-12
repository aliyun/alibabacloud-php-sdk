<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\firewallVpc;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\localVpc;
use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallCenDetailResponseBody extends Model
{
    /**
     * @description The connection type of the VPC firewall. The value is fixed as **cen**, which indicates CEN instances.
     *
     * @example cen
     *
     * @var string
     */
    public $connectType;

    /**
     * @description The status of the VPC firewall. Valid values:
     *
     *   **opened**: enabled
     *   **closed**: disabled
     *   **notconfigured**: not configured
     *
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @description The VPC that is automatically created for the firewall.
     *
     * @var firewallVpc
     */
    public $firewallVpc;

    /**
     * @description The details about the VPC.
     *
     * @var localVpc
     */
    public $localVpc;

    /**
     * @description The ID of the request.
     *
     * @example 850A84D6-0DE4-4797-A1E8-00090125g4d2
     *
     * @var string
     */
    public $requestId;

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
        'connectType'          => 'ConnectType',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'firewallVpc'          => 'FirewallVpc',
        'localVpc'             => 'LocalVpc',
        'requestId'            => 'RequestId',
        'vpcFirewallId'        => 'VpcFirewallId',
        'vpcFirewallName'      => 'VpcFirewallName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }
        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }
        if (null !== $this->firewallVpc) {
            $res['FirewallVpc'] = null !== $this->firewallVpc ? $this->firewallVpc->toMap() : null;
        }
        if (null !== $this->localVpc) {
            $res['LocalVpc'] = null !== $this->localVpc ? $this->localVpc->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallCenDetailResponseBody
     */
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
