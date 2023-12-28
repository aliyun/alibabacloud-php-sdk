<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody\durationDataPerInterval;

use AlibabaCloud\Tea\Model;

class durationModule extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $audioDuration;

    /**
     * @example 200
     *
     * @var int
     */
    public $contentDuration;

    /**
     * @example 2020-02-04T05:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalDuration;

    /**
     * @example 300
     *
     * @var int
     */
    public $v1080Duration;

    /**
     * @example 300
     *
     * @var int
     */
    public $v360Duration;

    /**
     * @example 200
     *
     * @var int
     */
    public $v720Duration;
    protected $_name = [
        'audioDuration'   => 'AudioDuration',
        'contentDuration' => 'ContentDuration',
        'timeStamp'       => 'TimeStamp',
        'totalDuration'   => 'TotalDuration',
        'v1080Duration'   => 'V1080Duration',
        'v360Duration'    => 'V360Duration',
        'v720Duration'    => 'V720Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioDuration) {
            $res['AudioDuration'] = $this->audioDuration;
        }
        if (null !== $this->contentDuration) {
            $res['ContentDuration'] = $this->contentDuration;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }
        if (null !== $this->v1080Duration) {
            $res['V1080Duration'] = $this->v1080Duration;
        }
        if (null !== $this->v360Duration) {
            $res['V360Duration'] = $this->v360Duration;
        }
        if (null !== $this->v720Duration) {
            $res['V720Duration'] = $this->v720Duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return durationModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioDuration'])) {
            $model->audioDuration = $map['AudioDuration'];
        }
        if (isset($map['ContentDuration'])) {
            $model->contentDuration = $map['ContentDuration'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }
        if (isset($map['V1080Duration'])) {
            $model->v1080Duration = $map['V1080Duration'];
        }
        if (isset($map['V360Duration'])) {
            $model->v360Duration = $map['V360Duration'];
        }
        if (isset($map['V720Duration'])) {
            $model->v720Duration = $map['V720Duration'];
        }

        return $model;
    }
}
