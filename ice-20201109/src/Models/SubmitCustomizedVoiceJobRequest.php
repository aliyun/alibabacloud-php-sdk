<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitCustomizedVoiceJobRequest extends Model
{
    /**
     * @var string
     */
    public $demoAudioMediaURL;
    /**
     * @var string
     */
    public $voiceId;
    protected $_name = [
        'demoAudioMediaURL' => 'DemoAudioMediaURL',
        'voiceId'           => 'VoiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->demoAudioMediaURL) {
            $res['DemoAudioMediaURL'] = $this->demoAudioMediaURL;
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
        if (isset($map['DemoAudioMediaURL'])) {
            $model->demoAudioMediaURL = $map['DemoAudioMediaURL'];
        }

        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }

        return $model;
    }
}
