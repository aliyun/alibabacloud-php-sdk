<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMeterLiveBypassDurationResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeMeterLiveBypassDurationResponseBody extends Model
{
    /**
     * @description The total audio-only duration. Audio-only is a basic specification. Unit: minutes.
     *
     * @example 20
     *
     * @var int
     */
    public $audioSummaryDuration;

    /**
     * @description The usage statistics for each time granularity.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example 4B460F8B-993C-4F48-B98A-910811DEBFEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total single-stream relay duration for audio. Unit: minutes.
     *
     * @example 20
     *
     * @var int
     */
    public $singleAudioSummaryDuration;

    /**
     * @description The total single-stream relay duration for video. Unit: minutes.
     *
     * @example 30
     *
     * @var int
     */
    public $singleVideoSummaryDuration;

    /**
     * @description The total duration. Unit: minutes.
     *
     * @example 150
     *
     * @var int
     */
    public $totalSummaryDuration;

    /**
     * @description The total Full HD duration. The video resolution is 1920 × 1080 or lower. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $v1080SummaryDuration;

    /**
     * @description The total standard definition (SD) duration. The video resolution is 640 × 480 or lower. Unit: minutes.
     *
     * @example 30
     *
     * @var int
     */
    public $v480SummaryDuration;

    /**
     * @description The total high definition (HD) duration. The video resolution is 1280 × 720 or lower. Unit: minutes.
     *
     * @example 40
     *
     * @var int
     */
    public $v720SummaryDuration;
    protected $_name = [
        'audioSummaryDuration' => 'AudioSummaryDuration',
        'data' => 'Data',
        'requestId' => 'RequestId',
        'singleAudioSummaryDuration' => 'SingleAudioSummaryDuration',
        'singleVideoSummaryDuration' => 'SingleVideoSummaryDuration',
        'totalSummaryDuration' => 'TotalSummaryDuration',
        'v1080SummaryDuration' => 'V1080SummaryDuration',
        'v480SummaryDuration' => 'V480SummaryDuration',
        'v720SummaryDuration' => 'V720SummaryDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSummaryDuration) {
            $res['AudioSummaryDuration'] = $this->audioSummaryDuration;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->singleAudioSummaryDuration) {
            $res['SingleAudioSummaryDuration'] = $this->singleAudioSummaryDuration;
        }
        if (null !== $this->singleVideoSummaryDuration) {
            $res['SingleVideoSummaryDuration'] = $this->singleVideoSummaryDuration;
        }
        if (null !== $this->totalSummaryDuration) {
            $res['TotalSummaryDuration'] = $this->totalSummaryDuration;
        }
        if (null !== $this->v1080SummaryDuration) {
            $res['V1080SummaryDuration'] = $this->v1080SummaryDuration;
        }
        if (null !== $this->v480SummaryDuration) {
            $res['V480SummaryDuration'] = $this->v480SummaryDuration;
        }
        if (null !== $this->v720SummaryDuration) {
            $res['V720SummaryDuration'] = $this->v720SummaryDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeterLiveBypassDurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSummaryDuration'])) {
            $model->audioSummaryDuration = $map['AudioSummaryDuration'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SingleAudioSummaryDuration'])) {
            $model->singleAudioSummaryDuration = $map['SingleAudioSummaryDuration'];
        }
        if (isset($map['SingleVideoSummaryDuration'])) {
            $model->singleVideoSummaryDuration = $map['SingleVideoSummaryDuration'];
        }
        if (isset($map['TotalSummaryDuration'])) {
            $model->totalSummaryDuration = $map['TotalSummaryDuration'];
        }
        if (isset($map['V1080SummaryDuration'])) {
            $model->v1080SummaryDuration = $map['V1080SummaryDuration'];
        }
        if (isset($map['V480SummaryDuration'])) {
            $model->v480SummaryDuration = $map['V480SummaryDuration'];
        }
        if (isset($map['V720SummaryDuration'])) {
            $model->v720SummaryDuration = $map['V720SummaryDuration'];
        }

        return $model;
    }
}
