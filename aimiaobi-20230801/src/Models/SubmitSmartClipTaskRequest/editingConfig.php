<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\backgroundMusicConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\mediaConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\speechConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\titleConfig;

class editingConfig extends Model
{
    /**
     * @var backgroundMusicConfig
     */
    public $backgroundMusicConfig;
    /**
     * @var mediaConfig
     */
    public $mediaConfig;
    /**
     * @var speechConfig
     */
    public $speechConfig;
    /**
     * @var titleConfig
     */
    public $titleConfig;
    protected $_name = [
        'backgroundMusicConfig' => 'BackgroundMusicConfig',
        'mediaConfig'           => 'MediaConfig',
        'speechConfig'          => 'SpeechConfig',
        'titleConfig'           => 'TitleConfig',
    ];

    public function validate()
    {
        if (null !== $this->backgroundMusicConfig) {
            $this->backgroundMusicConfig->validate();
        }
        if (null !== $this->mediaConfig) {
            $this->mediaConfig->validate();
        }
        if (null !== $this->speechConfig) {
            $this->speechConfig->validate();
        }
        if (null !== $this->titleConfig) {
            $this->titleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundMusicConfig) {
            $res['BackgroundMusicConfig'] = null !== $this->backgroundMusicConfig ? $this->backgroundMusicConfig->toArray($noStream) : $this->backgroundMusicConfig;
        }

        if (null !== $this->mediaConfig) {
            $res['MediaConfig'] = null !== $this->mediaConfig ? $this->mediaConfig->toArray($noStream) : $this->mediaConfig;
        }

        if (null !== $this->speechConfig) {
            $res['SpeechConfig'] = null !== $this->speechConfig ? $this->speechConfig->toArray($noStream) : $this->speechConfig;
        }

        if (null !== $this->titleConfig) {
            $res['TitleConfig'] = null !== $this->titleConfig ? $this->titleConfig->toArray($noStream) : $this->titleConfig;
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
        if (isset($map['BackgroundMusicConfig'])) {
            $model->backgroundMusicConfig = backgroundMusicConfig::fromMap($map['BackgroundMusicConfig']);
        }

        if (isset($map['MediaConfig'])) {
            $model->mediaConfig = mediaConfig::fromMap($map['MediaConfig']);
        }

        if (isset($map['SpeechConfig'])) {
            $model->speechConfig = speechConfig::fromMap($map['SpeechConfig']);
        }

        if (isset($map['TitleConfig'])) {
            $model->titleConfig = titleConfig::fromMap($map['TitleConfig']);
        }

        return $model;
    }
}
