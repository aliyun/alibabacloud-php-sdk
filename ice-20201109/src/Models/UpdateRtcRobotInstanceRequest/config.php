<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceRequest;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $enableVoiceInterrupt;
    /**
     * @var string
     */
    public $greeting;
    /**
     * @var string
     */
    public $voiceId;
    protected $_name = [
        'enableVoiceInterrupt' => 'EnableVoiceInterrupt',
        'greeting'             => 'Greeting',
        'voiceId'              => 'VoiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableVoiceInterrupt) {
            $res['EnableVoiceInterrupt'] = $this->enableVoiceInterrupt;
        }

        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }

        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
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
        if (isset($map['EnableVoiceInterrupt'])) {
            $model->enableVoiceInterrupt = $map['EnableVoiceInterrupt'];
        }

        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }

        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }

        return $model;
    }
}
