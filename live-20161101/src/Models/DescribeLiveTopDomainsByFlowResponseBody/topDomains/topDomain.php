<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowResponseBody\topDomains;

use AlibabaCloud\Tea\Model;

class topDomain extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var string
     */
    public $totalTraffic;

    /**
     * @var string
     */
    public $trafficPercent;

    /**
     * @var int
     */
    public $maxBps;

    /**
     * @var string
     */
    public $maxBpsTime;

    /**
     * @var int
     */
    public $totalAccess;
    protected $_name = [
        'domainName'     => 'DomainName',
        'rank'           => 'Rank',
        'totalTraffic'   => 'TotalTraffic',
        'trafficPercent' => 'TrafficPercent',
        'maxBps'         => 'MaxBps',
        'maxBpsTime'     => 'MaxBpsTime',
        'totalAccess'    => 'TotalAccess',
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
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->trafficPercent) {
            $res['TrafficPercent'] = $this->trafficPercent;
        }
        if (null !== $this->maxBps) {
            $res['MaxBps'] = $this->maxBps;
        }
        if (null !== $this->maxBpsTime) {
            $res['MaxBpsTime'] = $this->maxBpsTime;
        }
        if (null !== $this->totalAccess) {
            $res['TotalAccess'] = $this->totalAccess;
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
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['TrafficPercent'])) {
            $model->trafficPercent = $map['TrafficPercent'];
        }
        if (isset($map['MaxBps'])) {
            $model->maxBps = $map['MaxBps'];
        }
        if (isset($map['MaxBpsTime'])) {
            $model->maxBpsTime = $map['MaxBpsTime'];
        }
        if (isset($map['TotalAccess'])) {
            $model->totalAccess = $map['TotalAccess'];
        }

        return $model;
    }
}
