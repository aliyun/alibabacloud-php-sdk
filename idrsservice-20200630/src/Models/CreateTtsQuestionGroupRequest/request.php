<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionGroupRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @example PCM
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
     * @example xiaoyun
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
        'format'     => 'Format',
        'pitchRate'  => 'PitchRate',
        'sampleRate' => 'SampleRate',
        'speechRate' => 'SpeechRate',
        'voice'      => 'Voice',
        'volume'     => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
