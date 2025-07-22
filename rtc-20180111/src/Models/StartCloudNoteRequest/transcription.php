<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Tea\Model;

class transcription extends Model
{
    /**
     * @var bool
     */
    public $diarizationEnabled;

    /**
     * @example b401a5da78e94xxxxc3129425c78b6a5
     *
     * @var string
     */
    public $phraseId;

    /**
     * @var int
     */
    public $speakerCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $transcriptionLevel;
    protected $_name = [
        'diarizationEnabled' => 'DiarizationEnabled',
        'phraseId' => 'PhraseId',
        'speakerCount' => 'SpeakerCount',
        'transcriptionLevel' => 'TranscriptionLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diarizationEnabled) {
            $res['DiarizationEnabled'] = $this->diarizationEnabled;
        }
        if (null !== $this->phraseId) {
            $res['PhraseId'] = $this->phraseId;
        }
        if (null !== $this->speakerCount) {
            $res['SpeakerCount'] = $this->speakerCount;
        }
        if (null !== $this->transcriptionLevel) {
            $res['TranscriptionLevel'] = $this->transcriptionLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcription
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiarizationEnabled'])) {
            $model->diarizationEnabled = $map['DiarizationEnabled'];
        }
        if (isset($map['PhraseId'])) {
            $model->phraseId = $map['PhraseId'];
        }
        if (isset($map['SpeakerCount'])) {
            $model->speakerCount = $map['SpeakerCount'];
        }
        if (isset($map['TranscriptionLevel'])) {
            $model->transcriptionLevel = $map['TranscriptionLevel'];
        }

        return $model;
    }
}
