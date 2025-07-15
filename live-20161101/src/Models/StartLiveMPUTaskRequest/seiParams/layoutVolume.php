<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\seiParams;

use AlibabaCloud\Tea\Model;

class layoutVolume extends Model
{
    /**
     * @description Specifies whether to include the SEI in an Instantaneous Decoder Refresh (IDR) frame. Valid values:
     *
     *   **0**: does not include the SEI.
     *   **1**: includes the SEI.
     *
     * @example 0
     *
     * @var string
     */
    public $followIdr;

    /**
     * @description The interval at which the SEI is sent. Valid values: [1000,5000]. Unit: milliseconds.
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
