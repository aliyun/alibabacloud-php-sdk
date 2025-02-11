<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\clientStats;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\dbStats;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\sessionList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData\userStats;

class sessionData extends Model
{
    /**
     * @var int
     */
    public $activeSessionCount;
    /**
     * @var clientStats[]
     */
    public $clientStats;
    /**
     * @var dbStats[]
     */
    public $dbStats;
    /**
     * @var int
     */
    public $maxActiveTime;
    /**
     * @var sessionList[]
     */
    public $sessionList;
    /**
     * @var int
     */
    public $timeStamp;
    /**
     * @var int
     */
    public $totalSessionCount;
    /**
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
        if (\is_array($this->clientStats)) {
            Model::validateArray($this->clientStats);
        }
        if (\is_array($this->dbStats)) {
            Model::validateArray($this->dbStats);
        }
        if (\is_array($this->sessionList)) {
            Model::validateArray($this->sessionList);
        }
        if (\is_array($this->userStats)) {
            Model::validateArray($this->userStats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }

        if (null !== $this->clientStats) {
            if (\is_array($this->clientStats)) {
                $res['ClientStats'] = [];
                $n1                 = 0;
                foreach ($this->clientStats as $item1) {
                    $res['ClientStats'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dbStats) {
            if (\is_array($this->dbStats)) {
                $res['DbStats'] = [];
                $n1             = 0;
                foreach ($this->dbStats as $item1) {
                    $res['DbStats'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxActiveTime) {
            $res['MaxActiveTime'] = $this->maxActiveTime;
        }

        if (null !== $this->sessionList) {
            if (\is_array($this->sessionList)) {
                $res['SessionList'] = [];
                $n1                 = 0;
                foreach ($this->sessionList as $item1) {
                    $res['SessionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->userStats)) {
                $res['UserStats'] = [];
                $n1               = 0;
                foreach ($this->userStats as $item1) {
                    $res['UserStats'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }

        if (isset($map['ClientStats'])) {
            if (!empty($map['ClientStats'])) {
                $model->clientStats = [];
                $n1                 = 0;
                foreach ($map['ClientStats'] as $item1) {
                    $model->clientStats[$n1++] = clientStats::fromMap($item1);
                }
            }
        }

        if (isset($map['DbStats'])) {
            if (!empty($map['DbStats'])) {
                $model->dbStats = [];
                $n1             = 0;
                foreach ($map['DbStats'] as $item1) {
                    $model->dbStats[$n1++] = dbStats::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxActiveTime'])) {
            $model->maxActiveTime = $map['MaxActiveTime'];
        }

        if (isset($map['SessionList'])) {
            if (!empty($map['SessionList'])) {
                $model->sessionList = [];
                $n1                 = 0;
                foreach ($map['SessionList'] as $item1) {
                    $model->sessionList[$n1++] = sessionList::fromMap($item1);
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
                $n1               = 0;
                foreach ($map['UserStats'] as $item1) {
                    $model->userStats[$n1++] = userStats::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
