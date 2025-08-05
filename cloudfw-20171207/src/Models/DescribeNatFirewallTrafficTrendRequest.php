<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeNatFirewallTrafficTrendRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a UNIX timestamp that is accurate to seconds.
     *
     * @example 1739330580
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time interval between the data entries to return. Unit: seconds. Valid values:
     *
     *   **60**: 1 minute
     *   **1800**: 30 minutes
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example ngw-xxxxxx
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The private IP address of the source.
     *
     * @example 10.100.134.60
     *
     * @var string
     */
    public $srcPrivateIP;

    /**
     * @description The public IP address of the source.
     *
     * @example 47.112.210.136
     *
     * @var string
     */
    public $srcPublicIP;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1739326980
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeNatFirewallTrafficTrendRequest
     */
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
