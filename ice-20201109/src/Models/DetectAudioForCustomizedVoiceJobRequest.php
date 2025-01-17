<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DetectAudioForCustomizedVoiceJobRequest extends Model
{
    /**
     * @var int
     */
    public $audioRecordId;
    /**
     * @var string
     */
    public $recordUrl;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
