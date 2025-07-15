<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\seiParams;

use AlibabaCloud\Tea\Model;

class layoutVolume extends Model
{
    /**
     * @description Indicates whether to add SEI messages to Instantaneous Decoder Refresh (IDR) frames. Valid values:
     *
     *   0: does not add SEI messages.
     *   1: adds SEI messages.
     *
     * @example 0
     *
     * @var string
     */
    public $followIdr;

    /**
     * @description The interval at which the SEI messages are added. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var string
     */
    public $interval;
    protected $_name = [
        'followIdr' => 'FollowIdr',
        'interval' => 'Interval',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->followIdr) {
            $res['FollowIdr'] = $this->followIdr;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layoutVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FollowIdr'])) {
            $model->followIdr = $map['FollowIdr'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
