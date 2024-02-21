<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\clientStats;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\dbStats;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\sessionList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\userStats;
use AlibabaCloud\Tea\Model;

class sessionData extends Model
{
    /**
     * @description The total number of active sessions.
     *
     * @example 10
     *
     * @var int
     */
    public $activeSessionCount;

    /**
     * @description The sessions that are counted by client IP address.
     *
     * @var clientStats[]
     */
    public $clientStats;

    /**
     * @description The sessions that are counted by database.
     *
     * @var dbStats[]
     */
    public $dbStats;

    /**
     * @description The maximum execution duration of an active session. Unit: seconds.
     *
     * @example 6
     *
     * @var int
     */
    public $maxActiveTime;

    /**
     * @description The sessions.
     *
     * @var sessionList[]
     */
    public $sessionList;

    /**
     * @description The time when the session was queried. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1659581514000020
     *
     * @var int
     */
    public $timeStamp;

    /**
     * @description The total number of sessions.
     *
     * @example 988
     *
     * @var int
     */
    public $totalSessionCount;

    /**
     * @description The sessions that are counted by database account.
     *
     * @var userStats[]
     */
    public $userStats;
    protected $_name = [
        'activeSessionCount' => 'ActiveSessionCount',
        'clientStats'        => 'ClientStats',
        'dbStats'            => 'DbStats',
        'maxActiveTime'      => 'MaxActiveTime',
        'sessionList'        => 'SessionList',
        'timeStamp'          => 'TimeStamp',
        'totalSessionCount'  => 'TotalSessionCount',
        'userStats'          => 'UserStats',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }
        if (null !== $this->clientStats) {
            $res['ClientStats'] = [];
            if (null !== $this->clientStats && \is_array($this->clientStats)) {
                $n = 0;
                foreach ($this->clientStats as $item) {
                    $res['ClientStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dbStats) {
            $res['DbStats'] = [];
            if (null !== $this->dbStats && \is_array($this->dbStats)) {
                $n = 0;
                foreach ($this->dbStats as $item) {
                    $res['DbStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxActiveTime) {
            $res['MaxActiveTime'] = $this->maxActiveTime;
        }
        if (null !== $this->sessionList) {
            $res['SessionList'] = [];
            if (null !== $this->sessionList && \is_array($this->sessionList)) {
                $n = 0;
                foreach ($this->sessionList as $item) {
                    $res['SessionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->totalSessionCount) {
            $res['TotalSessionCount'] = $this->totalSessionCount;
        }
        if (null !== $this->userStats) {
            $res['UserStats'] = [];
            if (null !== $this->userStats && \is_array($this->userStats)) {
                $n = 0;
                foreach ($this->userStats as $item) {
                    $res['UserStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }
        if (isset($map['ClientStats'])) {
            if (!empty($map['ClientStats'])) {
                $model->clientStats = [];
                $n                  = 0;
                foreach ($map['ClientStats'] as $item) {
                    $model->clientStats[$n++] = null !== $item ? clientStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DbStats'])) {
            if (!empty($map['DbStats'])) {
                $model->dbStats = [];
                $n              = 0;
                foreach ($map['DbStats'] as $item) {
                    $model->dbStats[$n++] = null !== $item ? dbStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxActiveTime'])) {
            $model->maxActiveTime = $map['MaxActiveTime'];
        }
        if (isset($map['SessionList'])) {
            if (!empty($map['SessionList'])) {
                $model->sessionList = [];
                $n                  = 0;
                foreach ($map['SessionList'] as $item) {
                    $model->sessionList[$n++] = null !== $item ? sessionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TotalSessionCount'])) {
            $model->totalSessionCount = $map['TotalSessionCount'];
        }
        if (isset($map['UserStats'])) {
            if (!empty($map['UserStats'])) {
                $model->userStats = [];
                $n                = 0;
                foreach ($map['UserStats'] as $item) {
                    $model->userStats[$n++] = null !== $item ? userStats::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
