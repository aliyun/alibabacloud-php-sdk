<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsEditUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The usage duration, in minutes.
     *
     * @example 1.23
     *
     * @var int
     */
    public $duration;

    /**
     * @description The video profile.
     *
     * @example 1080P
     *
     * @var string
     */
    public $profile;

    /**
     * @description The beginning time of usage. The value is a 10-digit timestamp.
     *
     * @example 1656950400
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'duration' => 'Duration',
        'profile' => 'Profile',
        'time' => 'Time',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
