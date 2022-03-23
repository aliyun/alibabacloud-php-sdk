<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\DescribeMeterImpWatchTimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $liveRtcDuration;

    /**
     * @var int
     */
    public $liveRtmpDuration;

    /**
     * @var int
     */
    public $liveRtsDuration;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $vodDuration;
    protected $_name = [
        'liveRtcDuration'  => 'LiveRtcDuration',
        'liveRtmpDuration' => 'LiveRtmpDuration',
        'liveRtsDuration'  => 'LiveRtsDuration',
        'time'             => 'Time',
        'vodDuration'      => 'VodDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRtcDuration) {
            $res['LiveRtcDuration'] = $this->liveRtcDuration;
        }
        if (null !== $this->liveRtmpDuration) {
            $res['LiveRtmpDuration'] = $this->liveRtmpDuration;
        }
        if (null !== $this->liveRtsDuration) {
            $res['LiveRtsDuration'] = $this->liveRtsDuration;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->vodDuration) {
            $res['VodDuration'] = $this->vodDuration;
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
        if (isset($map['LiveRtcDuration'])) {
            $model->liveRtcDuration = $map['LiveRtcDuration'];
        }
        if (isset($map['LiveRtmpDuration'])) {
            $model->liveRtmpDuration = $map['LiveRtmpDuration'];
        }
        if (isset($map['LiveRtsDuration'])) {
            $model->liveRtsDuration = $map['LiveRtsDuration'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['VodDuration'])) {
            $model->vodDuration = $map['VodDuration'];
        }

        return $model;
    }
}
