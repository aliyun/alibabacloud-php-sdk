<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallTrafficTrendRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $peerVpcId;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'peerVpcId' => 'PeerVpcId',
        'privateIP' => 'PrivateIP',
        'startTime' => 'StartTime',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->peerVpcId) {
            $res['PeerVpcId'] = $this->peerVpcId;
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PeerVpcId'])) {
            $model->peerVpcId = $map['PeerVpcId'];
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
