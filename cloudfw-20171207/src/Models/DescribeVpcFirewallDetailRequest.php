<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallDetailRequest extends Model
{
    /**
     * @description The natural language of the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the local VPC.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $localVpcId;

    /**
     * @description The ID of the peer VPC.
     *
     * @example vpc-90rq0anm6t8vbwbo****
     *
     * @var string
     */
    public $peerVpcId;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * >  You can call the [DescribeVpcFirewallList](~~342932~~) operation to query the instance IDs of VPC firewalls.
     * @example vfw-m5e7dbc4y****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'lang'          => 'Lang',
        'localVpcId'    => 'LocalVpcId',
        'peerVpcId'     => 'PeerVpcId',
        'vpcFirewallId' => 'VpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->localVpcId) {
            $res['LocalVpcId'] = $this->localVpcId;
        }
        if (null !== $this->peerVpcId) {
            $res['PeerVpcId'] = $this->peerVpcId;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LocalVpcId'])) {
            $model->localVpcId = $map['LocalVpcId'];
        }
        if (isset($map['PeerVpcId'])) {
            $model->peerVpcId = $map['PeerVpcId'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
