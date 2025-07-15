<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\colorWords;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\timelines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var colorWords[]
     */
    public $colorWords;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $mediaCloudTimeline;

    /**
     * @var string
     */
    public $musicStyle;

    /**
     * @example http://music.mp4
     *
     * @var string
     */
    public $musicUrl;

    /**
     * @example 5
     *
     * @var int
     */
    public $musicVolume;

    /**
     * @example http://output.mp4
     *
     * @var string
     */
    public $outputVideoUrl;

    /**
     * @var int
     */
    public $status;

    /**
     * @example clips
     *
     * @var string
     */
    public $step;

    /**
     * @example 5
     *
     * @var int
     */
    public $subtitleFontSize;

    /**
     * @example e5a1a59c82d0454fad6454e8a04d0093
     *
     * @var string
     */
    public $taskId;

    /**
     * @var timelines[]
     */
    public $timelines;

    /**
     * @var string
     */
    public $voiceStyle;

    /**
     * @example 5
     *
     * @var int
     */
    public $voiceVolume;
    protected $_name = [
        'colorWords' => 'ColorWords',
        'content' => 'Content',
        'mediaCloudTimeline' => 'MediaCloudTimeline',
        'musicStyle' => 'MusicStyle',
        'musicUrl' => 'MusicUrl',
        'musicVolume' => 'MusicVolume',
        'outputVideoUrl' => 'OutputVideoUrl',
        'status' => 'Status',
        'step' => 'Step',
        'subtitleFontSize' => 'SubtitleFontSize',
        'taskId' => 'TaskId',
        'timelines' => 'Timelines',
        'voiceStyle' => 'VoiceStyle',
        'voiceVolume' => 'VoiceVolume',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->colorWords) {
            $res['ColorWords'] = [];
            if (null !== $this->colorWords && \is_array($this->colorWords)) {
                $n = 0;
                foreach ($this->colorWords as $item) {
                    $res['ColorWords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->mediaCloudTimeline) {
            $res['MediaCloudTimeline'] = $this->mediaCloudTimeline;
        }
        if (null !== $this->musicStyle) {
            $res['MusicStyle'] = $this->musicStyle;
        }
        if (null !== $this->musicUrl) {
            $res['MusicUrl'] = $this->musicUrl;
        }
        if (null !== $this->musicVolume) {
            $res['MusicVolume'] = $this->musicVolume;
        }
        if (null !== $this->outputVideoUrl) {
            $res['OutputVideoUrl'] = $this->outputVideoUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->subtitleFontSize) {
            $res['SubtitleFontSize'] = $this->subtitleFontSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->timelines) {
            $res['Timelines'] = [];
            if (null !== $this->timelines && \is_array($this->timelines)) {
                $n = 0;
                foreach ($this->timelines as $item) {
                    $res['Timelines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->voiceStyle) {
            $res['VoiceStyle'] = $this->voiceStyle;
        }
        if (null !== $this->voiceVolume) {
            $res['VoiceVolume'] = $this->voiceVolume;
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
        if (isset($map['ColorWords'])) {
            if (!empty($map['ColorWords'])) {
                $model->colorWords = [];
                $n = 0;
                foreach ($map['ColorWords'] as $item) {
                    $model->colorWords[$n++] = null !== $item ? colorWords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['MediaCloudTimeline'])) {
            $model->mediaCloudTimeline = $map['MediaCloudTimeline'];
        }
        if (isset($map['MusicStyle'])) {
            $model->musicStyle = $map['MusicStyle'];
        }
        if (isset($map['MusicUrl'])) {
            $model->musicUrl = $map['MusicUrl'];
        }
        if (isset($map['MusicVolume'])) {
            $model->musicVolume = $map['MusicVolume'];
        }
        if (isset($map['OutputVideoUrl'])) {
            $model->outputVideoUrl = $map['OutputVideoUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['SubtitleFontSize'])) {
            $model->subtitleFontSize = $map['SubtitleFontSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Timelines'])) {
            if (!empty($map['Timelines'])) {
                $model->timelines = [];
                $n = 0;
                foreach ($map['Timelines'] as $item) {
                    $model->timelines[$n++] = null !== $item ? timelines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VoiceStyle'])) {
            $model->voiceStyle = $map['VoiceStyle'];
        }
        if (isset($map['VoiceVolume'])) {
            $model->voiceVolume = $map['VoiceVolume'];
        }

        return $model;
    }
}
