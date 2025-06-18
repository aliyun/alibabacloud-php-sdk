<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\colorWords;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\timelines;

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
     * @var string
     */
    public $musicUrl;

    /**
     * @var int
     */
    public $musicVolume;

    /**
     * @var string
     */
    public $outputVideoUrl;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $step;

    /**
     * @var int
     */
    public $subtitleFontSize;

    /**
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

    public function validate()
    {
        if (\is_array($this->colorWords)) {
            Model::validateArray($this->colorWords);
        }
        if (\is_array($this->timelines)) {
            Model::validateArray($this->timelines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->colorWords) {
            if (\is_array($this->colorWords)) {
                $res['ColorWords'] = [];
                $n1 = 0;
                foreach ($this->colorWords as $item1) {
                    $res['ColorWords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->timelines)) {
                $res['Timelines'] = [];
                $n1 = 0;
                foreach ($this->timelines as $item1) {
                    $res['Timelines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColorWords'])) {
            if (!empty($map['ColorWords'])) {
                $model->colorWords = [];
                $n1 = 0;
                foreach ($map['ColorWords'] as $item1) {
                    $model->colorWords[$n1] = colorWords::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Timelines'] as $item1) {
                    $model->timelines[$n1] = timelines::fromMap($item1);
                    ++$n1;
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
