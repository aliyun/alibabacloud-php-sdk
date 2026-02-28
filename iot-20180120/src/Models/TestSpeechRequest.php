<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class TestSpeechRequest extends Model
{
    /**
     * @var string
     */
    public $audioFormat;

    /**
     * @var bool
     */
    public $enableSoundCode;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var mixed[]
     */
    public $soundCodeConfig;

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
        'audioFormat' => 'AudioFormat',
        'enableSoundCode' => 'EnableSoundCode',
        'iotInstanceId' => 'IotInstanceId',
        'projectCode' => 'ProjectCode',
        'soundCodeConfig' => 'SoundCodeConfig',
        'speechRate' => 'SpeechRate',
        'speechType' => 'SpeechType',
        'text' => 'Text',
        'voice' => 'Voice',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (\is_array($this->soundCodeConfig)) {
            Model::validateArray($this->soundCodeConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }

        if (null !== $this->enableSoundCode) {
            $res['EnableSoundCode'] = $this->enableSoundCode;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }

        if (null !== $this->soundCodeConfig) {
            if (\is_array($this->soundCodeConfig)) {
                $res['SoundCodeConfig'] = [];
                foreach ($this->soundCodeConfig as $key1 => $value1) {
                    $res['SoundCodeConfig'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }

        if (isset($map['EnableSoundCode'])) {
            $model->enableSoundCode = $map['EnableSoundCode'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }

        if (isset($map['SoundCodeConfig'])) {
            if (!empty($map['SoundCodeConfig'])) {
                $model->soundCodeConfig = [];
                foreach ($map['SoundCodeConfig'] as $key1 => $value1) {
                    $model->soundCodeConfig[$key1] = $value1;
                }
            }
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
