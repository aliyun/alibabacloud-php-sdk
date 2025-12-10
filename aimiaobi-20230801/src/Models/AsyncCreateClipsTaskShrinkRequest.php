<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class AsyncCreateClipsTaskShrinkRequest extends Model
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
     * @var string
     */
    public $colorWordsShrink;

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
     * @var string
     */
    public $stickersShrink;

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
        'colorWordsShrink' => 'ColorWords',
        'customVoiceUrl' => 'CustomVoiceUrl',
        'customVoiceVolume' => 'CustomVoiceVolume',
        'height' => 'Height',
        'musicUrl' => 'MusicUrl',
        'musicVolume' => 'MusicVolume',
        'stickersShrink' => 'Stickers',
        'subtitleFontSize' => 'SubtitleFontSize',
        'taskId' => 'TaskId',
        'voiceStyle' => 'VoiceStyle',
        'voiceVolume' => 'VoiceVolume',
        'width' => 'Width',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
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

        if (null !== $this->colorWordsShrink) {
            $res['ColorWords'] = $this->colorWordsShrink;
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

        if (null !== $this->stickersShrink) {
            $res['Stickers'] = $this->stickersShrink;
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
            $model->colorWordsShrink = $map['ColorWords'];
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
            $model->stickersShrink = $map['Stickers'];
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
