<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedVoiceJobRequest extends Model
{
    /**
     * @description The gender. Valid values:
     *
     *   female
     *   male
     *
     * This parameter is required.
     * @example female
     *
     * @var string
     */
    public $gender;

    /**
     * @description The scenario. Valid values:
     *
     *   story
     *   interaction
     *   navigation
     *
     * This parameter is required.
     * @example story
     *
     * @var string
     */
    public $scenario;

    /**
     * @description The voice description.
     *
     *   The description can be up to 256 characters in length.
     *
     * @var string
     */
    public $voiceDesc;

    /**
     * @description The voice ID. It can be the English name or Chinese Pinyin of the voice.
     *
     *   The value must be a unique ID that is not used by other custom voices.
     *   The ID can be up to 32 characters in length.
     *   Only letters and digits are supported.
     *
     * This parameter is required.
     * @example xiaozhuan
     *
     * @var string
     */
    public $voiceId;

    /**
     * @description The voice name.
     *
     *   The name can be up to 32 characters in length.
     *
     * @var string
     */
    public $voiceName;
    protected $_name = [
        'gender'    => 'Gender',
        'scenario'  => 'Scenario',
        'voiceDesc' => 'VoiceDesc',
        'voiceId'   => 'VoiceId',
        'voiceName' => 'VoiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CreateCustomizedVoiceJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
