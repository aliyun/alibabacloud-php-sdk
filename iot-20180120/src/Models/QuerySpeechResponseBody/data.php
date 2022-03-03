<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechResponseBody\data\soundCodeConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $audioFormat;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var bool
     */
    public $enableSoundCode;

    /**
     * @var soundCodeConfig
     */
    public $soundCodeConfig;

    /**
     * @var string
     */
    public $speechCode;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $speechType;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'audioFormat'     => 'AudioFormat',
        'bizCode'         => 'BizCode',
        'enableSoundCode' => 'EnableSoundCode',
        'soundCodeConfig' => 'SoundCodeConfig',
        'speechCode'      => 'SpeechCode',
        'speechRate'      => 'SpeechRate',
        'speechType'      => 'SpeechType',
        'text'            => 'Text',
        'voice'           => 'Voice',
        'volume'          => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->enableSoundCode) {
            $res['EnableSoundCode'] = $this->enableSoundCode;
        }
        if (null !== $this->soundCodeConfig) {
            $res['SoundCodeConfig'] = null !== $this->soundCodeConfig ? $this->soundCodeConfig->toMap() : null;
        }
        if (null !== $this->speechCode) {
            $res['SpeechCode'] = $this->speechCode;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->speechType) {
            $res['SpeechType'] = $this->speechType;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['EnableSoundCode'])) {
            $model->enableSoundCode = $map['EnableSoundCode'];
        }
        if (isset($map['SoundCodeConfig'])) {
            $model->soundCodeConfig = soundCodeConfig::fromMap($map['SoundCodeConfig']);
        }
        if (isset($map['SpeechCode'])) {
            $model->speechCode = $map['SpeechCode'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['SpeechType'])) {
            $model->speechType = $map['SpeechType'];
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
