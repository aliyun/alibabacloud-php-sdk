<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class TestSpeechShrinkRequest extends Model
{
    /**
     * @example wav
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSoundCode;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $projectCode;

    /**
     * @example {"SoundCodeContent": "www.taobao.com", "AdditionalDuration": 3}
     *
     * @var string
     */
    public $soundCodeConfigShrink;

    /**
     * @example 0
     *
     * @var int
     */
    public $speechRate;

    /**
     * @example custom
     *
     * @var string
     */
    public $speechType;

    /**
     * @example test
     *
     * @var string
     */
    public $text;

    /**
     * @example Siyue
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
        'audioFormat'           => 'AudioFormat',
        'enableSoundCode'       => 'EnableSoundCode',
        'iotInstanceId'         => 'IotInstanceId',
        'projectCode'           => 'ProjectCode',
        'soundCodeConfigShrink' => 'SoundCodeConfig',
        'speechRate'            => 'SpeechRate',
        'speechType'            => 'SpeechType',
        'text'                  => 'Text',
        'voice'                 => 'Voice',
        'volume'                => 'Volume',
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
        if (null !== $this->enableSoundCode) {
            $res['EnableSoundCode'] = $this->enableSoundCode;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }
        if (null !== $this->soundCodeConfigShrink) {
            $res['SoundCodeConfig'] = $this->soundCodeConfigShrink;
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
     * @return TestSpeechShrinkRequest
     */
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
            $model->soundCodeConfigShrink = $map['SoundCodeConfig'];
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
