<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsCommonRequest;

use AlibabaCloud\Tea\Model;

class ttsRequest extends Model
{
    /**
     * @description appid
     *
     * @example d61be709-49d2-4cf1-b219-cd6181f72***
     *
     * @var string
     */
    public $appId;

    /**
     * @example WAV
     *
     * @var string
     */
    public $format;

    /**
     * @example 50
     *
     * @var int
     */
    public $pitchRate;

    /**
     * @example 16000
     *
     * @var int
     */
    public $sampleRate;

    /**
     * @example 50
     *
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $text;

    /**
     * @example Xiaoyun
     *
     * @var string
     */
    public $voice;

    /**
     * @example 50
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'appId'      => 'AppId',
        'format'     => 'Format',
        'pitchRate'  => 'PitchRate',
        'sampleRate' => 'SampleRate',
        'speechRate' => 'SpeechRate',
        'text'       => 'Text',
        'voice'      => 'Voice',
        'volume'     => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ttsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
