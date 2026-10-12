<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeCustomAgentMonitorMetricsResponseBody\data;

use AlibabaCloud\Dara\Model;

class trend extends Model
{
    /**
     * @var int
     */
    public $activeUserCount;

    /**
     * @var int
     */
    public $dislikeCount;

    /**
     * @var int
     */
    public $likeCount;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var string
     */
    public $statTime;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'activeUserCount' => 'ActiveUserCount',
        'dislikeCount' => 'DislikeCount',
        'likeCount' => 'LikeCount',
        'sessionCount' => 'SessionCount',
        'statTime' => 'StatTime',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeUserCount) {
            $res['ActiveUserCount'] = $this->activeUserCount;
        }

        if (null !== $this->dislikeCount) {
            $res['DislikeCount'] = $this->dislikeCount;
        }

        if (null !== $this->likeCount) {
            $res['LikeCount'] = $this->likeCount;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->statTime) {
            $res['StatTime'] = $this->statTime;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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

        if (isset($map['DislikeCount'])) {
            $model->dislikeCount = $map['DislikeCount'];
        }

        if (isset($map['LikeCount'])) {
            $model->likeCount = $map['LikeCount'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['StatTime'])) {
            $model->statTime = $map['StatTime'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
