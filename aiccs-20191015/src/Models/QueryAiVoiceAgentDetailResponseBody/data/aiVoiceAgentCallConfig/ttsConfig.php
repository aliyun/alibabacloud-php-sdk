<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentCallConfig;

use AlibabaCloud\Dara\Model;

class ttsConfig extends Model
{
    /**
     * @var bool
     */
    public $backgroundEnabled;

    /**
     * @var int
     */
    public $backgroundSound;

    /**
     * @var int
     */
    public $backgroundVolume;

    /**
     * @var bool
     */
    public $mixingEnabled;

    /**
     * @var int
     */
    public $mixingTemplate;

    /**
     * @var int
     */
    public $ttsSpeed;

    /**
     * @var string
     */
    public $ttsStyle;

    /**
     * @var int
     */
    public $ttsVolume;

    /**
     * @var string
     */
    public $voiceCode;

    /**
     * @var string
     */
    public $voiceType;
    protected $_name = [
        'backgroundEnabled' => 'BackgroundEnabled',
        'backgroundSound' => 'BackgroundSound',
        'backgroundVolume' => 'BackgroundVolume',
        'mixingEnabled' => 'MixingEnabled',
        'mixingTemplate' => 'MixingTemplate',
        'ttsSpeed' => 'TtsSpeed',
        'ttsStyle' => 'TtsStyle',
        'ttsVolume' => 'TtsVolume',
        'voiceCode' => 'VoiceCode',
        'voiceType' => 'VoiceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundEnabled) {
            $res['BackgroundEnabled'] = $this->backgroundEnabled;
        }

        if (null !== $this->backgroundSound) {
            $res['BackgroundSound'] = $this->backgroundSound;
        }

        if (null !== $this->backgroundVolume) {
            $res['BackgroundVolume'] = $this->backgroundVolume;
        }

        if (null !== $this->mixingEnabled) {
            $res['MixingEnabled'] = $this->mixingEnabled;
        }

        if (null !== $this->mixingTemplate) {
            $res['MixingTemplate'] = $this->mixingTemplate;
        }

        if (null !== $this->ttsSpeed) {
            $res['TtsSpeed'] = $this->ttsSpeed;
        }

        if (null !== $this->ttsStyle) {
            $res['TtsStyle'] = $this->ttsStyle;
        }

        if (null !== $this->ttsVolume) {
            $res['TtsVolume'] = $this->ttsVolume;
        }

        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }

        if (null !== $this->voiceType) {
            $res['VoiceType'] = $this->voiceType;
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
        if (isset($map['BackgroundEnabled'])) {
            $model->backgroundEnabled = $map['BackgroundEnabled'];
        }

        if (isset($map['BackgroundSound'])) {
            $model->backgroundSound = $map['BackgroundSound'];
        }

        if (isset($map['BackgroundVolume'])) {
            $model->backgroundVolume = $map['BackgroundVolume'];
        }

        if (isset($map['MixingEnabled'])) {
            $model->mixingEnabled = $map['MixingEnabled'];
        }

        if (isset($map['MixingTemplate'])) {
            $model->mixingTemplate = $map['MixingTemplate'];
        }

        if (isset($map['TtsSpeed'])) {
            $model->ttsSpeed = $map['TtsSpeed'];
        }

        if (isset($map['TtsStyle'])) {
            $model->ttsStyle = $map['TtsStyle'];
        }

        if (isset($map['TtsVolume'])) {
            $model->ttsVolume = $map['TtsVolume'];
        }

        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }

        if (isset($map['VoiceType'])) {
            $model->voiceType = $map['VoiceType'];
        }

        return $model;
    }
}
