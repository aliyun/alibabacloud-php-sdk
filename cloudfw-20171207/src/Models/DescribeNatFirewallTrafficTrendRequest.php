<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeNatFirewallTrafficTrendRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $srcPrivateIP;

    /**
     * @var string
     */
    public $srcPublicIP;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'natGatewayId' => 'NatGatewayId',
        'srcPrivateIP' => 'SrcPrivateIP',
        'srcPublicIP' => 'SrcPublicIP',
        'startTime' => 'StartTime',
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

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->srcPrivateIP) {
            $res['SrcPrivateIP'] = $this->srcPrivateIP;
        }

        if (null !== $this->srcPublicIP) {
            $res['SrcPublicIP'] = $this->srcPublicIP;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['SrcPrivateIP'])) {
            $model->srcPrivateIP = $map['SrcPrivateIP'];
        }

        if (isset($map['SrcPublicIP'])) {
            $model->srcPublicIP = $map['SrcPublicIP'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
