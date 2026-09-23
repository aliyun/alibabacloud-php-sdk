<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeCustomAgentMonitorMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\DescribeCustomAgentMonitorMetricsResponseBody\data\trend;

class data extends Model
{
    /**
     * @var int
     */
    public $activeUserCount;

    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var int
     */
    public $dislikeCount;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var int
     */
    public $likeCount;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var trend[]
     */
    public $trend;
    protected $_name = [
        'activeUserCount' => 'ActiveUserCount',
        'customAgentId' => 'CustomAgentId',
        'dislikeCount' => 'DislikeCount',
        'endTime' => 'EndTime',
        'granularity' => 'Granularity',
        'likeCount' => 'LikeCount',
        'sessionCount' => 'SessionCount',
        'startTime' => 'StartTime',
        'trend' => 'Trend',
    ];

    public function validate()
    {
        if (\is_array($this->trend)) {
            Model::validateArray($this->trend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeUserCount) {
            $res['ActiveUserCount'] = $this->activeUserCount;
        }

        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->dislikeCount) {
            $res['DislikeCount'] = $this->dislikeCount;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->likeCount) {
            $res['LikeCount'] = $this->likeCount;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->trend) {
            if (\is_array($this->trend)) {
                $res['Trend'] = [];
                $n1 = 0;
                foreach ($this->trend as $item1) {
                    $res['Trend'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ActiveUserCount'])) {
            $model->activeUserCount = $map['ActiveUserCount'];
        }

        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['DislikeCount'])) {
            $model->dislikeCount = $map['DislikeCount'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['LikeCount'])) {
            $model->likeCount = $map['LikeCount'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Trend'])) {
            if (!empty($map['Trend'])) {
                $model->trend = [];
                $n1 = 0;
                foreach ($map['Trend'] as $item1) {
                    $model->trend[$n1] = trend::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
