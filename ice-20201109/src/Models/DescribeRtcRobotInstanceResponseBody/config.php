<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRtcRobotInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableVoiceInterrupt;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @example zhixiaoxia
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return config
     */
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
