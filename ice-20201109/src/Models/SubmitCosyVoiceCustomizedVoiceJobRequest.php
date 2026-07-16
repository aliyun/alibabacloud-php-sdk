<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitCosyVoiceCustomizedVoiceJobRequest extends Model
{
    /**
     * @var string
     */
    public $audios;

    /**
     * @var string
     */
    public $demoAudioMediaURL;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $voiceName;
    protected $_name = [
        'audios' => 'Audios',
        'demoAudioMediaURL' => 'DemoAudioMediaURL',
        'gender' => 'Gender',
        'model' => 'Model',
        'voiceName' => 'VoiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audios) {
            $res['Audios'] = $this->audios;
        }

        if (null !== $this->demoAudioMediaURL) {
            $res['DemoAudioMediaURL'] = $this->demoAudioMediaURL;
        }

        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
        if (isset($map['Audios'])) {
            $model->audios = $map['Audios'];
        }

        if (isset($map['DemoAudioMediaURL'])) {
            $model->demoAudioMediaURL = $map['DemoAudioMediaURL'];
        }

        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['VoiceName'])) {
            $model->voiceName = $map['VoiceName'];
        }

        return $model;
    }
}
