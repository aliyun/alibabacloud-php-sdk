<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\seiParams;

use AlibabaCloud\Dara\Model;

class layoutVolume extends Model
{
    /**
     * @var string
     */
    public $followIdr;

    /**
     * @var string
     */
    public $interval;
    protected $_name = [
        'followIdr' => 'FollowIdr',
        'interval' => 'Interval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
