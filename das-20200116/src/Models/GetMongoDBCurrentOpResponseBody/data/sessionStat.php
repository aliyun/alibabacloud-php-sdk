<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DataSessionStatClientStatsValue;
use AlibabaCloud\SDK\DAS\V20200116\Models\DataSessionStatDbStatsValue;

class sessionStat extends Model
{
    /**
     * @var int
     */
    public $activeCount;

    /**
     * @var DataSessionStatClientStatsValue[]
     */
    public $clientStats;

    /**
     * @var DataSessionStatDbStatsValue[]
     */
    public $dbStats;

    /**
     * @var int
     */
    public $longestSecsRunning;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'activeCount' => 'ActiveCount',
        'clientStats' => 'ClientStats',
        'dbStats' => 'DbStats',
        'longestSecsRunning' => 'LongestSecsRunning',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->clientStats)) {
            Model::validateArray($this->clientStats);
        }
        if (\is_array($this->dbStats)) {
            Model::validateArray($this->dbStats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }

        if (null !== $this->clientStats) {
            if (\is_array($this->clientStats)) {
                $res['ClientStats'] = [];
                foreach ($this->clientStats as $key1 => $value1) {
                    $res['ClientStats'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->dbStats) {
            if (\is_array($this->dbStats)) {
                $res['DbStats'] = [];
                foreach ($this->dbStats as $key1 => $value1) {
                    $res['DbStats'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }

        if (isset($map['ClientStats'])) {
            if (!empty($map['ClientStats'])) {
                $model->clientStats = [];
                foreach ($map['ClientStats'] as $key1 => $value1) {
                    $model->clientStats[$key1] = DataSessionStatClientStatsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['DbStats'])) {
            if (!empty($map['DbStats'])) {
                $model->dbStats = [];
                foreach ($map['DbStats'] as $key1 => $value1) {
                    $model->dbStats[$key1] = DataSessionStatDbStatsValue::fromMap($value1);
                }
            }
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
