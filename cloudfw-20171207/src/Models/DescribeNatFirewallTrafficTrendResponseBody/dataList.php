<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallTrafficTrendResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description The maximum inbound network throughput, which indicates the maximum number of bits that are sent inbound per second. Unit: bit/s.
     *
     * @example 18038632
     *
     * @var int
     */
    public $maxInBps;

    /**
     * @description The maximum outbound network throughput, which indicates the maximum number of bits that are sent outbound per second. Unit: bit/s.
     *
     * @example 122596487
     *
     * @var int
     */
    public $maxOutBps;

    /**
     * @description The total maximum inbound and outbound network throughput, which indicates the maximum number of bits that are sent inbound and outbound per second. Unit: bit/s.
     *
     * @example 66953194
     *
     * @var int
     */
    public $maxTotalBps;

    /**
     * @description The time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1734418980
     *
     * @var int
     */
    public $trafficTime;
    protected $_name = [
        'maxInBps' => 'MaxInBps',
        'maxOutBps' => 'MaxOutBps',
        'maxTotalBps' => 'MaxTotalBps',
        'trafficTime' => 'TrafficTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxInBps) {
            $res['MaxInBps'] = $this->maxInBps;
        }
        if (null !== $this->maxOutBps) {
            $res['MaxOutBps'] = $this->maxOutBps;
        }
        if (null !== $this->maxTotalBps) {
            $res['MaxTotalBps'] = $this->maxTotalBps;
        }
        if (null !== $this->trafficTime) {
            $res['TrafficTime'] = $this->trafficTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxInBps'])) {
            $model->maxInBps = $map['MaxInBps'];
        }
        if (isset($map['MaxOutBps'])) {
            $model->maxOutBps = $map['MaxOutBps'];
        }
        if (isset($map['MaxTotalBps'])) {
            $model->maxTotalBps = $map['MaxTotalBps'];
        }
        if (isset($map['TrafficTime'])) {
            $model->trafficTime = $map['TrafficTime'];
        }

        return $model;
    }
}
