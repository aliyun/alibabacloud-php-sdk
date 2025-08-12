<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameDelayResponseBody;

use AlibabaCloud\Dara\Model;

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
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
