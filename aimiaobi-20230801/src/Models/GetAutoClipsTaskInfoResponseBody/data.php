<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\analysisResults;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\colorWords;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\referenceVideo;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\sourceVideos;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\stickers;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\timelines;

class data extends Model
{
    /**
     * @var analysisResults[]
     */
    public $analysisResults;

    /**
     * @var bool
     */
    public $closeMusic;

    /**
     * @var bool
     */
    public $closeSubtitle;

    /**
     * @var bool
     */
    public $closeVoice;

    /**
     * @var string
     */
    public $closingCreditsUrl;

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
    public $customVoiceStyle;

    /**
     * @var string
     */
    public $customVoiceUrl;

    /**
     * @var int
     */
    public $customVoiceVolume;

    /**
     * @var string
     */
    public $errorMessage;

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
    public $openingCreditsUrl;

    /**
     * @var string
     */
    public $outputVideoFileKey;

    /**
     * @var string
     */
    public $outputVideoUrl;

    /**
     * @var referenceVideo
     */
    public $referenceVideo;

    /**
     * @var sourceVideos[]
     */
    public $sourceVideos;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $step;

    /**
     * @var stickers[]
     */
    public $stickers;

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
        'analysisResults' => 'AnalysisResults',
        'closeMusic' => 'CloseMusic',
        'closeSubtitle' => 'CloseSubtitle',
        'closeVoice' => 'CloseVoice',
        'closingCreditsUrl' => 'ClosingCreditsUrl',
        'colorWords' => 'ColorWords',
        'content' => 'Content',
        'customVoiceStyle' => 'CustomVoiceStyle',
        'customVoiceUrl' => 'CustomVoiceUrl',
        'customVoiceVolume' => 'CustomVoiceVolume',
        'errorMessage' => 'ErrorMessage',
        'mediaCloudTimeline' => 'MediaCloudTimeline',
        'musicStyle' => 'MusicStyle',
        'musicUrl' => 'MusicUrl',
        'musicVolume' => 'MusicVolume',
        'openingCreditsUrl' => 'OpeningCreditsUrl',
        'outputVideoFileKey' => 'OutputVideoFileKey',
        'outputVideoUrl' => 'OutputVideoUrl',
        'referenceVideo' => 'ReferenceVideo',
        'sourceVideos' => 'SourceVideos',
        'status' => 'Status',
        'step' => 'Step',
        'stickers' => 'Stickers',
        'subtitleFontSize' => 'SubtitleFontSize',
        'taskId' => 'TaskId',
        'timelines' => 'Timelines',
        'voiceStyle' => 'VoiceStyle',
        'voiceVolume' => 'VoiceVolume',
    ];

    public function validate()
    {
        if (\is_array($this->analysisResults)) {
            Model::validateArray($this->analysisResults);
        }
        if (\is_array($this->colorWords)) {
            Model::validateArray($this->colorWords);
        }
        if (null !== $this->referenceVideo) {
            $this->referenceVideo->validate();
        }
        if (\is_array($this->sourceVideos)) {
            Model::validateArray($this->sourceVideos);
        }
        if (\is_array($this->stickers)) {
            Model::validateArray($this->stickers);
        }
        if (\is_array($this->timelines)) {
            Model::validateArray($this->timelines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisResults) {
            if (\is_array($this->analysisResults)) {
                $res['AnalysisResults'] = [];
                $n1 = 0;
                foreach ($this->analysisResults as $item1) {
                    $res['AnalysisResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->closeMusic) {
            $res['CloseMusic'] = $this->closeMusic;
        }

        if (null !== $this->closeSubtitle) {
            $res['CloseSubtitle'] = $this->closeSubtitle;
        }

        if (null !== $this->closeVoice) {
            $res['CloseVoice'] = $this->closeVoice;
        }

        if (null !== $this->closingCreditsUrl) {
            $res['ClosingCreditsUrl'] = $this->closingCreditsUrl;
        }

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

        if (null !== $this->customVoiceStyle) {
            $res['CustomVoiceStyle'] = $this->customVoiceStyle;
        }

        if (null !== $this->customVoiceUrl) {
            $res['CustomVoiceUrl'] = $this->customVoiceUrl;
        }

        if (null !== $this->customVoiceVolume) {
            $res['CustomVoiceVolume'] = $this->customVoiceVolume;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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

        if (null !== $this->openingCreditsUrl) {
            $res['OpeningCreditsUrl'] = $this->openingCreditsUrl;
        }

        if (null !== $this->outputVideoFileKey) {
            $res['OutputVideoFileKey'] = $this->outputVideoFileKey;
        }

        if (null !== $this->outputVideoUrl) {
            $res['OutputVideoUrl'] = $this->outputVideoUrl;
        }

        if (null !== $this->referenceVideo) {
            $res['ReferenceVideo'] = null !== $this->referenceVideo ? $this->referenceVideo->toArray($noStream) : $this->referenceVideo;
        }

        if (null !== $this->sourceVideos) {
            if (\is_array($this->sourceVideos)) {
                $res['SourceVideos'] = [];
                $n1 = 0;
                foreach ($this->sourceVideos as $item1) {
                    $res['SourceVideos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->stickers) {
            if (\is_array($this->stickers)) {
                $res['Stickers'] = [];
                $n1 = 0;
                foreach ($this->stickers as $item1) {
                    $res['Stickers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AnalysisResults'])) {
            if (!empty($map['AnalysisResults'])) {
                $model->analysisResults = [];
                $n1 = 0;
                foreach ($map['AnalysisResults'] as $item1) {
                    $model->analysisResults[$n1] = analysisResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CloseMusic'])) {
            $model->closeMusic = $map['CloseMusic'];
        }

        if (isset($map['CloseSubtitle'])) {
            $model->closeSubtitle = $map['CloseSubtitle'];
        }

        if (isset($map['CloseVoice'])) {
            $model->closeVoice = $map['CloseVoice'];
        }

        if (isset($map['ClosingCreditsUrl'])) {
            $model->closingCreditsUrl = $map['ClosingCreditsUrl'];
        }

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

        if (isset($map['CustomVoiceStyle'])) {
            $model->customVoiceStyle = $map['CustomVoiceStyle'];
        }

        if (isset($map['CustomVoiceUrl'])) {
            $model->customVoiceUrl = $map['CustomVoiceUrl'];
        }

        if (isset($map['CustomVoiceVolume'])) {
            $model->customVoiceVolume = $map['CustomVoiceVolume'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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

        if (isset($map['OpeningCreditsUrl'])) {
            $model->openingCreditsUrl = $map['OpeningCreditsUrl'];
        }

        if (isset($map['OutputVideoFileKey'])) {
            $model->outputVideoFileKey = $map['OutputVideoFileKey'];
        }

        if (isset($map['OutputVideoUrl'])) {
            $model->outputVideoUrl = $map['OutputVideoUrl'];
        }

        if (isset($map['ReferenceVideo'])) {
            $model->referenceVideo = referenceVideo::fromMap($map['ReferenceVideo']);
        }

        if (isset($map['SourceVideos'])) {
            if (!empty($map['SourceVideos'])) {
                $model->sourceVideos = [];
                $n1 = 0;
                foreach ($map['SourceVideos'] as $item1) {
                    $model->sourceVideos[$n1] = sourceVideos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['Stickers'])) {
            if (!empty($map['Stickers'])) {
                $model->stickers = [];
                $n1 = 0;
                foreach ($map['Stickers'] as $item1) {
                    $model->stickers[$n1] = stickers::fromMap($item1);
                    ++$n1;
                }
            }
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
