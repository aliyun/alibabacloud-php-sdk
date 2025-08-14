<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallDetailRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $localVpcId;

    /**
     * @var string
     */
    public $peerVpcId;

    /**
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'lang' => 'Lang',
        'localVpcId' => 'LocalVpcId',
        'peerVpcId' => 'PeerVpcId',
        'vpcFirewallId' => 'VpcFirewallId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
