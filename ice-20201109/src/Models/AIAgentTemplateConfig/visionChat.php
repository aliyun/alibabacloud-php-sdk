<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;

use AlibabaCloud\Tea\Model;

class visionChat extends Model
{
    /**
     * @var int
     */
    public $asrMaxSilence;

    /**
     * @var bool
     */
    public $enableIntelligentSegment;

    /**
     * @var bool
     */
    public $enableVoiceInterrupt;

    /**
     * @var bool
     */
    public $gracefulShutdown;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var string
     */
    public $voiceId;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'asrMaxSilence'            => 'AsrMaxSilence',
        'enableIntelligentSegment' => 'EnableIntelligentSegment',
        'enableVoiceInterrupt'     => 'EnableVoiceInterrupt',
        'gracefulShutdown'         => 'GracefulShutdown',
        'greeting'                 => 'Greeting',
        'voiceId'                  => 'VoiceId',
        'volume'                   => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrMaxSilence) {
            $res['AsrMaxSilence'] = $this->asrMaxSilence;
        }
        if (null !== $this->enableIntelligentSegment) {
            $res['EnableIntelligentSegment'] = $this->enableIntelligentSegment;
        }
        if (null !== $this->enableVoiceInterrupt) {
            $res['EnableVoiceInterrupt'] = $this->enableVoiceInterrupt;
        }
        if (null !== $this->gracefulShutdown) {
            $res['GracefulShutdown'] = $this->gracefulShutdown;
        }
        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }
        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return visionChat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrMaxSilence'])) {
            $model->asrMaxSilence = $map['AsrMaxSilence'];
        }
        if (isset($map['EnableIntelligentSegment'])) {
            $model->enableIntelligentSegment = $map['EnableIntelligentSegment'];
        }
        if (isset($map['EnableVoiceInterrupt'])) {
            $model->enableVoiceInterrupt = $map['EnableVoiceInterrupt'];
        }
        if (isset($map['GracefulShutdown'])) {
            $model->gracefulShutdown = $map['GracefulShutdown'];
        }
        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }
        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
