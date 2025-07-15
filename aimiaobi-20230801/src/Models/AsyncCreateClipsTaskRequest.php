<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncCreateClipsTaskRequest\colorWords;
use AlibabaCloud\Tea\Model;

class AsyncCreateClipsTaskRequest extends Model
{
    /**
     * @var colorWords[]
     */
    public $colorWords;

    /**
     * @example 1920
     *
     * @var int
     */
    public $height;

    /**
     * @example http://music.mp4
     *
     * @var string
     */
    public $musicUrl;

    /**
     * @var int
     */
    public $musicVolume;

    /**
     * @var int
     */
    public $subtitleFontSize;

    /**
     * @description This parameter is required.
     *
     * @example 17a299a9-f223-4707-b0dd-4c22519bddf5
     *
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
     * @example 1080
     *
     * @var int
     */
    public $width;

    /**
     * @description This parameter is required.
     *
     * @example llm-ipe7d81yq4sl5jmk
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'colorWords' => 'ColorWords',
        'height' => 'Height',
        'musicUrl' => 'MusicUrl',
        'musicVolume' => 'MusicVolume',
        'subtitleFontSize' => 'SubtitleFontSize',
        'taskId' => 'TaskId',
        'voiceStyle' => 'VoiceStyle',
        'voiceVolume' => 'VoiceVolume',
        'width' => 'Width',
        'workspaceId' => 'WorkspaceId',
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
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->musicUrl) {
            $res['MusicUrl'] = $this->musicUrl;
        }
        if (null !== $this->musicVolume) {
            $res['MusicVolume'] = $this->musicVolume;
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

    /**
     * @param array $map
     *
     * @return AsyncCreateClipsTaskRequest
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MusicUrl'])) {
            $model->musicUrl = $map['MusicUrl'];
        }
        if (isset($map['MusicVolume'])) {
            $model->musicVolume = $map['MusicVolume'];
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
