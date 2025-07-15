<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody\liveStreamUserNumInfos;

use AlibabaCloud\Tea\Model;

class liveStreamUserNumInfo extends Model
{
    /**
     * @description The time when the stream started. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-10-20T06:20:00Z
     *
     * @var string
     */
    public $streamTime;

    /**
     * @description The number of users at the current point in time.
     *
     * @example 1
     *
     * @var string
     */
    public $userNum;
    protected $_name = [
        'streamTime' => 'StreamTime',
        'userNum' => 'UserNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamTime) {
            $res['StreamTime'] = $this->streamTime;
        }
        if (null !== $this->userNum) {
            $res['UserNum'] = $this->userNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamUserNumInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamTime'])) {
            $model->streamTime = $map['StreamTime'];
        }
        if (isset($map['UserNum'])) {
            $model->userNum = $map['UserNum'];
        }

        return $model;
    }
}
