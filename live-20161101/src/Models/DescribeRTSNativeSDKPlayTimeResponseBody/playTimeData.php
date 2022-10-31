<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayTimeResponseBody;

use AlibabaCloud\Tea\Model;

class playTimeData extends Model
{
    /**
     * @var string
     */
    public $playTime;

    /**
     * @var string
     */
    public $stallTime;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'playTime'  => 'PlayTime',
        'stallTime' => 'StallTime',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playTime) {
            $res['PlayTime'] = $this->playTime;
        }
        if (null !== $this->stallTime) {
            $res['StallTime'] = $this->stallTime;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playTimeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayTime'])) {
            $model->playTime = $map['PlayTime'];
        }
        if (isset($map['StallTime'])) {
            $model->stallTime = $map['StallTime'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
