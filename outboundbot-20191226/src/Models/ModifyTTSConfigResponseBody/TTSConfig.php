<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTTSConfigResponseBody;

use AlibabaCloud\Dara\Model;

class TTSConfig extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $pitchRate;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $speechRate;

    /**
     * @var string
     */
    public $TTSConfigId;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var string
     */
    public $volume;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pitchRate' => 'PitchRate',
        'scriptId' => 'ScriptId',
        'speechRate' => 'SpeechRate',
        'TTSConfigId' => 'TTSConfigId',
        'voice' => 'Voice',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }

        if (null !== $this->TTSConfigId) {
            $res['TTSConfigId'] = $this->TTSConfigId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }

        if (isset($map['TTSConfigId'])) {
            $model->TTSConfigId = $map['TTSConfigId'];
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
