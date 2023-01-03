<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSpeechShrinkRequest extends Model
{
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
     * @example VlKzbj3XIZ****CeIHH6vR82JNCSzk**
     *
     * @var string
     */
    public $speechCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $speechRate;

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
        'enableSoundCode'       => 'EnableSoundCode',
        'iotInstanceId'         => 'IotInstanceId',
        'projectCode'           => 'ProjectCode',
        'soundCodeConfigShrink' => 'SoundCodeConfig',
        'speechCode'            => 'SpeechCode',
        'speechRate'            => 'SpeechRate',
        'voice'                 => 'Voice',
        'volume'                => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->speechCode) {
            $res['SpeechCode'] = $this->speechCode;
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
     * @return UpdateSpeechShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SpeechCode'])) {
            $model->speechCode = $map['SpeechCode'];
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
