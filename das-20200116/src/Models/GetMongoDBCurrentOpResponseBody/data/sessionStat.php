<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DataSessionStatClientStatsValue;
use AlibabaCloud\SDK\DAS\V20200116\Models\DataSessionStatDbStatsValue;
use AlibabaCloud\Tea\Model;

class sessionStat extends Model
{
    /**
     * @description The number of active sessions.
     *
     * @example 0
     *
     * @var int
     */
    public $activeCount;

    /**
     * @description The statistics on the IP addresses of the clients.
     *
     * @var DataSessionStatClientStatsValue[]
     */
    public $clientStats;

    /**
     * @description The statistics on the namespaces.
     *
     * @var DataSessionStatDbStatsValue[]
     */
    public $dbStats;

    /**
     * @description The longest duration of a session. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $longestSecsRunning;

    /**
     * @description The total number of sessions.
     *
     * @example 55
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'activeCount'        => 'ActiveCount',
        'clientStats'        => 'ClientStats',
        'dbStats'            => 'DbStats',
        'longestSecsRunning' => 'LongestSecsRunning',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }
        if (null !== $this->clientStats) {
            $res['ClientStats'] = [];
            if (null !== $this->clientStats && \is_array($this->clientStats)) {
                foreach ($this->clientStats as $key => $val) {
                    $res['ClientStats'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->dbStats) {
            $res['DbStats'] = [];
            if (null !== $this->dbStats && \is_array($this->dbStats)) {
                foreach ($this->dbStats as $key => $val) {
                    $res['DbStats'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->longestSecsRunning) {
            $res['LongestSecsRunning'] = $this->longestSecsRunning;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }
        if (isset($map['ClientStats'])) {
            $model->clientStats = $map['ClientStats'];
        }
        if (isset($map['DbStats'])) {
            $model->dbStats = $map['DbStats'];
        }
        if (isset($map['LongestSecsRunning'])) {
            $model->longestSecsRunning = $map['LongestSecsRunning'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
