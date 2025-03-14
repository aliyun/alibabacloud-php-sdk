<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitCustomizedVoiceJobRequest extends Model
{
    /**
     * @description The URL of the sample audio file.
     *
     *   If this parameter is specified, a sample audio file is generated at the specified Object Storage Service (OSS) URL after the training is complete.
     *
     *   If this parameter is not specified, no sample audio file is generated.
     **Note**: The URL must be a valid public OSS URL within your Alibaba Cloud account.
     * @example https://your-bucket.oss-cn-shanghai.aliyuncs.com/demo.MP3
     *
     * @var string
     */
    public $demoAudioMediaURL;

    /**
     * @description The voice ID.
     *
     * This parameter is required.
     *
     * @example xiaozhuan
     *
     * @var string
     */
    public $voiceId;
    protected $_name = [
        'demoAudioMediaURL' => 'DemoAudioMediaURL',
        'voiceId' => 'VoiceId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitCustomizedVoiceJobRequest
     */
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
