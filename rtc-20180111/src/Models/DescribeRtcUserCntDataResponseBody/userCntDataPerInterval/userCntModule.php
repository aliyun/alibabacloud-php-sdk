<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody\userCntDataPerInterval;

use AlibabaCloud\Tea\Model;

class userCntModule extends Model
{
    /**
     * @var int
     */
    public $activeUserCnt;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'activeUserCnt' => 'ActiveUserCnt',
        'timeStamp'     => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeUserCnt) {
            $res['ActiveUserCnt'] = $this->activeUserCnt;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userCntModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveUserCnt'])) {
            $model->activeUserCnt = $map['ActiveUserCnt'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
