<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomizedVoiceJobRequest extends Model
{
    /**
     * @var string
     */
    public $gender;
    /**
     * @var string
     */
    public $scenario;
    /**
     * @var string
     */
    public $voiceDesc;
    /**
     * @var string
     */
    public $voiceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
