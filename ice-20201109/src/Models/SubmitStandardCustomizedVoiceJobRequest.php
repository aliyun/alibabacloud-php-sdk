<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitStandardCustomizedVoiceJobRequest extends Model
{
    /**
     * @example ****571c704445f9a0ee011406c2****,****571c704445f9a0ee011406c2****,****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $audios;

    /**
     * @example ****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $authentication;

    /**
     * @example https://your-bucket.oss-cn-shanghai.aliyuncs.com/demo.mp3
     *
     * @var string
     */
    public $demoAudioMediaURL;

    /**
     * @example female
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitStandardCustomizedVoiceJobRequest
     */
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
