<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class VideoTranslationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $capabilitiesShrink;

    /**
     * @var bool
     */
    public $enableQualityCheck;

    /**
     * @var bool
     */
    public $eraseOnly;

    /**
     * @var bool
     */
    public $removeLogo;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $subtitleMode;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'capabilitiesShrink' => 'Capabilities',
        'enableQualityCheck' => 'EnableQualityCheck',
        'eraseOnly' => 'EraseOnly',
        'removeLogo' => 'RemoveLogo',
        'sourceLanguage' => 'SourceLanguage',
        'subtitleMode' => 'SubtitleMode',
        'targetLanguage' => 'TargetLanguage',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilitiesShrink) {
            $res['Capabilities'] = $this->capabilitiesShrink;
        }

        if (null !== $this->enableQualityCheck) {
            $res['EnableQualityCheck'] = $this->enableQualityCheck;
        }

        if (null !== $this->eraseOnly) {
            $res['EraseOnly'] = $this->eraseOnly;
        }

        if (null !== $this->removeLogo) {
            $res['RemoveLogo'] = $this->removeLogo;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->subtitleMode) {
            $res['SubtitleMode'] = $this->subtitleMode;
        }

        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['Capabilities'])) {
            $model->capabilitiesShrink = $map['Capabilities'];
        }

        if (isset($map['EnableQualityCheck'])) {
            $model->enableQualityCheck = $map['EnableQualityCheck'];
        }

        if (isset($map['EraseOnly'])) {
            $model->eraseOnly = $map['EraseOnly'];
        }

        if (isset($map['RemoveLogo'])) {
            $model->removeLogo = $map['RemoveLogo'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['SubtitleMode'])) {
            $model->subtitleMode = $map['SubtitleMode'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
