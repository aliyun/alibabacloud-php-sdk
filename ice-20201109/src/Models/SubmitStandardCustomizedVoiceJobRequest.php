<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitStandardCustomizedVoiceJobRequest extends Model
{
    /**
     * @description *   The material assets IDs of the materials for training.
     *   Separate multiple media IDs with commas (,).
     *
     * > : The total duration of all materials must be within 15 to 30 minutes. The duration of each material must be greater than 1 minute.
     * @example ****571c704445f9a0ee011406c2****,****571c704445f9a0ee011406c2****,****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $audios;

    /**
     * @description *   The media asset ID of the authentication audio.
     *
     *   Upload an audio file for identity authentication. If the voiceprint extracted from the uploaded file differs from that of the training file, the job fails.
     *
     **
     *
     **Note**: Clearly read and record the following text: I confirm to customize human voice cloning and provide audio files that contain my voice for training. I promise that I am responsible for the customized content and that the content complies with laws and regulations.
     *
     * @example ****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $authentication;

    /**
     * @description The URL of the sample audio file.
     *
     *   If this parameter is specified, a sample audio file is generated at the specified Object Storage Service (OSS) URL after the training is complete.
     *
     *   If this parameter is not specified, no sample audio file is generated.
     *
     **
     *
     **Note**: The URL must be a valid public OSS URL within your Alibaba Cloud account.
     *
     * @example https://your-bucket.oss-cn-shanghai.aliyuncs.com/demo.mp3
     *
     * @var string
     */
    public $demoAudioMediaURL;

    /**
     * @description The gender. Valid values:
     *
     *   female
     *   male
     *
     * @example female
     *
     * @var string
     */
    public $gender;

    /**
     * @description The voice name.
     *
     *   The name can be up to 32 characters in length.
     *
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
