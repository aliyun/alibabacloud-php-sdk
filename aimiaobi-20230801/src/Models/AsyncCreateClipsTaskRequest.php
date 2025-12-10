<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncCreateClipsTaskRequest\colorWords;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncCreateClipsTaskRequest\stickers;

class AsyncCreateClipsTaskRequest extends Model
{
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
     * @var colorWords[]
     */
    public $colorWords;

    /**
     * @var string
     */
    public $customVoiceUrl;

    /**
     * @var int
     */
    public $customVoiceVolume;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $musicUrl;

    /**
     * @var int
     */
    public $musicVolume;

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
     * @var string
     */
    public $voiceStyle;

    /**
     * @var int
     */
    public $voiceVolume;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'closeMusic' => 'CloseMusic',
        'closeSubtitle' => 'CloseSubtitle',
        'closeVoice' => 'CloseVoice',
        'colorWords' => 'ColorWords',
        'customVoiceUrl' => 'CustomVoiceUrl',
        'customVoiceVolume' => 'CustomVoiceVolume',
        'height' => 'Height',
        'musicUrl' => 'MusicUrl',
        'musicVolume' => 'MusicVolume',
        'stickers' => 'Stickers',
        'subtitleFontSize' => 'SubtitleFontSize',
        'taskId' => 'TaskId',
        'voiceStyle' => 'VoiceStyle',
        'voiceVolume' => 'VoiceVolume',
        'width' => 'Width',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->colorWords)) {
            Model::validateArray($this->colorWords);
        }
        if (\is_array($this->stickers)) {
            Model::validateArray($this->stickers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->closeMusic) {
            $res['CloseMusic'] = $this->closeMusic;
        }

        if (null !== $this->closeSubtitle) {
            $res['CloseSubtitle'] = $this->closeSubtitle;
        }

        if (null !== $this->closeVoice) {
            $res['CloseVoice'] = $this->closeVoice;
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

        if (null !== $this->customVoiceUrl) {
            $res['CustomVoiceUrl'] = $this->customVoiceUrl;
        }

        if (null !== $this->customVoiceVolume) {
            $res['CustomVoiceVolume'] = $this->customVoiceVolume;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->musicUrl) {
            $res['MusicUrl'] = $this->musicUrl;
        }

        if (null !== $this->musicVolume) {
            $res['MusicVolume'] = $this->musicVolume;
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

        if (null !== $this->voiceStyle) {
            $res['VoiceStyle'] = $this->voiceStyle;
        }

        if (null !== $this->voiceVolume) {
            $res['VoiceVolume'] = $this->voiceVolume;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CloseMusic'])) {
            $model->closeMusic = $map['CloseMusic'];
        }

        if (isset($map['CloseSubtitle'])) {
            $model->closeSubtitle = $map['CloseSubtitle'];
        }

        if (isset($map['CloseVoice'])) {
            $model->closeVoice = $map['CloseVoice'];
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

        if (isset($map['CustomVoiceUrl'])) {
            $model->customVoiceUrl = $map['CustomVoiceUrl'];
        }

        if (isset($map['CustomVoiceVolume'])) {
            $model->customVoiceVolume = $map['CustomVoiceVolume'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['MusicUrl'])) {
            $model->musicUrl = $map['MusicUrl'];
        }

        if (isset($map['MusicVolume'])) {
            $model->musicVolume = $map['MusicVolume'];
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

        if (isset($map['VoiceStyle'])) {
            $model->voiceStyle = $map['VoiceStyle'];
        }

        if (isset($map['VoiceVolume'])) {
            $model->voiceVolume = $map['VoiceVolume'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
