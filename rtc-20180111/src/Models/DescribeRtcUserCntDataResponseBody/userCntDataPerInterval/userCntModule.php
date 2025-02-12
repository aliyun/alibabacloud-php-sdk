<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody\userCntDataPerInterval;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
