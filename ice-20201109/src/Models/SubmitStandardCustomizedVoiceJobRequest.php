<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitStandardCustomizedVoiceJobRequest extends Model
{
    /**
     * @var string
     */
    public $audios;
    /**
     * @var string
     */
    public $authentication;
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
    public $voiceName;
    protected $_name = [
        'audios'            => 'Audios',
        'authentication'    => 'Authentication',
        'demoAudioMediaURL' => 'DemoAudioMediaURL',
        'gender'            => 'Gender',
        'voiceName'         => 'VoiceName',
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

        if (null !== $this->authentication) {
            $res['Authentication'] = $this->authentication;
        }

        if (null !== $this->demoAudioMediaURL) {
            $res['DemoAudioMediaURL'] = $this->demoAudioMediaURL;
        }

        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
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

        if (isset($map['Authentication'])) {
            $model->authentication = $map['Authentication'];
        }

        if (isset($map['DemoAudioMediaURL'])) {
            $model->demoAudioMediaURL = $map['DemoAudioMediaURL'];
        }

        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        if (isset($map['VoiceName'])) {
            $model->voiceName = $map['VoiceName'];
        }

        return $model;
    }
}
