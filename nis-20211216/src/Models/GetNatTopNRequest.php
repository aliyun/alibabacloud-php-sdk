<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetNatTopNRequest extends Model
{
    /**
     * @description The beginning of the time range to query in milliseconds. If you do not specify **EndTime**, the point in time specified by **BeginTime** is queried.
     *
     * @example 1638239092000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The end of the time range to query in milliseconds. The time range specified by **BeginTime** and **EndTime** cannot exceed **86400000** milliseconds (24 hours).
     *
     * @example 1638239093000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Query ranking statistics for a specific IP address. If you specify this parameter, you do not need to specify **TopN** or **OrderBy**.
     *
     * @example 192.168.156.101
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example ngw-sample***
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The metric that is used for real-time SNAT performance ranking. Valid values:
     *
     *   **InBps**: inbound data transfer. Unit: bit/s.
     *   **OutBps**: outbound data transfer. Unit: bit/s.
     *   **InPps**: inbound packet forwarding rate. Unit: packets per second.
     *   **OutPps**: outbound packet forwarding rate. Unit: packets per second.
     *   **NewSessionPerSecond**: new connection creation rate. Unit: connections per second.
     *   **ActiveSessionCount**: number of concurrent connections. Unit: connections.
     *
     * @example InBps
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The ID of the region in which the NAT gateway is deployed.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of entries to return for real-time SNAT performance ranking. Valid values: **1 to 100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $topN;
    protected $_name = [
        'beginTime'    => 'BeginTime',
        'endTime'      => 'EndTime',
        'ip'           => 'Ip',
        'natGatewayId' => 'NatGatewayId',
        'orderBy'      => 'OrderBy',
        'regionId'     => 'RegionId',
        'topN'         => 'TopN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNatTopNRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }

        return $model;
    }
}
