<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowResponseBody\topDomains;

use AlibabaCloud\Tea\Model;

class topDomain extends Model
{
    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The peak bandwidth of the domain name.
     *
     * @example 22139626
     *
     * @var int
     */
    public $maxBps;

    /**
     * @description The time when the bandwidth reached the peak value.
     *
     * @example 1457111400
     *
     * @var string
     */
    public $maxBpsTime;

    /**
     * @description The ranking of the domain name.
     *
     * @example 1
     *
     * @var int
     */
    public $rank;

    /**
     * @description The number of visits to the domain name.
     *
     * @example 107784230
     *
     * @var int
     */
    public $totalAccess;

    /**
     * @description The total traffic.
     *
     * @example 2043859876683.9001
     *
     * @var string
     */
    public $totalTraffic;

    /**
     * @description The traffic share of the domain name relative to the total traffic.
     *
     * @example 30.64191989360235
     *
     * @var string
     */
    public $trafficPercent;
    protected $_name = [
        'domainName' => 'DomainName',
        'maxBps' => 'MaxBps',
        'maxBpsTime' => 'MaxBpsTime',
        'rank' => 'Rank',
        'totalAccess' => 'TotalAccess',
        'totalTraffic' => 'TotalTraffic',
        'trafficPercent' => 'TrafficPercent',
    ];

    public function validate() {}

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
