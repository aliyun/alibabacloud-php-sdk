<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody\durationDataPerInterval;

use AlibabaCloud\Dara\Model;

class durationModule extends Model
{
    /**
     * @var int
     */
    public $audioDuration;
    /**
     * @var int
     */
    public $contentDuration;
    /**
     * @var string
     */
    public $timeStamp;
    /**
     * @var int
     */
    public $totalDuration;
    /**
     * @var int
     */
    public $v1080Duration;
    /**
     * @var int
     */
    public $v360Duration;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
