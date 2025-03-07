<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DetectAudioForCustomizedVoiceJobRequest extends Model
{
    /**
     * @description The sequence number of the recording file.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $audioRecordId;

    /**
     * @description The URL of the recording file.
     *
     * This parameter is required.
     * @example https://your-bucket.oss-cn-hangzhou.aliyuncs.com/record1.wav
     *
     * @var string
     */
    public $recordUrl;

    /**
     * @description The voice ID.
     *
     * This parameter is required.
     * @example xiaozhuan
     *
     * @var string
     */
    public $voiceId;
    protected $_name = [
        'audioRecordId' => 'AudioRecordId',
        'recordUrl'     => 'RecordUrl',
        'voiceId'       => 'VoiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioRecordId) {
            $res['AudioRecordId'] = $this->audioRecordId;
        }
        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }
        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectAudioForCustomizedVoiceJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioRecordId'])) {
            $model->audioRecordId = $map['AudioRecordId'];
        }
        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }
        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }

        return $model;
    }
}
