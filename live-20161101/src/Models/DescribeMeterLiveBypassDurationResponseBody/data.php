<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeMeterLiveBypassDurationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $audioDuration;

    /**
     * @var int
     */
    public $singleAudio;

    /**
     * @var int
     */
    public $singleVideo;

    /**
     * @var string
     */
    public $timestamp;

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
    public $v480Duration;

    /**
     * @var int
     */
    public $v720Duration;
    protected $_name = [
        'audioDuration' => 'AudioDuration',
        'singleAudio' => 'Single_Audio',
        'singleVideo' => 'Single_Video',
        'timestamp' => 'Timestamp',
        'totalDuration' => 'TotalDuration',
        'v1080Duration' => 'V1080Duration',
        'v480Duration' => 'V480Duration',
        'v720Duration' => 'V720Duration',
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

        if (null !== $this->singleAudio) {
            $res['Single_Audio'] = $this->singleAudio;
        }

        if (null !== $this->singleVideo) {
            $res['Single_Video'] = $this->singleVideo;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->v1080Duration) {
            $res['V1080Duration'] = $this->v1080Duration;
        }

        if (null !== $this->v480Duration) {
            $res['V480Duration'] = $this->v480Duration;
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

        if (isset($map['Single_Audio'])) {
            $model->singleAudio = $map['Single_Audio'];
        }

        if (isset($map['Single_Video'])) {
            $model->singleVideo = $map['Single_Video'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['V1080Duration'])) {
            $model->v1080Duration = $map['V1080Duration'];
        }

        if (isset($map['V480Duration'])) {
            $model->v480Duration = $map['V480Duration'];
        }

        if (isset($map['V720Duration'])) {
            $model->v720Duration = $map['V720Duration'];
        }

        return $model;
    }
}
