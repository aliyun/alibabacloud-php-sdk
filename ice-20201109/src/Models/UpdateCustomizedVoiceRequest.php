<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomizedVoiceRequest extends Model
{
    /**
     * @example ****4d5e829d498aaf966b119348****
     *
     * @var string
     */
    public $demoAudioMediaId;

    /**
     * @example xiaozhuan
     *
     * @var string
     */
    public $voiceId;
    protected $_name = [
        'demoAudioMediaId' => 'DemoAudioMediaId',
        'voiceId'          => 'VoiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateCustomizedVoiceRequest
     */
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
