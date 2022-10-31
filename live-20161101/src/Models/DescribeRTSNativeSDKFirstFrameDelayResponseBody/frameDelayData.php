<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameDelayResponseBody;

use AlibabaCloud\Tea\Model;

class frameDelayData extends Model
{
    /**
     * @var string
     */
    public $frameDelay;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'frameDelay' => 'FrameDelay',
        'timeStamp'  => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameDelay) {
            $res['FrameDelay'] = $this->frameDelay;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameDelayData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameDelay'])) {
            $model->frameDelay = $map['FrameDelay'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
