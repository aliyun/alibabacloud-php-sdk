<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsTopDomainsByFlowResponseBody\topDomains;

use AlibabaCloud\Tea\Model;

class topDomain extends Model
{
    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxBps;

    /**
     * @example 1457111400
     *
     * @var string
     */
    public $maxBpsTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $rank;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalAccess;

    /**
     * @example 100
     *
     * @var string
     */
    public $totalTraffic;

    /**
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
