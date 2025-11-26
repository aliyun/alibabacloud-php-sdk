<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeNatFirewallTimeTopRequest extends Model
{
    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $srcPrivateIP;

    /**
     * @var string
     */
    public $srcPublicIP;

    /**
     * @var string
     */
    public $trafficTime;
    protected $_name = [
        'interval' => 'Interval',
        'lang' => 'Lang',
        'limit' => 'Limit',
        'natGatewayId' => 'NatGatewayId',
        'sort' => 'Sort',
        'srcPrivateIP' => 'SrcPrivateIP',
        'srcPublicIP' => 'SrcPublicIP',
        'trafficTime' => 'TrafficTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->srcPrivateIP) {
            $res['SrcPrivateIP'] = $this->srcPrivateIP;
        }

        if (null !== $this->srcPublicIP) {
            $res['SrcPublicIP'] = $this->srcPublicIP;
        }

        if (null !== $this->trafficTime) {
            $res['TrafficTime'] = $this->trafficTime;
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
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['SrcPrivateIP'])) {
            $model->srcPrivateIP = $map['SrcPrivateIP'];
        }

        if (isset($map['SrcPublicIP'])) {
            $model->srcPublicIP = $map['SrcPublicIP'];
        }

        if (isset($map['TrafficTime'])) {
            $model->trafficTime = $map['TrafficTime'];
        }

        return $model;
    }
}
