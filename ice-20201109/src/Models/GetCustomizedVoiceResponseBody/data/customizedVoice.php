<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceResponseBody\data;

use AlibabaCloud\Tea\Model;

class customizedVoice extends Model
{
    /**
     * @example ****42d3c312402982be65975f5b****
     *
     * @var string
     */
    public $demoAudioMediaId;

    /**
     * @example female
     *
     * @var string
     */
    public $gender;

    /**
     * @example interaction
     *
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $voiceDesc;

    /**
     * @example xiaozhuan
     *
     * @var string
     */
    public $voiceId;

    /**
     * @var string
     */
    public $voiceName;
    protected $_name = [
        'demoAudioMediaId' => 'DemoAudioMediaId',
        'gender'           => 'Gender',
        'scenario'         => 'Scenario',
        'voiceDesc'        => 'VoiceDesc',
        'voiceId'          => 'VoiceId',
        'voiceName'        => 'VoiceName',
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
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->voiceDesc) {
            $res['VoiceDesc'] = $this->voiceDesc;
        }
        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }
        if (null !== $this->voiceName) {
            $res['VoiceName'] = $this->voiceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customizedVoice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemoAudioMediaId'])) {
            $model->demoAudioMediaId = $map['DemoAudioMediaId'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['VoiceDesc'])) {
            $model->voiceDesc = $map['VoiceDesc'];
        }
        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }
        if (isset($map['VoiceName'])) {
            $model->voiceName = $map['VoiceName'];
        }

        return $model;
    }
}
