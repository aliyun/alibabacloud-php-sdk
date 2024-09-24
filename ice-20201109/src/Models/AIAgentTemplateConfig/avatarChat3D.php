<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;

use AlibabaCloud\Tea\Model;

class avatarChat3D extends Model
{
    /**
     * @var string
     */
    public $avatarId;

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
        'avatarId'             => 'AvatarId',
        'enableVoiceInterrupt' => 'EnableVoiceInterrupt',
        'gracefulShutdown'     => 'GracefulShutdown',
        'greeting'             => 'Greeting',
        'voiceId'              => 'VoiceId',
        'volume'               => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
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
     * @return avatarChat3D
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
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
