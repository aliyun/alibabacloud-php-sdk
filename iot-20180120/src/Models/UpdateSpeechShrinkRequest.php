<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSpeechShrinkRequest extends Model
{
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
     * @var string
     */
    public $soundCodeConfigShrink;

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
    public $voice;

    /**
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
