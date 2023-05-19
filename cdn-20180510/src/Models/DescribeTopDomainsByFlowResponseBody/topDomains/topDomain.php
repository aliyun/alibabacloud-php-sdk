<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTopDomainsByFlowResponseBody\topDomains;

use AlibabaCloud\Tea\Model;

class topDomain extends Model
{
    /**
     * @description The total number of accelerated domain names that belong to the current Alibaba Cloud account.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  Set StartTime to UTC time in the yyyy-MM-ddTHH:mm:ssZ format. For example, if the local time is 00:00, June 1, 2021, set StartTime to 2021-05-31T16:00:00Z.
     * @example 22139626
     *
     * @var float
     */
    public $maxBps;

    /**
     * @description Queries the top N domain names ranked by network traffic. You can query data collected within the last 30 days.
     *
     * @example 1457111400
     *
     * @var string
     */
    public $maxBpsTime;

    /**
     * @description The time when the bandwidth reached the peak value.
     *
     * @example 1
     *
     * @var int
     */
    public $rank;

    /**
     * @description The top N domain names ranked by network traffic.
     *
     * @example 107784230
     *
     * @var int
     */
    public $totalAccess;

    /**
     * @description The ID of the request.
     *
     * @example 2043859876683.9001
     *
     * @var string
     */
    public $totalTraffic;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 30.64191989360235
     *
     * @var string
     */
    public $trafficPercent;
    protected $_name = [
        'domainName'     => 'DomainName',
        'maxBps'         => 'MaxBps',
        'maxBpsTime'     => 'MaxBpsTime',
        'rank'           => 'Rank',
        'totalAccess'    => 'TotalAccess',
        'totalTraffic'   => 'TotalTraffic',
        'trafficPercent' => 'TrafficPercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->maxBps) {
            $res['MaxBps'] = $this->maxBps;
        }
        if (null !== $this->maxBpsTime) {
            $res['MaxBpsTime'] = $this->maxBpsTime;
        }
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->totalAccess) {
            $res['TotalAccess'] = $this->totalAccess;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->trafficPercent) {
            $res['TrafficPercent'] = $this->trafficPercent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['MaxBps'])) {
            $model->maxBps = $map['MaxBps'];
        }
        if (isset($map['MaxBpsTime'])) {
            $model->maxBpsTime = $map['MaxBpsTime'];
        }
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['TotalAccess'])) {
            $model->totalAccess = $map['TotalAccess'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['TrafficPercent'])) {
            $model->trafficPercent = $map['TrafficPercent'];
        }

        return $model;
    }
}
