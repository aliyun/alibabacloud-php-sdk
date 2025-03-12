<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\transcription;

use AlibabaCloud\Tea\Model;

class diarization extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $speakerCount;
    protected $_name = [
        'speakerCount' => 'SpeakerCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->speakerCount) {
            $res['SpeakerCount'] = $this->speakerCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diarization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpeakerCount'])) {
            $model->speakerCount = $map['SpeakerCount'];
        }

        return $model;
    }
}
