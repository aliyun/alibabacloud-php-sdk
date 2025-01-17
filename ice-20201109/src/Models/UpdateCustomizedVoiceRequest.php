<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomizedVoiceRequest extends Model
{
    /**
     * @var string
     */
    public $demoAudioMediaId;
    /**
     * @var string
     */
    public $voiceId;
    protected $_name = [
        'demoAudioMediaId' => 'DemoAudioMediaId',
        'voiceId'          => 'VoiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->demoAudioMediaId) {
            $res['DemoAudioMediaId'] = $this->demoAudioMediaId;
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
        if (isset($map['DemoAudioMediaId'])) {
            $model->demoAudioMediaId = $map['DemoAudioMediaId'];
        }

        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }

        return $model;
    }
}
